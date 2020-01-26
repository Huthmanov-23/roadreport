<?php
session_destroy();
session_unset($_SESSION['users']['users_id']);
header('location:report.php');

?>