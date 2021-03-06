<?php

require 'user.php';
$r = new User;
@$rows = $r->get_details($_SESSION['users']['users_id']);
$j = $_GET['id'];
	 $conn = new Mysqli('localhost','root','','road_reportingdb');
$sql = "SELECT report_id,report_comment,report_date,name,images_path,report_street FROM reports 
	JOIN local_governments ON reports.report_lg = local_governments.id
	JOIN reports_images ON reports.report_id = reports_images.reports_id
	WHERE report_id = '$j'";
	$collect = [];
	$results = $conn->query($sql);
	if ($results->num_rows > 0) {
		while ($r = $results->fetch_assoc()) {
			$collect[] = $r;
		}
	}
 foreach ($collect as $value) {	
	} 
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
	<div class="container-fluid mb-5">
		<div class="row">
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
				      <li class="nav-item">
				        <a class="nav-link anchor" href="report.php">REPORT</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link anchor" href="findpothole.php">SEARCH AGAIN</a>
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
	
	<div class="container">
		<div class="row">
			<div class="col">
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
				session_destroy(); };
	?>
		</div>
			</div>
			<div class="row mt-5">
				<div class="col-md-7 bg-light p-2 shadow" style="min-height: 300px">
					<?php

		echo "<div id='carouselExampleControls' class='carousel slide' data-ride='carousel'>
				  <div class='carousel-inner'>
				    <div class='carousel-item active'>
				      <img class='d-block w-100 h-100 img-fluid'  src='".$collect[0]['images_path']."'  alt='First slide'>
				    </div>
				    <div class='carousel-item'>
				      <img class='d-block w-100 h-100 img-fluid'  src='".$collect[1]['images_path']."'  alt='Second slide'>
				    </div>
				    <div class='carousel-item'>
				      <img class='d-block w-100 h-100 img-fluid'  src='".$collect[2]['images_path']."'>
				    </div>
				    <div class='carousel-item'>
				      <img class='d-block w-100 h-100 img-fluid'  src='".$collect[3]['images_path']."'>
				    </div>
				  </div>
				  <a class='carousel-control-prev' href='#carouselExampleControls' role='button' data-slide='prev'>
				    <span class='carousel-control-prev-icon' aria-hidden='true'></span>
				    <span class='sr-only'>Previous</span>
				  </a>
				  <a class='carousel-control-next' href='#carouselExampleControls' role='button' data-slide='next'>
				    <span class='carousel-control-next-icon' aria-hidden='true'></span>
				    <span class='sr-only'>Next</span>
				  </a>
			</div>";



					?>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-4">
					<?php echo "<h5 class='mb-5 '>Report Date: ".$value['report_date']."</h5>"; ?>
					<?php echo "<h5 class='mb-5'> Comment: ".$value['report_comment']."</h5>"; ?>
					<?php echo "<h5 class='mb-5'>Local Government: ".$value['name']."</h5>"; ?>
					<?php echo "<h5 class='mb-5'>Street: ".$value['report_street']."</h5>"; ?>
				</div>
			</div>
	</div>
	<div style="min-height: 120px"></div>
	<section id="footer">
		<div class="container-fluid mt-5">
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