<?php

	include_once("sis_verificarSessao.php");

	include_once("sis_buscarNotasBD.php");

	// enviar para receita

	header("Location: sis_armazenarNotasCadastradas.php");

?>