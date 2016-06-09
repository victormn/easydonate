<?php

    include_once("verificarSessaoAdmin.php");

    include_once("connectionClient.php"); 
    if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ) { 

        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];

         $query = "INSERT INTO tbl_client(username, password)". 
        "VALUES('$username', '$password')"; 
        
        $result = mysqli_query($conn, $query);
        
        if($result == 1){ 
        
        	echo "Casdastrado";

        }
        else{
        	echo "Username ja cadastrados";
        }

    }

?>

<html>
<head><title>Cadastro|EasyDonate</title></head>
    <body>
    <center>
        <h1>Cadastro</h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="txtUsername" value="" /><br/>
            Password <input type="password" name="txtPassword" value="" /><br/>
            <input type="submit" name="btnSubmit" value="Cadastrar"/>
        </form>
        <a href="admin.php">Voltar</a></h1>
    </center>
    </body>
</html>

