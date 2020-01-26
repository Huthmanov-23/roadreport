<?php
require 'utility.php';


class User extends Utility{

function signup($fullname,$email,$password,$phone){
$encrypted_pass=md5($password);
 $sql = "INSERT INTO users SET
 					users_name ='$fullname',
 					users_email = '$email',
 					users_password = '$encrypted_pass',
 					users_phone = '$phone'";
  $this->conn->query($sql);
  $results = $this->conn->insert_id;
 $_SESSION['user'] = $results;
  return $results;
}
function get_details($userid){
	$sql = "SELECT * FROM users WHERE users_id='$userid'";

	$result = $this->conn->query($sql);
	$row = 0;
	if ($result->num_rows > 0) {
		$row = $result->fetch_assoc();
	}
	return $row;
}

function login($email,$password){
$encrypted_pass=md5($password);

$sql = "SELECT * FROM users WHERE users_password='$encrypted_pass' AND users_email ='$email'";
$results = $this->conn->query($sql);

if ($results->num_rows == 1) {
	$details = $results->fetch_assoc();
	$_SESSION['users'] = $details;
	
	header('location:dashboard.php');
	
}else{
	header('location:report.php?x=failed');

}
}

function reportsignedup($streetname,$landmark,$damagereport,$state,$localgovernment,$file_array){
	$userid =  $_SESSION['users']['users_id'];
	$sql = "INSERT INTO reports SET 
						report_userid = '$userid',
						report_street = '$streetname',
						report_comment ='$damagereport',
						report_state = '$state',
						report_lg = '$localgovernment',
						report_landmark = '$landmark',
						report_status = 'Pending'";
	$this->conn->query($sql);
	$result = $this->conn->insert_id;
	for ($i=0; $i <4; $i++) { 
	$tmp_location = $file_array['upload']['tmp_name'][$i];
	$original = $file_array['upload']['name'][$i];
	$filesize = $file_array['upload']['size'][$i];
	$allowed_extensions = array('jpg','png','jpeg');
	$extension = @end(explode('.', $original));
	$errors = [];
	if (!in_array($extension, $allowed_extensions)) {
		$errors[] = 'This file type is not allowed';
	}
	if ($filesize > 100000) {
		$errors[] = 'File is too large';
	}
	if (empty($errors)) {
		$newname = md5(microtime()).".".$extension;
		$dst = "uploads/".$newname;
	move_uploaded_file($tmp_location, $dst);
	}else{
		$_SESSION['errors'] = $errors;
		header('location:dashboard.php');
	}

	
$sqlis ="INSERT INTO reports_images SET 
						reports_id ='$result',
						images_path = '$dst'";
		$this->conn->query($sqlis);
	}

}

function report($fullname,$email,$phone,$street,$state,$localgovernment,$landmark,$comments,$file_array){

$sql = "INSERT INTO users SET 
					users_name ='$fullname',
 					users_email = '$email',
 					users_phone = '$phone'";
 		$this->conn->query($sql);
 		$collect = $this->conn->insert_id;
$sqli = "INSERT INTO reports SET 
						report_userid = '$collect',
						report_street = '$street',
						report_comment ='$comments',
						report_lg = '$localgovernment',
						report_state = '$state',
						report_landmark = '$landmark',
						report_status = 'Pending'";
	$this->conn->query($sqli);
	$result = $this->conn->insert_id;
	for ($i=0; $i <count($file_array['upload']['tmp_name']) ; $i++) { 
	$tmp_location = $file_array['upload']['tmp_name'][$i];
	$original = $file_array['upload']['name'][$i];
	$filesize = $file_array['upload']['size'];
	$allowed_extensions = array('jpg','png','jpeg');
	$extension = @end(explode('.', $original));
	$errors = [];
	if (!in_array($extension, $allowed_extensions)) {
		$error[] = 'This file type is not allowed';
	}
	if ($filesize > 100000) {
		$error[] = 'File is too large';
	}
	if (empty($errors)) {
		$newname = md5(microtime()).".".$extension;
		$dst = "uploads/".$newname;
	move_uploaded_file($tmp_location, $dst);
	}else{
		$_SESSION['errors'] = $error;
		header('location:dashboard.php');
	}

	
$sqlis ="INSERT INTO reports_images SET 
						reports_id ='$result',
						images_path = '$dst'";
		$this->conn->query($sqlis);
	}
}
function checkstatus(){
	$userid =  $_SESSION['users']['users_id'];
	$users=[];
	$sql = "SELECT users_name,users_email,users_phone,report_comment,report_date,report_street,report_status,name FROM reports 
	JOIN users
	ON reports.report_userid = users.users_id 
	JOIN local_governments ON reports.report_lg = local_governments.id
	WHERE users_id = '$userid'";
	
	$qr = $this->conn->query($sql);
	if($qr->num_rows>0){
		while ( $record = $qr->fetch_assoc()) {
		$users[]=$record;
		}

	  }

      	return $users;
	}

function getselect(){
	$sql = "SELECT * FROM states";
	$states = [];
	$results = $this->conn->query($sql);
	if ($results->num_rows >0) {
		while ($rows = $results->fetch_assoc()) {
			$states[] = $rows; 
		}
	}
	return $states;
}

function findpotholes($lg_id,$date,$dates){
	// $sql = "SELECT report_id,report_comment,report_date,name,images_path,report_street FROM reports 
	// JOIN local_governments ON reports.report_lg = local_governments.id
	// JOIN reports_images ON reports.report_id = reports_images.reports_id
	// WHERE local_governments.id ='$lg_id' AND report_date BETWEEN DATE_FORMAT('$date','%Y-%m-%d') AND DATE_FORMAT('$dates','%Y-%m-%d') ";
	$sql = "SELECT report_id,report_comment,report_date,name,report_street FROM reports 
	JOIN local_governments ON reports.report_lg = local_governments.id 
	WHERE local_governments.id ='$lg_id' AND report_date BETWEEN DATE_FORMAT('$date','%Y-%m-%d') AND DATE_FORMAT('$dates','%Y-%m-%d') ";

	// die ("$sql");
	$collect = [];
	$results = $this->conn->query($sql);
	// $error = $this->conn->error;
	// echo "$error";
	if ($results->num_rows > 0) {
		while ($r = $results->fetch_assoc()) {
			$collect[] = $r;
		}

	}
	return $collect;
}

}


?>