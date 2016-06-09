<?php

	include_once("verificarSessao.php");

	include_once("buscarNotasBD.php");

	// enviar para receita

	header("Location: armazenarNotasCadastradas.php");

?>