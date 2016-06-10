<?php

	include_once("sis_verificarSessao.php");

	include_once("sis_conectarNotasBD.php");

	$cnpj = $_POST['txtCNPJ'];
	$valor = $_POST['txtValor'];
	$data = $_POST['txtData'];
	$qrcode = $_POST['txtQRCode'];

	$query = "INSERT INTO tbl_notas(cnpj, valor, data, qrcode)". 
        "VALUES('$cnpj', '$valor', '$data', '$qrcode')"; 

	mysqli_query($conn, $query);
    $conn->close();  

    //session_start();
    if(isset($_SESSION['admin'])) {
		header("Location: admin_celular.php");
	}

?>