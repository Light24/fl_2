<?php

defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

    /** @var string Общий файл шаблона */
    public $template = 'Common';

    /** @var integer ID пользователя */
    public $uid = null;

    /** @var Kohana_Session Объект сессии пользователя */
    public $_session = null;

    /** @var boolean Это ajax? */
    protected $_ajax = FALSE;

    /** @var boolean Это внутренний запрос? */
    protected $_internal = FALSE;

    /** @var Kohana_Config Конфигурация приложения */
    protected $_config;
    public $idna = null;


    public function before()
    {
        // установим общий шаблон
        $this->tpl = 'default';
        $this->_config = Kohana::$config->load($this->tpl);

        // выполним общую инициализацию
        parent::before();

        // Проверка, является ли текущий запрос первым
        if (!$this->request->is_initial()) {
            $this->_internal = TRUE;
            $this->auto_render = FALSE;
        }

        // Проверка, является ли текущий запрос асинхронным
        if ($this->request->is_ajax()) {
            $this->_ajax = TRUE;
            $this->auto_render = FALSE;
        }

        // Получение сессии
        $this->_session = Session::instance();
        $this->uid = $this->_session->get('uid');

        if ($this->auto_render) {
            $this->template->title = '';
            $this->template->cabinetTitle = '';
            $this->template->titleSeparator = '::';
            $this->template->content = '';
            $this->template->headers = '';
            $this->template->header = '';
            $this->template->footer = '';
            $this->template->bodyClass = '';
            $this->template->styles = array();
            $this->template->scripts = array();
            $this->template->mata = array();
        }
        $user = Session::instance()->get('user');

        // загрузим дополнительные моудли
        require Kohana::find_file('vendor', 'idna_convert');
        $this->idna = new idna_convert();

        require Kohana::find_file('vendor', 'class.smtp');


        View::set_global('config', $this->_config);
        View::set_global('session', $this->_session);
        $this->template->title = 'Q&A ';
        $this->template->pageTitle = '';

        $catsPrefix = Controller_Question::get_prefix_cats();
        $uid        = $this->request->param('userID', 0);
        $cid        = $this->request->param('catID', 0);

        $this->template->header = View::factory('/header', array('user' => $user, 'catsPrefix' => $catsPrefix, 'uid' => $uid, 'cid' => $cid));
        Session::instance()->set('isMsg', 0);

        $user = Session::instance()->get('user', 0);
        if (Controller_Users::action_checkout())
        {
          $user['id'] = intval($user['id']);

          $queryMsg = DB::query(Database::SELECT, "SELECT count(id) as cnt FROM `messages`
                WHERE `user_res`=" . $user['id'] . " AND `flag`=0 ")->execute()->get('cnt');
          Session::instance()->set('isMsg', $queryMsg);
        }

        $this->template->side_left  = Request::factory("user_question/get_left_questions_best")->execute()->body();

        $userID = $this->request->param('userID');
        $this->template->side_right = Request::factory("user_question/get_cats/$userID")->execute()->body();

        $this->template->footer = View::factory($this->tpl . '/footer', array(
                                                'auth_links' => Jslogin::instance()->get_authorization_links()));
    }


    public function crmMakeResult($status, $message) {
        $result = array();
        $result['status'] = $status;
        $result['message'] = $message;
        return $result;
    }

    public function crmIsSuccess($result) {
        if (Arr::get($result, 'status') === true) {
            return true;
        } else {
            return false;
        }
    }

    /*
     * function crmCheckAuth()
     * Возвращаемое значение:
     *      true  - пользователь авторизирован,
     *      false - пользователь не авторизирован.
     */

    public function crmCheckAuth() {
        return !empty($this->uid);
    }

    /*
     * function crmLoginByEmail($email, $password)
     * Параметры:
     *      $email - e-mail,
     *      $password - пароль;
     * Возвращаемое значение:
     *      массив со следующим содержанием:
     *          $result['status'] - результат выполнения операции (true - успешно, false - ошибка),
     *          $result['message'] - текстовое описание результата (пример: "Неправильный пароль")
     */

    public function crmLoginByEmail($email, $password) {
        $req = new stdClass;
        $req->mode = 1;
        $req->email = $email;
        $req->passwordHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $password);

        //print_r($req);
        $res = $this->connect->call('crm.cabinet.Login', $req);
        //print_r($res);

        if ($res->res == 1) {
            $this->uid = $res->uid;
            $this->_session->set('uid', $res->uid);
            $this->crmUpdateSession();
            return $this->crmMakeResult(true, 'Вход выполнен');
        } else {
            return $this->crmMakeResult(false, 'Неверная пара E-mail/Пароль');
        }
    }

    /*
     * function crmLoginByPhone($email, $password)
     * Параметры:
     *      $phone - телефон,
     *      $password - пароль;
     * Возвращаемое значение:
     *      массив со следующим содержанием:
     *          $result['status'] - результат выполнения операции (true - успешно, false - ошибка),
     *          $result['message'] - текстовое описание результата (пример: "Неправильный пароль")
     */

    public function crmLoginByPhone($phone, $password) {
        $req = new stdClass;
        $req->mode = 4;
        $req->phone = $phone;
        $req->passwordHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $password);

        //print_r($req);
        $res = $this->connect->call('crm.cabinet.Login', $req);
        //print_r($res);

        if ($res->res == 1) {
            $this->uid = $res->uid;
            $this->_session->set('uid', $res->uid);
            $this->crmUpdateSession();
            return $this->crmMakeResult(true, 'Вход выполнен');
        } else {
            return $this->crmMakeResult(false, 'Неверная пара Телефон/Пароль');
        }
    }

    /*
     * function crmLoginByCard($cardNum, $cardPin)
     * Параметры:
     *      $cardNum - номер карты,
     *      $cardPin - пин;
     * Возвращаемое значение:
     *      массив со следующим содержанием:
     *          $result['status'] - результат выполнения операции (true - успешно, false - ошибка),
     *          $result['message'] - текстовое описание результата (пример: "Карта не найдена")
     */

    public function crmLoginByCard($cardNum, $cardPin) {
        $req = new stdClass;
        $req->mode = 3;
        $req->cardNum = $cardNum;
        $req->cardPinHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $cardPin);

        //print_r($req);
        $res = $this->connect->call('crm.cabinet.Login', $req);
        //print_r($res);

        if ($res->res == 1) {
            $this->uid = $res->uid;
            $this->_session->set('uid', $res->uid);
            $this->crmUpdateSession();
            return $this->crmMakeResult(true, 'Вход выполнен');
        } else {
            return $this->crmMakeResult(false, 'Неверная пара Номер/Пин');
        }
    }

    public function crmRegister($vals) {
        if (isset($vals['cardPin'])) {
            $cardPinHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $vals['cardPin']);
        } else {
            $cardPinHash = null;
        }
        $password = $vals['password'];
        $passwordHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $vals['password']);
        $vals['password'] = $passwordHash;
        $req = new stdClass;
        if (isset($vals['cardNum'])) {
            $req->cardNum = $vals['cardNum'];
        }
        $req->cardPinHash = $cardPinHash;
        $req->buyer = new stdClass;
        $req->buyer->fields = array();
        foreach ($vals as $field => $val) {
            if ('addr' !== substr($field, 0, 4))
                $req->buyer->fields[$field] = $val;
        }


        $sendEmailAdv = Arr::get($_REQUEST, 'sendEmailAdv');
        $sendSMSAdv = Arr::get($_REQUEST, 'sendSMSAdv');

        if ($sendEmailAdv == 1 && $req->buyer->fields['sendEmail'] == 1)
            $req->buyer->fields['sendEmail'] = 3;
        elseif ($req->buyer->fields['sendEmail'] == 1)
            $req->buyer->fields['sendEmail'] = 1;
        else
            $req->buyer->fields['sendEmail'] = 0;

        if ($sendSMSAdv == 1 && $req->buyer->fields['sendSMS'] == 1)
            $req->buyer->fields['sendSMS'] = 3;
        elseif ($req->buyer->fields['sendSMS'] == 1)
            $req->buyer->fields['sendSMS'] = 1;
        else
            $req->buyer->fields['sendSMS'] = 0;

        /*  $address = new stdClass;
          $address->addrName = Arr::get($vals, 'addrName');
          $address->addrRegion = Arr::get($vals, 'addrRegion');
          $address->addrCity = Arr::get($vals, 'addrCity');
          $address->addrStreet = Arr::get($vals, 'addrStreet');
          $address->addrBuilding = Arr::get($vals, 'addrBuilding');
          $address->addrFlat = Arr::get($vals, 'addrFlat');
          $address->addrHousing = Arr::get($vals, 'addrHousing');

          $req->buyer->addresses = new stdClass;
          $req->buyer->addresses->address1 = $address; */

        $res = $this->connect->call('crm.cabinet.Register', $req);
        //$res = new stdClass; // print_r
        //$res->res = 1;
        //$res->uid = 26;
        //print_r($res);
        switch ($res->res) {
            case 1:
                // Success
                break;
            case 4:
                // Email not unique
                return $this->crmMakeResult(false, 'Такой e-mail уже зарегистрирован');
                break;
            case 2:
                // Attr error
                $errors = array();
                foreach ($res['itemRes']['res'] as $attr) {
                    if ($attr['attrRes'] == 3) {
                        // REQUIRED
                        $errors[] = $attr['id'] . ' - Поле не заполнено';
                    } elseif ($attr['attrRes'] == 2) {
                        // VALUE_ERROR
                        if ($attr['valueRes'][0] == 2) {
                            // NOT_UNIQUE
                            if ($attr['id'] == 'email') {
                                $errors[] = 'Такой e-mail уже зарегистрирован';
                            } else {
                                $errors[] = $attr['id'] . ' - Значение не уникально';
                            }
                        } else {
                            $errors[] = $attr['id'] . ' - Неверный формат';
                        }
                    }
                }
                return $this->crmMakeResult(false, implode("\n", $errors));
                break;
            case 6:
                return $this->crmMakeResult(false, 'Карта не активированна на кассе');
                break;
            case 7:
                return $this->crmMakeResult(false, 'Карта заблокирована');
                break;
            case 8:
                return $this->crmMakeResult(false, 'Карта уже зарегистрирована');
                break;
            case 9:
                return $this->crmMakeResult(false, 'Срок действия карты закончился');
                break;
            case 13:
                return $this->crmMakeResult(false, 'Такой телефон уже зарегистрирован');
                break;
            case 14:
                return $this->crmMakeResult(false, 'Такой телефон уже зарегистрирован');
                break;
            default:
                return $this->crmMakeResult(false, 'Не удалось зарегистрироваться, попробуйте позже');
        }
        $resLogin = $this->crmLoginByEmail(Arr::get($vals, 'email'), $password);
        if ($this->crmIsSuccess($resLogin) != true) {
            return $this->crmMakeResult(false, 'Не удалось зарегистрироваться, попробуйте позже');
        }
        return $this->crmMakeResult(true, 'Регистрация прошла успешно');
    }

    public function crmConfirmEmail($buyerId, $confirmCode) {
        $req = new stdClass;
        $req->buyerId = $buyerId;
        $req->confirmCode = $confirmCode;
        $res = $this->connect->call('crm.cabinet.ConfirmEmail', $req);
        if ($res->res == 1) {
            $this->crmUpdateSession();
            return $this->crmMakeResult(true, 'Адрес подтвержден');
        } else {
            return $this->crmMakeResult(false, 'Ошибка подтверждения адреса');
        }
        HTTP::redirect('/profile');
    }

    public function crmRestorePassword($email) {
        $req = new stdClass;
        $req->email = $email;
        $res = $this->connect->call('crm.cabinet.RestorePassword', $req);
        if ($res->res != 1) {

            //  return $this->crmMakeResult(false, 'Адрес не найден');
        } else {

            return $this->crmMakeResult(true, 'Инструкции по восстановлению отправлены на указанный почтовый ящик');

            // crm.cabinet.RestorePassword
        }
    }

    public function crmGetPolls(&$polls) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $res = $this->connect->call('crm.cabinet.getPolls', $req);
        $polls = $res->polls;
        return $this->crmMakeResult(true, 'Операция завершина успешно');
    }

    public function crmPollAddVote($pollId, $pollItems) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->pollId = $pollId;
        $req->pollItems = $pollItems;
        $res = $this->connect->call('crm.cabinet.addVote', $req);

        if ($res->res != '1') {
            return $this->crmMakeResult(false, 'Ошибка! Перезагрузите страницу.');
        } else {
            return $this->crmMakeResult(true, 'Ваш голос учтен');
        }
    }

    public function crmGetMessages(&$messages) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $res = $this->connect->call('crm.cabinet.getMessages', $req);
        $messages = $res->messages;
        return $this->crmMakeResult(true, 'Операция завершина успешно');
    }

    public function crmReadMessage($message) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->messageId = (int) $_POST['messageId'];
        $res = $this->connect->call('crm.cabinet.readMessage ', $req);
        if ($res->res != '1') {
            return $this->crmMakeResult(false, 'Ошибка! Перезагрузите страницу.');
        } else {
            return $this->crmMakeResult(true, '');
        }
    }

    public function crmCreateBuyerData($table, $data) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->table = $table;
        $req->data = $data;
        $res = $this->connect->call('crm.cabinet.createBuyerData', $req);
        if ($res->res != '1') {
            return $this->crmMakeResult(false, 'Ошибка! Перезагрузите страницу.');
        } else {
            return $this->crmMakeResult(true, '');
        }
    }

    public function crmUpdateBuyerData($table, $id, $data) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->table = $table;
        $req->id = $id;
        $req->data = $data;
        $res = $this->connect->call('crm.cabinet.updateBuyerData', $req);
        if ($res->res != '1') {
            return $this->crmMakeResult(false, 'Ошибка! Перезагрузите страницу.');
        } else {
            return $this->crmMakeResult(true, '');
        }
    }

    public function crmDeleteBuyerData($table, $id) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->table = $table;
        $req->id = $id;
        $res = $this->connect->call('crm.cabinet.deleteBuyerData', $req);
        if ($res->res != '1') {
            return $this->crmMakeResult(false, 'Ошибка! Перезагрузите страницу.');
        } else {
            return $this->crmMakeResult(true, '');
        }
    }

    public function crmReadBuyerData($table, &$data) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->table = $table;
        $res = $this->connect->call('crm.cabinet.readBuyerData', $req);
        if ($res->res != '1') {
            return $this->crmMakeResult(false, 'Ошибка! Перезагрузите страницу.');
        } else {
            $data = $res->data;
            return $this->crmMakeResult(true, '');
        }
    }

    public function crmGetHistory(&$history) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $res = $this->connect->call('crm.cabinet.Transactions', $req);
        $history = $res->transactions;
        return $this->crmMakeResult(true, 'Операция завершина успешно');
    }

    public function crmGetCardInfo($cardNum, $cardPin, &$info) {
        $req = new stdClass;

        $req->cardNum = preg_replace('/[^\d]/', '', $cardNum);
        $req->cardPinHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $cardPin);

        $res = $this->connect->call('crm.cabinet.cardInfo', $req);

        if (!isset($res->res) || $res->res != 1) {
            return $this->crmMakeResult(false, 'Карта не найдена');
        } else {
            $info = array();
            foreach ($res as $key => $value) {
                if ($key != 'res') {
                    $info[$key] = $value;
                }
            }
            return $this->crmMakeResult(true, 'Выполнено успешно');
        }
    }

    public function crmChangePin($cardNum, $oldPin, $newPin) {

        $req = new stdClass;
        $req->uid = $this->uid;
        $req->cardNum = $cardNum;
        $req->cardPinHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $oldPin);
        $req->cardNewPinHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $newPin);
        $res = $this->connect->call('crm.cabinet.ChangePassword', $req);

        if ($res->res == 9) {
            return $this->crmMakeResult(false, 'Неверный Pin');
        } elseif ($res->res == 1) {
            return $this->crmMakeResult(true, 'Pin изменен');
        } else {
            return $this->crmMakeResult(false, 'Карта не найдена');
        }
    }

    public function crmChangePassword($oldPassword, $newPassword) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->oldPasswordHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $oldPassword);
        $req->newPasswordHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $newPassword);
        $res = $this->connect->call('crm.cabinet.ChangePassword', $req);

        if ($res->res == 8) {
            return $this->crmMakeResult(false, 'Неверный пароль');
        } elseif ($res->res == 1) {
            return $this->crmMakeResult(true, 'Пароль изменен');
        } else {
            return $this->crmMakeResult(false, 'Неизвестный ответ сервера');
        }
    }

    public function crmChangeEmail($newEmail, $password) {
        $req = new stdClass;
        $req->uid = $this->uid;
        $req->emailNew = $newEmail;
        $req->passwordHash = hash(Arr::get(Arr::get($this->_config, 'FXAPI'), 'hashmethod'), $password);

        $res = $this->connect->call('crm.cabinet.ChangeEmail', $req);

        if ($res->res == 8) {
            return $this->crmMakeResult(false, 'Неверный пароль. E-mail не изменен');
        } elseif ($res->res == 4) {
            return $this->crmMakeResult(false, 'Такой e-mail уже зарегистрирован');
        } elseif ($res->res == 6) {
            return $this->crmMakeResult(false, 'Неверный формат email адреса');
        } elseif ($res->res == 1) {
            return $this->crmMakeResult(true, 'E-mail адрес будет изменен после подтверждения. На Ваш старый адрес отправлено письмо с соответствующими инструкциями.');
        } else {
            return $this->crmMakeResult(false, 'Неизвестный ответ сервера (' . $res->res . ')');
        }
    }

    public function crmUpdateSession() {
        $req = new stdClass;
        $req->uid = $this->uid;

        $res = $this->connect->call('crm.cabinet.Info', $req);
        foreach ($res->buyer as $key => $value) {
            $this->_session->set($key, $value);
        }
        if (isset($res->buyer->activeBalance)) {
            $activeBalance = $res->buyer->activeBalance / Arr::get(Arr::get($this->_config, 'FXAPI'), 'balanceCurrencyRate') . ' ' . Arr::get(Arr::get($this->_config, 'FXAPI'), 'balanceCurrency');
            $this->_session->set('activeBalance', $activeBalance);
        }

        $reqCardsInfo = new stdClass;
        $reqCardsInfo->uid = $this->uid;
        $cardsinfo = $this->connect->call('crm.cabinet.CardsInfo', $reqCardsInfo);

        if (isset($cardsinfo->balanceAccount) && isset($cardsinfo->balanceAccount->balance)) {
            if ($cardsinfo->balanceAccount->balance == '') {
                $cardsinfo->balanceAccount->balance = 0;
            }
            $balance = $cardsinfo->balanceAccount->balance / Arr::get(Arr::get($this->_config, 'FXAPI'), 'balanceCurrencyRate') . ' ' . Arr::get(Arr::get($this->_config, 'FXAPI'), 'balanceCurrency');
            $this->_session->set('balance', $balance);
        } else {
            $this->_session->set('balance', 0);
        }
        $this->_session->set('updated', time());
    }
    
