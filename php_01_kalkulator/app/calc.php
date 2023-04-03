<?php

require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$a, &$b, &$c) {
	$a = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
	$b = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
	$c = isset($_REQUEST['c']) ? $_REQUEST['c'] : null;
}

function validate(&$a,  &$b, &$c, &$messages) {
	if(!(isset($a) && isset($b) && isset($c))) {
		return false;
	}

	if($a == 0) {
		$messages [] = 'To nie jest funkcja kwadratowa!';
	}
	if($a == "") {
		$messages [] = 'Nie podano a';
	} elseif(!is_numeric($a)) {
		$messages [] = 'Pierwsza wartość nie jest liczbą!';
	}
	if($b == "") {
		$messages [] = 'Nie podano b';
	} elseif(!is_numeric($b)) {
		$messages [] = 'Druga wartość nie jest liczbą!';
	}
	if($c == "") {
		$messages [] = 'Nie podano c';
	} elseif(!is_numeric($c)) {
		$messages [] = 'Trzecia wartość nie jest liczbą!';
	}

	if(count($messages) != 0) return false;
	else return true;
}

function process(&$a, &$b, &$c, &$messages, &$result){
	global $role;
	$a = floatval($a);
	$b = floatval($b);
	$c = floatval($c);
	$math = pow($b, 2) - 4 * $a * $c;

	if($math == 0) {
		$pierwZero = -$b / (2 * $a);
		if($pierwZero == -0) { abs($pierwZero); }
		$result = "<br />x<sub>0</sub> = ".$pierwZero;
	}
	elseif($math < 0) {
		$result = '<br>brak pierwiastków.';
	}else {
		$pierwPierwszy = round((-$b + sqrt($math)) / (2 * $a), 2);
		$pierwDrugi = round((-$b - sqrt($math)) / (2 * $a) ,2);
		if($pierwPierwszy == -0) { abs($pierwPierwszy); }
		if($pierwDrugi == -0) { abs($pierwDrugi); }
		$result = "<br />x<sub>1</sub> = ".$pierwPierwszy."<br />x<sub>2</sub> = ".$pierwDrugi;
	}
}

//definicja zmiennych kontrolera
$a = null;
$b = null;
$c = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($a, $b, $c);
if(validate($a, $b, $c, $messages)) { // gdy brak błędów
	process($a, $b, $c, $messages, $result);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';