<?php
require_once 'init.php';

switch ($action) {
	default :
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
	break;
	case 'login' :
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogin();
	break;
	case 'calcCompute' :
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
	break;
	case 'secureSite' :
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->chronionaView();
	break;
	case 'calcReset' :
		include 'check.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
	break;
	case 'logout' :
		include 'check.php';
		$ctrl = new app\controllers\LoginCtrl();
		$ctrl->doLogout();
	break;
}
