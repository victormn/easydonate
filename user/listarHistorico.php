<?php

	include_once("../system/verificarSessaoCliente.php");
		
	include_once("../database/buscarHistorico.php");
?>

<html>
<head>
    <title>Historico de Notas Enviadas|EasyDonate</title>
    <style>        
        h1 {color:black; background-color: lightsteelblue; font-family: Tahoma;} 
        p {          
            margin: 10px 10px 10px 0;
            border: 3px solid #E3E3E3;
            border-radius: 10px;
            moz-border-radius: 10px;                          
        }   
        a {font-family: Tahoma; color: #333}
    </style>
</head>
    <body>
    <center>
    	<h1>Histórico de Notas Enviadas</h1>
        
        <p>

        <?php 

        if ($result->num_rows > 0) {
    
		    while($row = $result->fetch_assoc()) {
		        echo "<p><b>Nota #</b>". $row["id"] .
		        "<br><b>CNPJ do Emissor da Nota: </b>" . $row["cnpj"]. 
		        "<br><b>Valor da Nota: </b>" . $row["valor"].
		        "<br><b>Data da Nota (Compra): </b>" . $row["data"]."<br><br><p>";
		    }

		    echo '<form action="../database/removerHistorico.php">
		    <input type="submit" value="Apagar Historico">
			</form>';

		} else {
	    	echo "<b>Nenhuma nota cadastrada :)</b><br><br>";
		}

		echo '<form action="listarHistorico.php">
	    <input type="submit" value="Atualizar Lista">
		</form>';

        ?>
            
        </p>

        <a href="../Templates.php">Voltar</a></h1>
        
	</center>
    </body>
</html>