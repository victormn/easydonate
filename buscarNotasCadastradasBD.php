<?php

	include_once("verificarSessao.php");

	include_once("conectarNotasBD.php");

	$query = "SELECT * FROM tbl_notascadastradas"; 
        
    $result = mysqli_query($conn, $query);

	$conn->close();
?>