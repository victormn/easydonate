<?php

	include_once("verificarSessaoAdmin.php");

    include_once("conectarNotasBD.php");

    $query = "DELETE FROM tbl_notascadastradas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: listarNotasCadastradas.php");
?>