<?php

    include_once("verificarSessao.php");

	include_once("conectarBD.php");

	$query = "SELECT * FROM tbl_notas "; 
        
    $result = mysqli_query($conn, $query);

	while($row = $result->fetch_assoc()) {

        $cnpj = $row['cnpj']; 
        $valor = $row['valor'];
        $coo = $row['coo'];
        $data = $row['data'];
        $qrcode = $row['qrcode'];

        $query = "INSERT INTO tbl_notascadastradas(cnpj, valor, coo, data, qrcode)". 
        "VALUES('$cnpj', '$valor', '$coo', '$data', '$qrcode')"; 
        
		mysqli_query($conn, $query);
    }

    $conn->close(); 

	header("Location: removerNotas.php");
?>