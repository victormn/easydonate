<?php
	
	include_once("sys_verificarSessao.php");

	include_once("sys_conectarNotasBD.php");

	$query = "SELECT * FROM tbl_notas "; 
        
    $result = mysqli_query($conn, $query);

	$conn->close();
?>