<?php

	include_once("verificarSessaoAdmin.php");

    include_once("conectarBD.php");

    $query = "DELETE FROM tbl_notascadastradas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: listarNotasCadastradas.php");
?>