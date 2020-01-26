<?php

require 'adminclass.php';

$name = $_POST['username'];
$pwd = $_POST['pwd'];
;
$obj = new Admin;

$obj->adminlogin($name,$pwd);
	header('Location:admindashboard.php');

?>