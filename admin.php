<?php

	include_once("verificarSessao.php");

?>

<html>
<head><title>Admin|EasyDonate</title></head>
    <body>
    <center>
    	<h1>Administrador</h1>

		<a href="celular.php">Celular</a></h1>
		<?php echo "<br>"; ?>
		<a href="removerNotas.php">Apagar BD Notas Recebidas</a></h1>
		<?php echo "<br>"; ?>
		<a href="removerNotasCadastradas.php">Apagar BD Notas Cadastradas</a></h1>
		<?php echo "<br>"; ?>
		<a href="cadastro.php">Cadastro de Cliente</a></h1>
		<?php echo "<br>"; ?>
		<a href="removerCliente.php">Remover Cliente</a></h1>
		<?php echo "<br>"; ?>
		<a href="sair.php">Sair</a></h1>			

	</center>
    </body>
</html>