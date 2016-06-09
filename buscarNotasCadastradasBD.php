<?php

	include_once("verificarSessao.php");

	include_once("conectarBD.php");

	$query = "SELECT * FROM tbl_notascadastradas"; 
        
    $result = mysqli_query($conn, $query);

	$conn->close();
?>