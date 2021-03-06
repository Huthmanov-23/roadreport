<?php
require 'adminclass.php';
$r = new Admin;
$users = $r->gettodayreports();

// echo "<pre>";
// print_r($users);
// echo "</pre>";


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Report</title>
	 <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="main.css">

	<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="main.js"></script>
</head>
<body>
	  <div class="container-fluid mb-5">
      <div class="row ">
        <div class="col mb-5">
          <nav class="navbar navbar-expand-md fixed-top bg-warning" id="nav">
            <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon dropdown" style="color: white"></span>
            </button>
             <a class="navbar-brand" id="anchor" href="index.php">ROAD REPORT</a>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link anchor" href="admindashboard.php">BACK TO DASHBOARD</a>
                </li>
              </ul>
             </div>
          </nav>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col">
          <div class="bg bg-dark mb-5 p-2 text-warning text-right" style="min-height: 10px">
            <a class="nav-link dropdown-toggle text-warning para3" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Welcome <?php echo ($_SESSION['name']);?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
              <a class="dropdown-item" href="today.php">Check Roads Reported Today </a>
              <a class="dropdown-item" href="today.php">Check Roads Reported This Week </a>
              <a class="dropdown-item" href="adminlogout.php">Logout</a>
            </div>
          </div>
          <table border="1" class="table table-dark table-striped text-warning">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Comment</th>
              <th>Date</th>
              <th>Street</th>
              <th>Status</th>
              <th>Local Government</th>
            </tr>

           <?php
         if (!empty($users)) {
        foreach ($users as  $user) {
         echo "<tr><td>".$user['users_name']."</td><td>".$user['users_email']."</td><td>".$user['users_phone']."</td><td>".$user['report_comment']."</td><td>".$user['report_date']."</td><td>".$user['report_street']."</td><td>".$user['report_status']."</td><td>".$user['lg_name']."</tr>";
              }
            }
 ?>       </table>
        </div>
      </div>
    </div>