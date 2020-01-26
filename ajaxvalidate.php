<?php
	$conn = new Mysqli('localhost','root','','project');
	$x = $_POST['state_id'];
	$sql = "SELECT * FROM local_governments WHERE state_id ='$x'";
	
	$result = $conn->query($sql);

	$lgas = [];
	if ($result->num_rows > 0) {
		while ($rows = $result->fetch_assoc()) {
			$lgas[]= $rows;
		}
	}
	

	echo json_encode($lgas);
?>