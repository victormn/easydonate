<?php

	include_once("../system/sys_verificarSessaoAdmin.php");

?>

<html>
<head><title>Admin|EasyDonate</title></head>
    <body>
    <center>
    	<h1>Administrador</h1>

		<a href="admin_celular.php">Celular</a></h1>
		<?php echo "<br><br>"; ?>
		<a href="admin_cadastroUser.php">Cadastro de Usuario</a></h1>
		<?php echo "<br>"; ?>
		<a href="admin_listarUser.php">Listar Usuarios</a></h1>
		<?php echo "<br>"; ?>
		<a href="admin_removerUser.php">Remover Usuario</a></h1>
		<?php echo "<br><br>"; ?>
		<a href="../system/sys_sair.php">Sair</a></h1>			

	</center>
    </body>
</html>