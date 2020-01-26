<?php

require 'adminclass.php';
$a = new Admin;

$users = $a->getReportedroads();

if (!isset($_SESSION['name'])) {
   header('location:index.php');
  session_destroy();
 
}



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="main.js"></script>
</head>
<body>
	  <div class="container-fluid">
      <div class="row ">
        <div class="col mb-5">
          <nav class="navbar navbar-expand-md fixed-top bg-warning" id="nav">
            <button class="navbar-toggler bg-dark" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon dropdown" style="color: white"></span>
            </button>
             <a class="navbar-brand" id="anchor" href="index.php">ROAD REPORT</a>
           <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link anchor" href="index.php" >HOME<span class="sr-only">(current)</span></a>
                </li>
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
              <a class="dropdown-item" href="adminlogout.php">Logout</a>
            </div>
          </div>
          <?php

          if (isset($_GET['p']) && $_GET['p'] == 'passed') {
            echo "<div class='alert alert-danger alert-dismissible fade show mb-2' role='alert'>";
            echo "Record has been successfully deleted";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>";
            echo "</div>";

                    }
          if (isset($_GET['s']) && $_GET['s'] == 'success') {
            echo "<div class='alert alert-success alert-dismissible fade show mb-2' role='alert'>";
            echo "Record has been successfully updated";
            echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>";
            echo "</div>";
          }

          ?>
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
              <th colspan="2" class="text-center">Action</th>
            </tr>

           <?php
         if (!empty($users)) {
        foreach ($users as  $user) {
         echo "<tr><td>".$user['users_name']."</td><td>".$user['users_email']."</td><td>".$user['users_phone']."</td><td>".$user['report_comment']."</td><td>".$user['report_date']."</td><td>".$user['report_street']."</td><td>".$user['report_status']."</td><td>".$user['lg_name']."<td><a class='btn text-light btn-primary' href='process.php?edit=".$user['report_id']."'>Edit</a></td><td><a class='btn btn-danger' class='delete' href='processes.php?id=".$user['report_id']."'>Delete</a></td></tr>";
              }
            }
 ?>       </table>
        </div>
      </div>
    </div>
    <section id="footer">
    <div class="container-fluid mt-1">
      <div class="row">
        
        <div class="col-sm-6 mt-4 mb-4">
          <span class="text-center mt-2 text-warning">Created by Uthman &copy; 2019</span>
        </div>
        <div class="col-sm-6 mt-4 mb-4 ">
          <a href="https://twitter.com/huthmanov" target="_blank" ><i class="fab fa-twitter mr-2"></i></a>
          <a href="https://instagram.com/huthmanov" target="_blank"><i class="fab fa-instagram mr-2"></i></a>
          <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook mr-2"></i></a>
          <a href="https://www.linkedin.com/in/ojodu-uthman-1a4a6685/" target="_blank"><i class="fab fa-linkedin mr-2"></i></a>
          <a href="https://github.com/Huthmanov-23/Huthmanov-23" target="_blank"><i class="fab fa-github mr-2"></i></a>

        </div>
      </div>
    </div>
  </section>
  </body>
</html>