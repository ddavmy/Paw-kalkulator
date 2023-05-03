<?php

require_once 'LoginForm.class.php';

class LoginCtrl {

    private $form;

    public function __construct(){
        $this->form = new LoginForm();
    }

    public function getParams(){
        $this->form->login = getFromRequest('login');
        $this->form->pass = getFromRequest('pass');
    }

    public function validate(){

        if(!(isset($this->form->login) && isset($this->form->pass))) {
            return false;
        }

        if($this->form->login == "") {
            getMessages()->addError('Nie podano loginu');
        }
        if($this->form->pass == "") {
            getMessages()->addError('Nie podano hasła');
        }

        if(getMessages()->isError()) return false;

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
        
        getMessages()->addError('Niepoprawny login lub hasło');
        return ! getMessages()->isError();
    }

    public function process(){
        
        $this->getparams();
        
        if (!$this->validate()){
            header(getConf()->app_url.'/app/controllers/login.html');
        }else{
            header("Location: ".getConf()->action_root.'calcCompute');
        }

        $this->generateView();
    }
    
    public function generateView(){
        global $role;
        getSmarty()->assign('page_title','Twoj Ulubiony Kalkulator ^-^');
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('role',$role);
        
        getSmarty()->display('login.html');
    }
}