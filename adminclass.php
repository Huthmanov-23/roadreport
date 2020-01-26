<?php

class Admin{
protected $conn;
		function __construct(){
			session_start();
			$this->conn = new Mysqli('localhost','root','','road_reportingdb');
		}

function adminlogin($name,$password){
	
	$sql = "SELECT * FROM admin WHERE name ='$name' AND password='$password'";
	$rows = $this->conn->query($sql);
	if ($rows->num_rows > 0) {
	$details = $rows->fetch_assoc();
	print_r($details);
	$_SESSION['name'] = $details['name'];
	echo $_SESSION['name'];
	}

}
function getReportedroads(){
	$users=[];
	$sql = "SELECT report_id,users_name,users_email,users_phone,report_comment,report_date,report_street,report_status,name as lg_name FROM reports 
	JOIN users
	ON reports.report_userid = users.users_id 
	JOIN local_governments ON reports.report_lg = local_governments.id
	";
	$results = $this->conn->query($sql);
	if ($results->num_rows > 0) {
		while ($rows = $results->fetch_assoc()) {
			$users[]= $rows;
		}
	}
	return $users;
}

function gettodayreports(){
	$users=[];
	$sql = "SELECT report_id,users_name,users_email,users_phone,report_comment,report_date,report_street,report_status,name as lg_name FROM reports 
	JOIN users
	ON reports.report_userid = users.users_id 
	JOIN local_governments ON reports.report_lg = local_governments.id
	WHERE DATE_FORMAT(report_date,'%Y-%m-%d') = CURDATE()";
	$results = $this->conn->query($sql);
	if ($results->num_rows > 0) {
		while ($rows = $results->fetch_assoc()) {
			$users[]= $rows;
		}
	}
return $users;
}





}






?>