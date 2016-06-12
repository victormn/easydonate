<?php

	include_once("../system/sys_verificarSessao.php");
		
	include_once("../system/sys_buscarNotasCadastradasBD.php");
?>

<html>
<head><title>Historico de Notas Enviadas|EasyDonate</title></head>
    <body>
    <center>
    	<h1>Historico de Notas Enviadas</h1>

        <?php 

        if ($result->num_rows > 0) {
    
		    while($row = $result->fetch_assoc()) {
		        echo "<b>Nota #</b>". $row["id"] .
		        "<br><b>CNPJ do Emissor da Nota: </b>" . $row["cnpj"]. 
		        "<br><b>Valor da Nota: </b>" . $row["valor"].
		        "<br><b>Data da Nota (Compra): </b>" . $row["data"]."<br><br>";
		    }

		    echo '<form action="../system/sys_removerNotasCadastradas.php">
		    <input type="submit" value="Apagar Historico">
			</form>';

		} else {
	    	echo "<b>Nenhuma nota cadastrada :)</b><br><br>";
		}

		echo '<form action="user_listarNotasCadastradas.php">
	    <input type="submit" value="Atualizar Lista">
		</form>';

        ?>

        <a href="../system/sys_sair.php">Sair</a></h1>
        
	</center>
    </body>
</html>