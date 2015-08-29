<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Pages_Page — A content management system module page model.
 *
 * @package    Pages
 * @category   Models
 */
class Pages_Page {
    
    private static $propsMapping = array(
        'id' => 'id',
        'title' => 'title',
        'prevText' => 'prev_text',
        'fullText' => 'full_text',
        'url' => 'url',
        'shortUrl' => 'short_url',
        'visible' => 'visible',
        'searchable' => 'searchable',
        'parentId' => 'parent_id',
        'mainTemplate' => 'main_template',
        'pageTemplate' => 'page_template',
        'default_mainTemplate' => 'default_main_template',
        'default_pageTemplate' => 'default_page_template',
    );
    
    private $data = array();
    
    public static function fromArray($data)
    {
        $page = new Pages_Page();
        $page->data = $data;
        return $page;
    }
    
    public function __get($name)
    {
        switch ($name) {
            case '_fullText':
                return Arr::get($this->data, self::$propsMapping['fullText']);
                break;
            case 'fullText':
                if (empty($this->data[self::$propsMapping['fullText']]))
                {
                    return $this->data[self::$propsMapping['prevText']];
                }
                else
                {
                    return $this->data[self::$propsMapping['fullText']];
                }
                break;
            case '_mainTemplate':
                return Arr::get($this->data, self::$propsMapping['mainTemplate']);
                break;
            case 'mainTemplate':
                $page = $this;
                $tpl = Arr::get($this->data, self::$propsMapping['mainTemplate']);
                while(!isset($tpl))
                {
                    $page = $page->getParentPage();
                    if (isset($page))
                    {
                        $tpl = $page->default_mainTemplate;
                    }
                    else
                    {
                        $tpl = Pages::$config['DEFAULT_MAIN_TEMPLATE'];
                    }
                }
                return $tpl;
                break;
            case '_pageTemplate':
                return Arr::get($this->data, self::$propsMapping['pageTemplate']);
                break;
            case 'pageTemplate':
                $page = $this;
                $tpl = Arr::get($this->data, self::$propsMapping['pageTemplate']);
                while(!isset($tpl))
                {
                    $page = $page->getParentPage();
                    if (isset($page))
                    {
                        $tpl = $page->default_pageTemplate;
                    }
                    else
                    {
                        $tpl = Pages::$config['DEFAULT_PAGE_TEMPLATE'];
                    }
                }
                return $tpl;
                break;
            default:
                if (isset(self::$propsMapping[$name]))
                {
                    return Arr::get($this->data, self::$propsMapping[$name]);
                }
                else
                {
                    return null;
                }
        }
    }
    
    public function __set($name, $value)
    {
        switch ($name) {
            case 'parentId':
            case 'shortUrl':
            case 'mainTemplate':
            case 'pageTemplate':
            case 'default_mainTemplate':
            case 'default_pageTemplate':
                if (empty($value))
                {
                    $value = null;
                }
                $this->data[self::$propsMapping[$name]] = $value;
                break;
            case 'title':
                $this->data[self::$propsMapping[$name]] = htmlspecialchars($value);
                break;
            case 'visible':
            case 'searchable':
                if (empty($value))
                {
                    $value = 0;
                }
                else
                {
                    $value = 1;
                }
                $this->data[self::$propsMapping[$name]] = $value;
                break;
            default:
                if (isset(self::$propsMapping[$name]))
                {
                    $this->data[self::$propsMapping[$name]] = $value;
                }
        }
    }
    
    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
    
    public function __unset($name)
    {
        unset($this->data[$name]);
    }
    
    public function getFullUrl($useShort = TRUE)
    {
        if ($useShort AND !empty($this->data[self::$propsMapping['shortUrl']]))
        {
            return $this->data[self::$propsMapping['shortUrl']];
        }
        $page = $this;
        $fullUrl = array();
        while (isset($page))
        {
            $fullUrl[] = $page->data[self::$propsMapping['url']];
            $page = $page->getParentPage();
        }
        return implode('/', array_reverse($fullUrl));
    }
    
    public function getParentPage()
    {
        return Pages::getPageById($this->data[self::$propsMapping['parentId']]);
    }
    
    public function getChildPages($start = 0, $maxCount = 0, $showHidden = FALSE)
    {
        return Pages::getChildPages($this->data[self::$propsMapping['id']], $start, $maxCount, $showHidden);
    }
    
    public function getChildCategories()
    {
        return Pages::getChildCategories($this->data[self::$propsMapping['id']]);
    }

    public function save()
    {
        Pages::updatePage($this->data['id'], $this->data);
    }
    
    public function render($data = array())
    {
        $pageView = Pages::getView($this->pageTemplate);
        $pageView->set('page', $this);
        $pageView->set($data);
        
        $mainView = Pages::getView($this->mainTemplate);
        $mainView->set('page', $this);
        $mainView->set($data);
        $mainView->set('content', $pageView->render());
        
        return $mainView->render();
    }
    
}