<?php

	session_start();
	unset($_SESSION["admin"]);
	unset($_SESSION["cliente"]);
	header("Location: login.php");
	exit;

?>