<?php

	include_once("sys_verificarSessaoAdmin.php");

    include_once("sys_conectarNotasBD.php");

    $query = "DELETE FROM tbl_notascadastradas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: ../user/user_listarNotasCadastradas.php");
?>