<?php

	include_once("sys_verificarSessao.php");

	include_once("sys_buscarNotasBD.php");

	// enviar para receita

	header("Location: sys_armazenarNotasCadastradas.php");

?>