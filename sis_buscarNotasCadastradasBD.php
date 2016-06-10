<?php

	include_once("sis_verificarSessao.php");

	include_once("sis_conectarNotasBD.php");

	$query = "SELECT * FROM tbl_notascadastradas"; 
        
    $result = mysqli_query($conn, $query);

	$conn->close();
?>