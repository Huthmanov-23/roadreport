<?php
require 'user.php';
$r = new User;
@$rows = $r->get_details($_SESSION['users']['users_id']);
$states = $r->getselect();



 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Find Pothole</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
				<form method="POST" action="findsubmit.php" class="w-50 p-4 mx-auto mt-5 mb-5 bg-light shadow" style="min-height: 550px" enctype="multipart/form-data">

		         <div class="form-group">
		             <label class="ml-4 para3 " for="states">Please Choose your state</label><span style="color: red"> *</span><br>
		             <select class="form-control" searchable="Search here.." name="state" id="state" required>
		                  <option selected="selected">Choose Your State</option>
		                <?php
                  foreach ($states as $state) {
                    echo "<option value='".$state['id']."'>".$state['name']."</option>";
                  }

                  ?>
		            </select>
		        </div>
		        <div class="form-group  mt-2">
		         <label class="control-label para3" for="lgas">Local Goverment Area</label><span style="color: red"> *</span>
		         <select name="lga" id="lga" class="form-control" required></select>   
		       </div>
		       From <input type="date" class="form-control mb-2" name="date"> To <input type="date" name="dates" class="form-control"> <br>
		       <button type="submit" class="btn btn-outline-dark mb-3 btn-lg">Find Potholes</button>
		    </form>
	   </div>
	</div>
 </div>
 <section id="footer">
		<div class="container-fluid mt-1">
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
	<script type="text/javascript">
    $('#state').change(function() {
      var state_id = $('#state').val();
      fetch_lgas(state_id);
    });

    function fetch_lgas(states_id){
      var serverdata = {'state_id':states_id}
    
      $.ajax({
        url:'ajaxvalidate.php',
        type:'POST',
        data:serverdata,
        success:function(response){
          var ret = JSON.parse(response);
          var lgas_string = '';
          $.each(ret,function(key,val) {
            lgas_string+="<option value='"+val.id+"'>"+val.name+"</option>";
          });
        $("#lga").html(lgas_string);  
        }
        
      });

    }
  </script>
</body>
</html>