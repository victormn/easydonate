<?php

    include_once("sys_verificarSessao.php");

	include_once("sys_conectarNotasBD.php");

	$query = "SELECT * FROM tbl_notas "; 
        
    $result = mysqli_query($conn, $query);

	while($row = $result->fetch_assoc()) {

        $id = $row['id']; 
        $cnpj = $row['cnpj']; 
        $valor = $row['valor'];
        $data = $row['data'];
        $qrcode = $row['qrcode'];

        $query = "INSERT INTO tbl_notascadastradas(id, cnpj, valor, data, qrcode)". 
        "VALUES('$id', '$cnpj', '$valor', '$data', '$qrcode')"; 
        
		mysqli_query($conn, $query);
    }

    $conn->close(); 

	header("Location: sys_removerNotas.php");
?>