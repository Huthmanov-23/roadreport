<?php


	class Utility{
		protected $conn;
		function __construct(){
			session_start();
			$this->conn = new Mysqli('localhost','root','','road_reportingdb');
		}


	}



?>