<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Pages - A content management system module main model.
 *
 * @package    Pages
 * @category   Models
 */
class Pages {

    const   INFO = 'info',
            SUCCESS = 'success',
            WARNING = 'warning',
            ERROR = 'error',
    
            TABLE_CONTENT = 'pages_content',
            TABLE_SETTINGS = 'pages_settings';
    
    /*
     *  Config keys:
     *      DB_PROFILE - kohana database profile (cannot be overwritten by config from db)
     *      ACTIVE_TEMPLATE - active site template (subfolder of "views" folder)
     *      DEFAULT_MAIN_TEMPLATE - default mail template (file name)
     *      DEFAULT_PAGE_TEMPLATE - default page template (file name)
     *      START_PAGE - start page id
     *      SITE_NAME - site name
     */

    private static $pages = array();
    private static $consts = array();
    
    public static $config = NULL;
    
    public static $dbProfile;

    public static function init()
    {
        if (!isset(self::$config))
        {
            $kohana_config = Kohana::$config->load('pages')->as_array();
            self::$dbProfile = Arr::get(self::$config, 'DB_PROFILE', 'default');
            $db_config = DB::select()->from(self::TABLE_SETTINGS)->execute(self::$dbProfile)->as_array('id', 'value');
            self::$config = array_replace($kohana_config, $db_config);
        }
    }
    
    public static function alert($message, $type)
    {
        $session = Session::instance();
        $alerts = $session->get('pagesAlerts', array());
        if (is_array($message))
        {
            foreach($message as $messageText)
            {
                $alerts[] = array('message' => $messageText, 'type' => $type);
            }
        }
        else
        {
            $alerts[] = array('message' => $message, 'type' => $type);
        }
        $session->set('pagesAlerts', $alerts);
    }
    
    public static function alerts()
    {
        return Session::instance()->get_once('pagesAlerts', array());
    }
    
    public static function getView($fileName, $absolute = FALSE) {
        if ($absolute)
        {
            return View::factory($fileName);
        }
        else
        {
            return View::factory('pages/' . self::$config['ACTIVE_TEMPLATE'] . '/' . $fileName);
        }
    }

    public static function getChildPages($id, $start = 0, $maxCount = 0, $showHidden = FALSE)
    {
        $result = array();
        $query = DB::select()->from(self::TABLE_CONTENT);
        if ($maxCount > 0)
        {
            $query->offset($start)->limit($maxCount);
        }
        if (isset($id))
        {
            $queryResult = $query->where('parent_id', '=', $id);
            if ($showHidden)
            {
                $queryResult = $queryResult->order_by('title')->execute(self::$dbProfile);
            }
            else
            {
                $queryResult = $queryResult->and_where('visible' , '<>', '0')->order_by('title')->execute(self::$dbProfile);
            }
        }
        else
        {
            $queryResult = $query->where('parent_id', 'is', null);
            if ($showHidden)
            {
                $queryResult = $queryResult->order_by('id')->execute(self::$dbProfile);
            }
            else
            {
                $queryResult = $queryResult->and_where('visible' , '<>', '0')->order_by('id')->execute(self::$dbProfile);
            }
        }
        foreach ($queryResult as $row)
        {
            if (isset(self::$pages[$row['id']]))
            {
                $page = self::$pages[$row['id']];
            }
            else
            {
                $page = Pages_Page::fromArray($row);
                self::$pages[$row['id']] = $page;
            }
            $result[$row['id']] = $page;
        }
        return $result;
    }

    public static function getChildCategories($id = null)
    {
        $result = array();
        $query = DB::select(
                "parents.id",
                "parents.title",
                "parents.prev_text",
                "parents.full_text",
                "parents.url",
                "parents.short_url",
                "parents.visible",
                "parents.searchable",
                "parents.parent_id",
                "parents.main_template",
                "parents.page_template",
                "parents.default_main_template",
                "parents.default_page_template"
                )->distinct(true)->from(array(self::TABLE_CONTENT, 'parents'))
            ->join(array(self::TABLE_CONTENT, 'childs'))->on('parents.id', '=', 'childs.parent_id');
        if (isset($id))
        {
            $queryResult = $query->where('parents.parent_id', '=', $id)->execute(self::$dbProfile);
        }
        else
        {
            $queryResult = $query->where('parents.parent_id', 'is', null)->execute(self::$dbProfile);
        }
        foreach ($queryResult as $row)
        {
            if (isset(self::$pages[$row['id']]))
            {
                $page = self::$pages[$row['id']];
            }
            else
            {
                $page = Pages_Page::fromArray($row);
                self::$pages[$row['id']] = $page;
            }
            $result[$row['id']] = $page;
        }
        return $result;
    }
    
    public static function getRootPages($start = 0, $maxCount = 0, $showHidden = FALSE)
    {
        return self::getChildPages(null, $start, $maxCount, $showHidden);
    }

