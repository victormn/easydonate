<?php

	include_once("verificarSessao.php");

	include_once("conectarBD.php");

	$cnpj = $_POST['txtCNPJ'];
	$valor = $_POST['txtValor'];
	$coo = $_POST['txtCoo'];
	$data = $_POST['txtData'];
	$qrcode = $_POST['txtQRCode'];

	$query = "INSERT INTO tbl_notas(cnpj, valor, coo, data, qrcode)". 
        "VALUES('$cnpj', '$valor', '$coo', '$data', '$qrcode')"; 

	mysqli_query($conn, $query);
    $conn->close();  

  	header("Location: celular.php");
?>