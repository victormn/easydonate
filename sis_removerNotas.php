<?php

	include_once("sis_verificarSessao.php");

    include_once("sis_conectarNotasBD.php");

    $query = "DELETE FROM tbl_notas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    //session_start();
    if(isset($_SESSION['admin'])) {
		header("Location: admin.php");
	}else{
    	header("Location: user_listarNotas.php");
    }
?>