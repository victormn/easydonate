<?php

    include_once("verificarSessaoAdmin.php");

?>

<html>
<head><title>Celular|EasyDonate</title></head>
    <body>
    <center>
        <h1>Celular</h1>
        <form action="receberInserirNotasBD.php" method="post">

            CNPJ <input type="text" name="txtCNPJ" value="" /><br/>
            VALOR <input type="text" name="txtValor" value="" /><br/>
            COO <input type="text" name="txtCoo" value="" /><br/>
            Data <input type="text" name="txtData" value="" /><br/>
            QRCode <input type="text" name="txtQRCode" value="" /><br/>

            <input type="submit" name="btnSubmit" value="Enviar"/>
        </form>
        <a href="admin.php">Voltar</a></h1>
    </center>
    </body>
</html>