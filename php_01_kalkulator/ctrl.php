<?php
// require_once dirname (__FILE__).'/../config.php';
require_once 'init.php';

// $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	// default :
		// include_once $conf->root_path.'/app/controllers/LoginCtrl.class.php';
		// $ctrl = new LoginCtrl ();
		// $ctrl->process ();
	// break;
	default :
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new CalcCtrl();
		$ctrl->generateView();
	break;
	case 'calcCompute' :
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'calcReset' :
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new calcCtrl();
		$ctrl->generateView();
	break;
	case 'secureCheck' :
		// include_once $conf->root_path.'/app/controllers/ChronionaCtrl.class.php';
	break;
}
