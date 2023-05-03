<?php

include 'LoginCheck.php';

getSmarty()->assign('page_title','Twoj Ulubiony Kalkulator ^-^');

getSmarty()->assign('role',$role);
if( $role == 'admin' ) {
    getSmarty()->display('chroniona.html');
}
else {
    header("Location: ".getConf()->app_url);
}