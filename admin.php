<?php

	include_once("verificarSessaoAdmin.php");

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
		<a href="cadastroUser.php">Cadastro de Usuario</a></h1>
		<?php echo "<br>"; ?>
		<a href="listarUser.php">Listar Usuarios</a></h1>
		<?php echo "<br>"; ?>
		<a href="removerUser.php">Remover Usuario</a></h1>
		<?php echo "<br>"; ?>
		<a href="sair.php">Sair</a></h1>			

	</center>
    </body>
</html>