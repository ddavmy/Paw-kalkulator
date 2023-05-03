<?php
require_once 'init.php';

getConf()->login_action = 'login';

switch ($action) {
	default :
		control('app\\controllers', 'CalcCtrl',		'generateView', ['user','admin']);
	case 'login': 
		control('app\\controllers', 'LoginCtrl',	'doLogin');
	case 'calcCompute' : 
		control(null, 'CalcCtrl',	'generateView',		['user','admin']);
	case 'secureSite' : 
		control(null, 'CalcCtrl',	'chronionaView',		['user','admin']);
	case 'logout' : 
		control(null, 'LoginCtrl',	'doLogout',		['user','admin']);
}