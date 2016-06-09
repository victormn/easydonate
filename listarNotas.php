<?php

	include_once("verificarSessao.php");

	include_once("buscarNotasBD.php");
?>

<html>
<head><title>Notas Recebidas|	EasyDonate</title></head>
    <body>
    <center>
    	<h1>Notas Recebidas</h1>

        <?php 

        if ($result->num_rows > 0) {
    
		    while($row = $result->fetch_assoc()) {
		        echo "<b>Nota #</b>". $row["id"] .
		        "<br><b>CNPJ do Emissor da Nota: </b>" . $row["cnpj"]. 
		        "<br><b>Valor da Nota: </b>" . $row["valor"].
		        "<br><b>Data da Nota (Compra): </b>" . $row["data"]."<br><br>";
		    }
		    echo '<form action="enviarNotasParaReceita.php">
		    <input type="submit" value="Enviar">
			</form>';

			echo '<form action="listarNotas.php">
		    <input type="submit" value="Atualizar Lista">
			</form>';

		} else {
	    	echo "<b>Nenhuma nota :)</b><br><br>";

		    echo '<form action="listarNotas.php">
		    <input type="submit" value="Atualizar Lista">
			</form>';
		}

        ?>
        
		<a href="sair.php">Sair</a></h1>

	</center>
    </body>
</html>