<?php

    include_once("verificarSessaoAdmin.php");

    include_once("connectionClient.php"); 
    if(isset($_POST['txtUsername'])) { 

        $username = $_POST['txtUsername'];

        $query = "DELETE FROM tbl_notas WHERE username = '$username' "; 
        
        mysqli_query($conn, $query);
    }

?>

<html>
<head><title>Remover Cadastro|EasyDonate</title></head>
    <body>
    <center>
        <h1>Remover Cadastro</h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="txtUsername" value="" /><br/>
            <input type="submit" name="btnSubmit" value="Cadastrar"/>
        </form>
        <a href="admin.php">Voltar</a></h1>
    </center>
    </body>
</html>

