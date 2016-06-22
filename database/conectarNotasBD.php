<?php

	$servername = "aanrn9qomcvqk1.codforgoiccr.sa-east-1.rds.amazonaws.com"; 
	$username = "engcomp";
	$password = "engcomp123";
		
	$dbname = "db_notas";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
?>