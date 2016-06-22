<?php

	include_once("../system/verificarSessaoCliente.php");

	include_once("../database/buscarNotas.php");
?>

<html>
<head>
    <title>Notas Recebidas | EasyDonate</title>
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
        <h1>Notas Recebidas</h1>
        <p>

        <?php 

        if ($result->num_rows > 0) {
    
		    while($row = $result->fetch_assoc()) {
		        echo "<p><b>Nota # </b>".$row["id"].                                              
                            "<br><b>CNPJ do Emissor da Nota: </b>".$row["cnpj"].                  
                            "<br><b>Valor da Nota: </b>".$row["valor"].
                            "<br><b>Data da Nota (Compra): </b>".$row["data"]."<br><br><p>"; 
		    }
		    echo '<form action="../system/enviarNotasParaReceita.php">
		    <input type="submit" value="Enviar">
			</form>';

		} else {
	    	echo "<b>Nenhuma nota :)</b><br><br>";
		}

		echo '<form action="listarNotas.php">
		<input type="submit" value="Atualizar Lista">
		</form>';

        ?>
        </p>
        
        <a href="../Templates.php">Voltar</a></h1>

	</center>
    </body>
</html>