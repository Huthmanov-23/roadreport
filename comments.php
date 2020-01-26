<?php 
 $conn = new Mysqli("localhost","root","","road_reportingdb");

 $name = $_POST['name'];
 $comments = $_POST['comment'];


 	$sql = "INSERT INTO comments SET name='$name',
 						 comments='$comments'
 						 report_id='$j'";
 	$results = $conn->query($sql);
 	$error = $conn->error;
 	echo "$results";
?>