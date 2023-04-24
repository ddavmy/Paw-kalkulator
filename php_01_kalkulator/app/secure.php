<?php
require_once dirname(__FILE__).'/../config.php';
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
include $conf->root_path.'/app/security/check.php';

$smarty = new Smarty();
$smarty->assign('conf',$conf);

$smarty->assign('app_url',$conf->app_url);
$smarty->assign('root_path',$conf->root_path);

$smarty->assign('page_title','Twoj Ulubiony Kalkulator ^-^');
$smarty->assign('page_description','"Profesjonalne" szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablony Smarty zastosowane w kalkulatorze');

$smarty->assign('role',$role);
if( $role  == 'admin' ) {
    $smarty->display($conf->root_path.'/app/chroniona.html');
}
else {
    header("Location: ".$conf->app_url);
}