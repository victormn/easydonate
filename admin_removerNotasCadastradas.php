<?php

	include_once("sis_verificarSessaoAdmin.php");

    include_once("sis_conectarNotasBD.php");

    $query = "DELETE FROM tbl_notascadastradas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: admin.php");
?>