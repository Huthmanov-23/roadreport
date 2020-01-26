<?php

require 'user.php';

$obj = new User;


if ($_POST) {
	$email = trim(htmlentities($_POST['email']));
	$password = htmlentities($_POST['pwd']);
	$obj->login($email,$password);
}

?>