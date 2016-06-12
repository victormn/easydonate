<?php

    include_once("../system/sys_verificarSessaoAdmin.php");

    include_once("../system/sys_conectarUserBD.php"); 

	$query = "SELECT * FROM tbl_client "; 
        
    $result = mysqli_query($conn, $query);

	$conn->close();


?>

<html>
<head><title>Usuarios Cadastradas|EasyDonate</title></head>
    <body>
    <center>
    	<h1>Usuarios Cadastrados</h1>

        <?php 

        if ($result->num_rows > 0) {
    
		    while($row = $result->fetch_assoc()) {
		        echo "<b>Username: </b>". $row["username"] ."<br>";
		    }

		} else {
	    	echo "<b>Nenhum usuario cadastrado :)</b><br><br>";
		}

		echo '<form action="admin_listarUser.php">
	    <input type="submit" value="Atualizar">
		</form>';

        ?>

        <a href="admin_homepage.php">Voltar</a></h1>
        
	</center>
    </body>
</html>