<?php
require 'user.php';

$obj = new User;


if ($_POST) {
$fullname = trim(htmlentities($_POST['name']));
$email = trim(htmlentities($_POST['email']));
$password = trim(htmlentities($_POST['pwd']));
$phone = trim(htmlentities($_POST['phone'])); 

$_SESSION['p'] = $_POST['name'];

 $ret = $obj->signup($fullname,$email,$password,$phone);
if ($ret > 0) {
	header('location:report.php?m=success');
}else{
	header('location:report.php?m=failed');
}
}


?>