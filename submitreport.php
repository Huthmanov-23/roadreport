<?php

require 'user.php';

$obj = new User;

$address = trim(htmlentities($_POST['address']));
$landmark = trim(htmlentities($_POST['landmark']));
$comments = trim(htmlentities($_POST['comments']));
$state = $_POST['state'];
$lg = $_POST['lga'];
// print_r($_POST);
$ret = $obj->reportsignedup($address,$landmark,$comments,$state,$lg,$_FILES);
header('location:dashboard.php?m=success');
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";
?>


