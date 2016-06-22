<?php 

    session_start();
    if(isset($_SESSION['admin'])) {
        header("Location: admin/homepage.php");
        exit;
    }    
    if(isset($_SESSION['cliente'])) {
        header("Location: user/listarNotas.php");
        exit;
    }

    include_once("database/conectarUserBD.php"); 
    if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ) { 

        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        $query = "SELECT username, password FROM tbl_client ". 
        " WHERE username = '$username' AND password = '$password'"; 
        
        $result = mysqli_query($conn, $query);
        
        if(($username == "admin") && ($password == "engcomp&012013")){

            $_SESSION['admin'] = true;
            $_SESSION['cliente'] = true;
            header("Location: admin/homepage.php");
            exit; 

        }else{

            if($result->num_rows > 0){   

                $_SESSION['cliente'] = true;
                header("Location: Templates.php");
                exit; 
            } 
            else{
                echo 'Usuario ou senha invalidos!';
            }
        }
    } 
?>

<html>
<head>
    <title>Login | EasyDonate</title>
    <style>
        body {background-color: lightsteelblue;}
        h1   {color:black; background-image: url(Images/logo_light.png);} 
       
    </style>
</head>
    <body>
        
        <center>
        <h1 style="font-family: Tahoma;">Login</h1>
        <form action="login.php" method="post" enctype="multi-part/form-data">
            <input placeholder="Username" name="txtUsername" type="text" autofocus>
            <input placeholder="Password" name="txtPassword" type="password">
            <input type="submit" name="btnSubmit" value="Login">     
            
        </form>        
        </center>
    
    </body>
</html>