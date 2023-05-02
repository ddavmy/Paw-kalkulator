<?php
require_once dirname(__FILE__).'/../../config.php';
// require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
include 'check.php';

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);

$smarty->assign('page_title','Twoj Ulubiony Kalkulator ^-^');

$smarty->assign('role',$role);
if( $role  == 'admin' ) {
    $smarty->display($conf->root_path.'/app/controllers/chroniona.html');
}
else {
    header("Location: ".$conf->app_url);
}