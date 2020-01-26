<?php
	 $conn = new Mysqli('localhost','root','','road_reportingdb');
	 $ids = $_GET['edit'];
	if ($_POST) {
		$status = $_POST['report_status'];
		$sqli = "UPDATE reports SET report_status = '$status' where report_id = '$ids'";
		$qres = $conn->query($sqli);
		if ($conn->affected_rows > 0) {
			
            header('location:admindashboard.php?s=success');
		}
	}
	
	$user_info_query = "SELECT * from reports where report_id = $ids";
	$res = $conn->query($user_info_query);
	if ($res->num_rows > 0) {
		$user = $res->fetch_assoc();
		// echo "<pre>";
		// print_r($user);
		// echo "</pre>";
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
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
	<form method="POST" action="" class="w-25 mx-auto mt-5 shadow bg-light p-3" style="min-height: 190px">
		<label for="status"></label>
		<input class="form-control mb-3" type="text" name="report_status" value="<?php echo $user['report_status']?>">
		<button class="btn btn-warning">Update</button>
	</form>
</body>
</html>