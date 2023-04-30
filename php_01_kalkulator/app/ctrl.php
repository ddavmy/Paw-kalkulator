<?php
require_once dirname (__FILE__).'/../config.php';

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default :
		include_once $conf->root_path.'/app/login/LoginCtrl.class.php';
		$ctrl = new LoginCtrl ();
		$ctrl->process ();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'calcReset' :
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		$ctrl = new calcCtrl();
		$ctrl->generateView();
	break;
	case 'action2' :
		// zrób coś innego ...
	break;
}
