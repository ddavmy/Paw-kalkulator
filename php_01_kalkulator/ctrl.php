<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow',       'CalcCtrl',    ['user','admin']);
getRouter()->addRoute('calcCompute',    'CalcCtrl',    ['user','admin']);
getRouter()->addRoute('chronionaView',  'CalcCtrl',    ['admin']);
getRouter()->addRoute('login',          'LoginCtrl');
getRouter()->addRoute('logout',         'LoginCtrl',   ['user','admin']);
getRouter()->addRoute('wynikDelete',        'CalcCtrl', ['user','admin']);

getRouter()->go();