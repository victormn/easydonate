<?php

	include_once("../system/verificarSessaoCliente.php");

	include_once("conectarNotasBD.php");

	$query = "SELECT * FROM tbl_historico"; 
        
    $result = mysqli_query($conn, $query);

	$conn->close();
?>