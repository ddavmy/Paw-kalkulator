<?php

namespace app\controllers;

use app\forms\CalcForm;
use PDOException;
class CalcCtrl {

    private $form;
    private $delta;
    private $pierwPierwszy;
    private $pierwDrugi;
    private $records;

    public function __construct(){
		$this->form = new CalcForm();
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

    public function validateEdit() {
            $this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
            return ! getMessages()->isError();
        }

    public function action_calcCompute(){
        
        $this->getparams();
        
        if ($this->validate()) {

            $this->form->a = floatval($this->form->a);
            $this->form->b = floatval($this->form->b);
            $this->form->c = floatval($this->form->c);
            $this->pierwPierwszy = '-';
            $this->pierwDrugi = '-';
            getMessages()->addInfo('Parametry poprawne.');
            
            $this->delta = pow($this->form->b, 2) - 4 * $this->form->a * $this->form->c;
            getMessages()->addWynik('Δ = '.$this->delta);

                if($this->delta == 0) {
                    $this->pierwPierwszy = -($this->form->b) / (2 * $this->form->a);
                    if($this->pierwPierwszy == -0) {abs($this->pierwPierwszy);}
                    getMessages()->addWynik('x<sub>0</sub> = '.$this->pierwPierwszy);
                }
                else if($this->delta < 0) {
                    getMessages()->addWynik('Delta ujemna, brak pierwiastków.');
                }else {
                    $this->pierwPierwszy = round((-$this->form->b + sqrt($this->delta)) / (2 * $this->form->a), 2);
                    if($this->pierwPierwszy == -0) {abs($this->pierwPierwszy);}
                    getMessages()->addWynik('x<sub>1</sub> = '.$this->pierwPierwszy);

                    $this->pierwDrugi = round((-$this->form->b - sqrt($this->delta)) / (2 * $this->form->a), 2);
                    if($this->pierwDrugi == -0) {abs($this->pierwDrugi);}
                    getMessages()->addWynik('x<sub>2</sub> = '.$this->pierwDrugi);
                }
            
            getMessages()->addInfo('Wykonano obliczenia.');

        }
        $this->action_wynikSave();
    }

    public function action_wynikSave(){

		if (!getMessages()->isError()) {
			try {
				getDB()->insert("wynik", [
					"a" => $this->form->a,
					"b" => $this->form->b,
					"c" => $this->form->c,
					"delta" => $this->delta,
					"pierwPierwszy" => $this->pierwPierwszy,
					"pierwDrugi" => $this->pierwDrugi
				]);
				getMessages()->addInfo('Pomyślnie zapisano rekord');

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
			
			$this->action_WynikList();

		} else {
			$this->action_WynikList();
		}
	}
    
    public function action_wynikDelete(){
		if ( $this->validateEdit() ){
			try{
				getDB()->delete("wynik",[
					"idwynik" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());
			}
		}	
        forwardTo('calcShow');
	}

    public function action_WynikList(){
		try{
			$this->records = getDB()->select("wynik", [
					"idwynik",
					"a",
					"b",
					"c",
					"delta",
                    "pierwPierwszy",
                    "pierwDrugi"
				]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
        }
        $this->generateView();
	}

	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
        $this->action_WynikList();
	}
    
    public function generateView(){
        
		getSmarty()->assign('user',unserialize($_SESSION['user']));
        
        getSmarty()->assign('page_title','Twój Ulubiony Kalkulator ^-^');
        
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('del',$this->delta);
        getSmarty()->assign('pierwPierwszy',$this->pierwPierwszy);
        getSmarty()->assign('pierwPierwszy',$this->pierwDrugi);
        getSmarty()->assign('record',$this->records);
        
        getSmarty()->display('index.html');
    }

    public function action_chronionaView(){
		getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('page_title','Twoja Tajemnicza Chroniona Strona o_o');
        
        getSmarty()->display('chroniona.html');
	}
}