<?php
require 'adminclass.php';
session_unset($_SESSION['name']);
header('location:admin.php');
?>