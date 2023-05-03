<?php
require_once 'init.php';

switch ($action) {
	default :
		// include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();

		// include_once $conf->root_path.'/app/controllers/LoginCtrl.class.php';
		// $ctrl = new LoginCtrl();
		// $ctrl->generateView();
	break;
	case 'calcCompute' :
		// include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process();
	break;
	case 'calcReset' :
		// include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView();
	break;
	case 'secureCheck' :
		// include_once $conf->root_path.'/app/controllers/ChronionaCtrl.class.php';
	break;
	case 'Access' :
		// include_once $conf->root_path.'/app/controllers/LoginCtrl.class.php';
		// $ctrl = new app\controllers\LoginCtrl();
		// $ctrl->process();
	break;
}
