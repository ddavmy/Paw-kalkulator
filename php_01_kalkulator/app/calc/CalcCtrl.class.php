<?php

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';
require_once $conf->root_path.'/app/login/LoginCtrl.class.php';
include $conf->root_path.'/app/login/check.php';

class CalcCtrl {

    private $msgs;
    private $form;
    private $result;
    private $math;

    public function __construct(){
        $this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->math = new CalcResult();
    }

    public function getParams(){
        $this->form->a = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
        $this->form->b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
        $this->form->c = isset($_REQUEST['c']) ? $_REQUEST['c'] : null;
    }

    public function validate(){

        if(!(isset($this->form->a) && isset($this->form->b) && isset($this->form->c))) {
            return false;
        }

        if($this->form->a == 0) {
            $this->msgs->addError('To nie jest funkcja kwadratowa!');
        }
        if($this->form->a == "") {
            $this->msgs->addError('Nie podano a');
        } elseif(!is_numeric($this->form->a)) {
            $this->msgs->addError('Pierwsza wartość nie jest liczbą!');
        }
        if($this->form->b == "") {
            $this->msgs->addError('Nie podano b');
        } elseif(!is_numeric($this->form->b)) {
            $this->msgs->addError('Druga wartość nie jest liczbą!');
        }
        if($this->form->c == "") {
            $this->msgs->addError('Nie podano c');
        } elseif(!is_numeric($this->form->c)) {
            $this->msgs->addError('Trzecia wartość nie jest liczbą!');
        }
    
        return ! $this->msgs->isError();
    }

    public function process(){
        
        $this->getparams();
        
        if ($this->validate()) {
            $this->form->a = floatval($this->form->a);
            $this->form->b = floatval($this->form->b);
            $this->form->c = floatval($this->form->c);
            $this->msgs->addInfo('Parametry poprawne.');
            
            $this->math->math = pow($this->form->b, 2) - 4 * $this->form->a * $this->form->c;
                if($this->math->math == 0) {
                    $pierwZero = -($this->form->b) / (2 * $this->form->a);
                    if($pierwZero == -0) { abs($pierwZero); }
                    $this->result->result = "<br />x<sub>0</sub> = ".$pierwZero;
                }
                elseif($this->math->math < 0) {
                    $this->result->result = '<br>brak pierwiastków.';
                }else {
                    $pierwPierwszy = round((-$this->form->b + sqrt($this->math->math)) / (2 * $this->form->a), 2);
                    $pierwDrugi = round((-$this->form->b - sqrt($this->math->math)) / (2 * $this->form->a), 2);
                    if($pierwPierwszy == -0) { abs($pierwPierwszy); }
                    if($pierwDrugi == -0) { abs($pierwDrugi); }
                    $this->result->result = "<br />x<sub>1</sub> = ".$pierwPierwszy."<br />x<sub>2</sub> = ".$pierwDrugi;
                }
            

            $this->msgs->addInfo('Wykonano obliczenia.');
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
        $smarty->assign('res',$this->result);
        $smarty->assign('math',$this->math);

        $smarty->display($conf->root_path.'/app/calc/index.html');
    }
}