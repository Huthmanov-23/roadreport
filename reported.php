<?php

require 'user.php';
$name = trim(htmlentities($_POST['name']));
$email = trim(htmlentities($_POST['email']));
$phone = trim(htmlentities($_POST['phone']));
$address = trim(htmlentities($_POST['address']));
$landmark = trim(htmlentities($_POST['landmark']));
$comments = trim(htmlentities($_POST['comments']));
$state = $_POST['state'];
$lg = $_POST['lga'];

$obj = new User;
$obj->report($name,$email,$phone,$address,$state,$lg,$landmark,$comments,$_FILES);
echo "<pre>";
print_r($obj);
echo "</pre>";
header('location:report.php?p=passed');

?>