<?php
session_start();

$role = isset($_SESSION['role']) ? $_SESSION['role'] : "";
// getSmarty()->assign('role',getRole(''));
if( empty($role) ) {
    include 'LoginCtrl.class.php';
    exit();
}