<?php

	include_once("../system/verificarSessaoAdmin.php");

?>

<html>
<head><title>Administrador|EasyDonate</title></head>
    <body>
    <center>
    	<h1>Administrador</h1>

		<a href="cadastroUser.php">Cadastro de Usuario</a></h1>
		<?php echo "<br>"; ?>
		<a href="listarUser.php">Listar Usuarios</a></h1>
		<?php echo "<br>"; ?>
		<a href="removerUser.php">Remover Usuario</a></h1>
		<?php echo "<br><br>"; ?>
		<a href="../logout.php">Sair</a></h1>			

	</center>
    </body>
</html>