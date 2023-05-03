<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $result;

    public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->a = getFromRequest('a');
        $this->form->b = getFromRequest('b');
        $this->form->c = getFromRequest('c');
    }

    public function validate(){

        if(!(isset($this->form->a) && isset($this->form->b) && isset($this->form->c))){
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

    public function action_calcCompute(){
        
        $this->getparams();
        
        if ($this->validate()) {

            $this->form->a = floatval($this->form->a);
            $this->form->b = floatval($this->form->b);
            $this->form->c = floatval($this->form->c);
            getMessages()->addInfo('Parametry poprawne.');
            
            $this->result->result = pow($this->form->b, 2) - 4 * $this->form->a * $this->form->c;
            getMessages()->addWynik('Δ = '.$this->result->result);

                if($this->result->result == 0) {
                    $this->result->result = -($this->form->b) / (2 * $this->form->a);
                    if($this->result->result == -0) {abs($this->result->result);}
                    getMessages()->addWynik('x<sub>0</sub> = '.$this->result->result);
                }
                else if($this->result->result < 0) {
                    getMessages()->addWynik('Delta ujemna, brak pierwiastków.');
                }else {
                    $delta = $this->result->result;

                    $this->result->result = round((-$this->form->b + sqrt($delta)) / (2 * $this->form->a), 2);
                    if($this->result->result == -0) {abs($this->result->result);}
                    getMessages()->addWynik('x<sub>1</sub> = '.$this->result->result);

                    $this->result->result = round((-$this->form->b - sqrt($delta)) / (2 * $this->form->a), 2);
                    if($this->result->result == -0) {abs($this->result->result);}
                    getMessages()->addWynik('x<sub>2</sub> = '.$this->result->result);
                }
            
            getMessages()->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
    
    public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
        
        getSmarty()->assign('page_title','Twój Ulubiony Kalkulator ^-^');
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);
        
        getSmarty()->display('index.html');
    }

    public function action_chronionaView(){
		getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('page_title','Twoja Tajemnicza Chroniona Strona o_o');
        
        getSmarty()->display('chroniona.html');
	}
}