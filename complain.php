<?php
require 'user.php';

$r = new User;

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$rows = $r->complaints($name,$email,$message);
header('location:contact.php?p=passed');





?>