<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/login/LoginForm.class.php';

class LoginCtrl {

    private $msgs;
    private $form;

    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = isset($_REQUEST['login']) ? $_REQUEST['login'] : null;
        $this->form->pass = isset($_REQUEST['pass']) ? $_REQUEST['pass'] : null;
    }

    public function validate(){

        if(!(isset($this->form->login) && isset($this->form->pass))) {
            return false;
        }

        if($this->form->login == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if($this->form->pass == "") {
            $this->msgs->addError('Nie podano hasła');
        }

        if($this->msgs->isError()) return false;

        if($this->form->login == "admin" && $this->form->pass == "admin") {
            session_start();
            $_SESSION['role'] = 'admin';
            return true;
        }
        if($this->form->login == "user" && $this->form->pass == "user") {
            session_start();
            $_SESSION['role'] = 'user';
            return true;
        }
        
        $this->msgs->addError('Niepoprawny login lub hasło');
        return ! $this->msgs->isError();
    }

    public function process(){

        global $conf;

        $this->getparams();
        
        if (!$this->validate()){
            header($conf->action_root.'LoginCheck');
        }else{
            header("Location: ".$conf->action_root."calcCompute");
        }

        $this->generateView();
    }
    
    public function generateView(){

        global $conf, $role;
        
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('role',$role);

        $smarty->assign('page_title','Twoj Ulubiony Kalkulator ^-^');

        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form',$this->form);

        $smarty->display($conf->root_path.'/app/login/login.html');
    }
}