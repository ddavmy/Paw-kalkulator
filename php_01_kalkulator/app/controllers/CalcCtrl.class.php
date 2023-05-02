<?php

// require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
// require_once $conf->root_path.'/lib/Messages.class.php';
// require_once $conf->root_path.'/app/calc/CalcForm.class.php';
// require_once $conf->root_path.'/app/calc/CalcResult.class.php';
// require_once 'LoginCtrl.class.php';
// include 'LoginCheck.php';

require_once 'CalcForm.class.php';
require_once 'CalcResult.class.php';

class CalcCtrl {

    private $form;
    private $result;
    private $math;

    public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->math = new CalcResult();
    }

    public function getParams(){
        $this->form->a = getFromRequest('a');
        $this->form->b = getFromRequest('b');
        $this->form->c = getFromRequest('c');
    }

    public function validate(){

        if(!(isset($this->form->a) && isset($this->form->b) && isset($this->form->c))) {
            return false;
        }

        if($this->form->a == 0) {
            getMessages()->addError('To nie jest funkcja kwadratowa!');
        }
        if($this->form->a == "") {
            getMessages()->addError('Nie podano a');
        } elseif(!is_numeric($this->form->a)) {
            getMessages()->addError('Pierwsza wartość nie jest liczbą!');
        }
        if($this->form->b == "") {
            getMessages()->addError('Nie podano b');
        } elseif(!is_numeric($this->form->b)) {
            getMessages()->addError('Druga wartość nie jest liczbą!');
        }
        if($this->form->c == "") {
            getMessages()->addError('Nie podano c');
        } elseif(!is_numeric($this->form->c)) {
            getMessages()->addError('Trzecia wartość nie jest liczbą!');
        }
    
        return ! getMessages()->isError();
    }

    public function process(){
        
        $this->getparams();
        
        if ($this->validate()) {
            $this->form->a = floatval($this->form->a);
            $this->form->b = floatval($this->form->b);
            $this->form->c = floatval($this->form->c);
            getMessages()->addInfo('Parametry poprawne.');
            
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
            

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }

    public function generateView(){
        global $role;

        getSmarty()->assign('page_title','Twoj Ulubiony Kalkulator ^-^');
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        getSmarty()->assign('math',$this->math);
        
        getSmarty()->display('index.html');
    }
}