    public static function getPageById($id, $showHidden = TRUE)
    {
        $id = (int) $id;
        if (isset(self::$pages[$id]))
        {
            return self::$pages[$id];
        }
        else
        {
            $queryResult = DB::select()->from(self::TABLE_CONTENT)->where('id', '=', $id);
            if ($showHidden)
            {
                $queryResult = $queryResult->execute(self::$dbProfile);
            }
            else
            {
                $queryResult = $queryResult->and_where('visible' , '<>', '0')->execute(self::$dbProfile);
            }
            if ($queryResult->count() != 0)
            {
                $page = Pages_Page::fromArray($queryResult->current());
                self::$pages[$id] = $page;
                return $page;
            }
            else
            {
                return null;
            }
        }
    }

    public static function getPageByUrl($parent_id, $url, $showHidden = FALSE)
    {
        $queryResult = DB::select()->from(self::TABLE_CONTENT);
        if (isset($parent_id))
        {
            $queryResult = $queryResult->where('parent_id', '=', $parent_id);
        }
        else
        {
            $queryResult = $queryResult->where('parent_id', 'is', null);
        }
        $queryResult = $queryResult->and_where('url', '=', $url);
        if ($showHidden)
        {
            $queryResult = $queryResult->execute(self::$dbProfile);
        }
        else
        {
            $queryResult = $queryResult->and_where('visible' , '<>', '0')->execute(self::$dbProfile);
        }
        if ($queryResult->count() != 0)
        {
            $row = $queryResult->current();
            $page = Pages_Page::fromArray($row);
            self::$pages[$row['id']] = $page;
            return $page;
        }
        else
        {
            return null;
        }
    }
    
    public static function getPageByFullUrl($full_url, $showHidden = FALSE)
    {
        // Handle root page
        if (empty($full_url))
        {
            if (isset(self::$config['START_PAGE']))
            {
                return self::getPageById(self::$config['START_PAGE']);
            }
            else
            {
                return null;
            }
        }
        
        // Hanlde short url case
        $queryResult = DB::select()->from(self::TABLE_CONTENT)->where('short_url', '=', $full_url);
        if ($showHidden)
        {
            $queryResult = $queryResult->execute(self::$dbProfile);
        }
        else
        {
            $queryResult = $queryResult->and_where('visible' , '<>', '0')->execute(self::$dbProfile);
        }
        
        if ($queryResult->count() != 0)
        {
                $row = $queryResult->current();
                $page = Pages_Page::fromArray($row);
                self::$pages[$row['id']] = $page;
                return $page;
        }
        
        // Handle default case
        $path = explode('/', $full_url);
        $parent_id = null;
        foreach ($path as $key => $value)
        {
            $page = self::getPageByUrl($parent_id, $value, $showHidden);
            if (!isset($page))
            {
                return null;
            }
            $parent_id = $page->id;
        }
        return $page;
    }

    public static function getPagesCount($id = null)
    {
        if (isset($id))
        {
            $result = DB::select(DB::expr('COUNT("id") as total'))
                    ->from(self::TABLE_CONTENT)
                    ->where('parent_id', '=', $id)
                    ->execute(self::$dbProfile)
                    ->as_array(null, 'total');
        }
        else
        {
            $result = DB::select(DB::expr('COUNT("id") as total'))
                    ->from(self::TABLE_CONTENT)
                    ->where('parent_id', 'is', null)
                    ->execute(self::$dbProfile)
                    ->as_array(null, 'total');
        }
        return $result[0];
    }
    
    public static function createPage($title, $url)
    {
        $result = DB::insert(self::TABLE_CONTENT, array('title', 'url', 'visible', 'searchable'))
                ->values(array($title, $url, 0, 0))
                ->execute(self::$dbProfile);
        return self::getPageById($result[0]);
    }
    
    public static function updatePage($id, $data)
    {
        DB::update(self::TABLE_CONTENT)->set($data)->where('id', '=', $id)->execute(self::$dbProfile);
    }
    
    public static function deleteAllChildPages($id)
    {
        $queryResult = DB::select('id')->from(self::TABLE_CONTENT)->where('parent_id', '=', $id)->execute(self::$dbProfile);
        $childs = $queryResult->as_array(null, 'id');
        foreach($childs as $child)
        {
            self::deleteAllChildPages($child);
        }
        if(count($childs) != 0)
        {
            DB::delete(self::TABLE_CONTENT)->where('id', 'in', $childs)->execute(self::$dbProfile);
        }
    }
    
    public static function deletePage($id)
    {
        self::deleteAllChildPages($id);
        DB::delete(self::TABLE_CONTENT)->where('id', '=', $id)->execute(self::$dbProfile);
    }
    
    public static function renderPage($id, $data)
    {
        $page = self::getPageById($id);
        if (isset($page))
        {
            return $page->render($data);
        }
        else
        {
            return null;
        }
    }
    
}

/*
 * Static variables initialization
 */
Pages::init();
