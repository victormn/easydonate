<?php

	include_once("../system/verificarSessaoCliente.php");

    include_once("conectarNotasBD.php");

    $query = "DELETE FROM tbl_historico"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: ../user/listarHistorico.php");
?>