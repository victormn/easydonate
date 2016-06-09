<?php

	$servername = "localhost"; 
	$username = "root";
	$password = "engcomp";
	$dbname = "db_client";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>