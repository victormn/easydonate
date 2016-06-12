<?php

	include_once("sys_verificarSessao.php");

    include_once("sys_conectarNotasBD.php");

    $query = "DELETE FROM tbl_notas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: ../user/user_listarNotas.php");

?>