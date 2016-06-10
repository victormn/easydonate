<?php

	include_once("verificarSessao.php");

    include_once("conectarNotasBD.php");

    $query = "DELETE FROM tbl_notas"; 
        
    mysqli_query($conn, $query);

    $conn->close();

    header("Location: listarNotas.php");
?>