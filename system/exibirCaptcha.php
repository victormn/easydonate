<?php



?>

<html>
<head><title>Captcha|EasyDonate</title></head>
    <body>
    <center>
        <h1>Insira o Captcha abaixo:</h1>

        <?php echo "CAPTHCA"; ?>

        <form action="../database/armazenarNotas.php" method="post">

            <input type="text" name="txtCaptcha" value="" /><br/>
            
            <input type="submit" name="btnSubmit" value="Enviar"/>
        </form>
    </center>
    </body>
</html>