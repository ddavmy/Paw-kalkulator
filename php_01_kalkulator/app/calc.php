<?php
require_once dirname(__FILE__).'/../config.php';
require_once _ROOT_PATH.'/lib/smarty/libs/Smarty.class.php';
include _ROOT_PATH.'/app/security/check.php';

function getParams(&$form) {
	$form['a'] = isset($_REQUEST['a']) ? $_REQUEST['a'] : null;
	$form['b'] = isset($_REQUEST['b']) ? $_REQUEST['b'] : null;
	$form['c'] = isset($_REQUEST['c']) ? $_REQUEST['c'] : null;
}

function validate(&$form, &$messages) {
	if(!(isset($form['a']) && isset($form['b']) && isset($form['c']))) {
		return false;
	}

	if($form['a'] == 0) {
		$messages [] = 'To nie jest funkcja kwadratowa!';
	}
	if($form['a'] == "") {
		$messages [] = 'Nie podano a';
	} elseif(!is_numeric($form['a'])) {
		$messages [] = 'Pierwsza wartość nie jest liczbą!';
	}
	if($form['b'] == "") {
		$messages [] = 'Nie podano b';
	} elseif(!is_numeric($form['b'])) {
		$messages [] = 'Druga wartość nie jest liczbą!';
	}
	if($form['c'] == "") {
		$messages [] = 'Nie podano c';
	} elseif(!is_numeric($form['c'])) {
		$messages [] = 'Trzecia wartość nie jest liczbą!';
	}

	if(count($messages) != 0) return false;
	else return true;
}

function process(&$form, &$result, &$math){
	global $role;
	$form['a'] = floatval($form['a']);
	$form['b'] = floatval($form['b']);
	$form['c'] = floatval($form['c']);
	$math = pow($form['b'], 2) - 4 * $form['a'] * $form['c'];

	if($math == 0) {
		$pierwZero = -$form['b'] / (2 * $form['a']);
		if($pierwZero == -0) { abs($pierwZero); }
		$result = "<br />x<sub>0</sub> = ".$pierwZero;
	}
	elseif($math < 0) {
		$result = '<br>brak pierwiastków.';
	}else {
		$pierwPierwszy = round((-$form['b'] + sqrt($math)) / (2 * $form['a']), 2);
		$pierwDrugi = round((-$form['b'] - sqrt($math)) / (2 * $form['a']) ,2);
		if($pierwPierwszy == -0) { abs($pierwPierwszy); }
		if($pierwDrugi == -0) { abs($pierwDrugi); }
		$result = "<br />x<sub>1</sub> = ".$pierwPierwszy."<br />x<sub>2</sub> = ".$pierwDrugi;
	}
}

$form = null;
$result = null;
$math = null;
$messages = array();

getParams($form);
if(validate($form, $messages)) {
	process($form, $result, $math);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Twoj Ulubiony Kalkulator ^-^');
$smarty->assign('page_description','"Profesjonalne" szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty zastosowane w kalkulatorze');

$smarty->assign('form',$form);
$smarty->assign('role',$role);
$smarty->assign('result',$result);
$smarty->assign('math',$math);
$smarty->assign('messages',$messages);

$smarty->display(_ROOT_PATH.'/app/index.html');
