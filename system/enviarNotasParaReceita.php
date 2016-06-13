<?php

	include_once("verificarSessaoCliente.php");

	include_once("../database/buscarNotas.php");

	// enviar para receita

	header("Location: ../database/armazenarHistorico.php");

?>