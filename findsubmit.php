<?php

require 'user.php';
$lga = $_POST['lga'];
$date = $_POST['date'];
$dates = $_POST['dates'];
$l = new User;
$picname = $l->findpotholes($lga,$date,$dates);
@$rows = $l->get_details($_SESSION['users']['users_id']);
// echo "<pre>";
// print_r($picname);
// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Pothole Pictures</title>
	<link rel="stylesheet" href="">
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
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col">
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
				      <li class="nav-item">
				        <a class="nav-link anchor" href="report.php">REPORT</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link anchor" href="findpothole.php">FIND POTHOLES</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link anchor" href="contact.php">CONTACT</a>
				      </li>
				    </ul>
				   </div>

				</nav>
			</div>
		</div>
		<!-- Navbar Finish -->
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col mt-5">
				<?php
			if (isset($_SESSION['users']['users_id'])) {
				echo "<div class='bg bg-dark mb-5 p-2 text-warning text-right' style='min-height: 10px'>
		            <a class='nav-link dropdown-toggle text-warning para3' href='#' id='navbarDropdownBlog' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
		            Welcome ".$rows['users_email']."
		            </a>
		            <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownBlog'>
		              <a class='dropdown-item' href='status.php'>Check Reported Roads</a>
		              <a class='dropdown-item' href='logout.php'>Logout</a>
		            </div>
		          </div>";
			}elseif (!isset($_SESSION['users']['users_id'])) {
				session_destroy(); }
	?>
			</div>
		</div>
		<div class="row">
			<?php 

			
			
			if(!empty($picname)){
			$newdate =  date('F j , Y' , strtotime($date));
			$newdate2 =  date('F j , Y' ,strtotime($dates));

			echo "<h2 class='p-3 mx-auto'>Roads Reported between $newdate and $newdate2</h2>";
			echo "<hr style='width:100%; border:1px solid black' class='mb-3'>";
					foreach ($picname as $pic) {
				
				echo "<div class='col-md-8 mb-3 bg-light shadow rounded p-3'>
				<h5 class='mb-3'>Local Government: ".$pic['name']."</h5>
				<h5 class='mb-3'>Street: ".$pic['report_street']."</h5>
				<h5 class='mb-3'>Date: ".$pic['report_date']."</h5><h5 class='mb-3'>Comment: ".$pic['report_comment']."</h5></div>";
				echo "<div class='col-md-1'></div>";
				echo "<div class='col-md-3 p-3 mb-3 bg-light rounded shadow'><a class='btn btn-warning mt-5 mx-auto w-100' href='details.php?id=".$pic['report_id']."'>See More Details</a>
				</div>";
			}
			}else{
				echo "<div style='min-height:700px' class='mx-auto'>";
				echo "<div style='width:100%' class='alert alert-danger'>No roads reported within these dates
				</div>";
				echo "<a href='findpothole.php' class='btn btn-warning'>Go back to search with different dates</a>";
				echo "</div>";
			}

		



			?>
		</div>
		
	</div>
	<section id="footer">
		<div class="container-fluid mt-3">
			<div class="row">
				
				<div class="col-sm-6 mt-4 mb-4">
					<span class="text-center mt-2">Created by Uthman &copy; 2019</span>
				</div>
				<div class="col-sm-6 mt-4 mb-4">
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