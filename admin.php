


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title>
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
    <script src="main.js"></script>
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
				        <a class="nav-link anchor" href="index.php" >GO BACK HOME<span class="sr-only">(current)</span></a>
				      </li>
				    </ul>
				</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- Navbar Finish -->


	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<form method="POST" id="adminform" action="adminlogin.php" class="w-25 mx-auto shadow bg-light mt-5 p-3" style="min-height: 300px" >
			      <input type="text" name="username" placeholder="Enter Your Username" class="form-control mt-5 mb-5">
                  <input type="password" name="pwd" placeholder="Enter Your Password" class="form-control mb-5">
                  <input type="submit" value="Login" class="btn btn-warning mt-2 form-control" name="">
				</form>
			</div>
		</div>
	</div>


</body>
</html>