<?php

    include_once("../system/sys_verificarSessaoAdmin.php");

    include_once("../system/sys_conectarUserBD.php"); 

    if(isset($_POST['txtUsername'])) { 

        $username = $_POST['txtUsername'];

        $query = "DELETE FROM tbl_client WHERE username = '$username' "; 
        
        mysqli_query($conn, $query);

        $conn->close(); 

    }

?>

<html>
<head><title>Remover Usuario|EasyDonate</title></head>
    <body>
    <center>
        <h1>Remover Usuario</h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="txtUsername" value="" /><br/>
            <input type="submit" name="btnSubmit" value="Remover"/>
        </form>
        <a href="admin_homepage.php">Voltar</a></h1>
    </center>
    </body>
</html>

