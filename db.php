<?php
$servername="localhost";
	$username="root";
	$password="root";
	$dbname="CNT_Course_Project";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
	
	/*if($conn->connect_error)
	{
		die("connection failed".$conn->connect_error);
	}
	else 
		echo "connected successfully <br>";*/
?>