public function crmUpdateBuyerInfo($data)
    {
        $req = new stdClass;
        $req->uid = $this->uid;
        $fields = array('cellphone','preferredContact', 'sendSMS', 'sendEmail','addrCity','addrRegion','addrStreet','addrBuilding','addrFlat','addrHousing');
        if(isset($data['cellphone'])) $data['cellphone'] = preg_replace('/[^\d]/', '', Arr::get($data,'cellphone'));
        foreach ($data as $key => $value)
        {
            if (in_array($key, $fields))
            {
                $req->data[$key] = $value;
            }
        }
        
        $res = $this->connect->call('crm.cabinet.updateBuyerInfo',$req);
        
        if ($res->res != 1)
        {
            $result= $this->crmMakeResult(false, 'Ошибка! Попробуйте позже');
        }
        else
        {
            $this->crmUpdateSession();
            $result= $this->crmMakeResult(true, 'Информация сохранена');
        }
        $this->updateCrmResult($result);
    }
   // Новые добавленные функции///// 
    public function crmBuyerCreate($req, $target) {

        $res= $this->connect->call('crm.cabinet.createBuyerData', $req);
       
        if (isset($res->res) && $res->res == 1)
                {
                    $result = $this->crmMakeResult(true, $target.' добавлен успешно.');
                }
                else
                {
                    $result = $this->crmMakeResult(false, 'Не удалось добавить'.$target.'. Попробуйте позже');
                }
                 $this->updateCrmResult($result);
    
    }

    public function crmBuyerEdit($req,$target) {

        $res=  $this->connect->call('crm.cabinet.updateBuyerData', $req);
        
          if (isset($res->res) && $res->res == 1)
                {
                    $result = $this->crmMakeResult(true, $target.' отредактирован успешно.');
                }
                else
                {
                    $result = $this->crmMakeResult(false, 'Не удалось отредактировать'.$target.'. Попробуйте позже');
                }
                 $this->updateCrmResult($result);
    }
    
   public function crmBuyerDelete($req,$target) {

        $res= $this->connect->call('crm.cabinet.deleteBuyerData', $req);
        
         if (isset($res->res) && $res->res == 1)
            {
             $result= $this->crmMakeResult(true, $target.' удален успешно.');
            }
            else
            {
                $result= $this->crmMakeResult(false, 'Не удалось удалить'.$target.'. Попробуйте позже');
            }
            
            $this->updateCrmResult($result);
   }

    public function crmBuyerRead($uid, $table) {
        $req = new stdClass;
        $req->uid = $uid;
        $req->table = $table;
        return $this->connect->call('crm.cabinet.readBuyerData', $req);
    }

  

    public function crmGetBalance() {
        $reqBalance = new stdClass;
        $reqBalance->uid = $this->uid;
        return $this->connect->call('crm.cabinet.Info', $reqBalance);
    }
    
     public function crmCabInfo() {
        $req = new stdClass;
        $req->uid = $this->uid;
        return $this->connect->call('crm.cabinet.Info', $req);
     }

}

// End Common