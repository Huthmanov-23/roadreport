<?php

$conn = new Mysqli('localhost','root','','road_reportingdb');
	$id = $_GET['id'];
	$sql ="DELETE FROM reports WHERE report_id=$id";
	$results = $conn->query($sql);
	if ($conn->affected_rows > 0) {
	header('location:admindashboard.php?p="passed"');
	}
?>