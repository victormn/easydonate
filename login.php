<?PHP 

    session_start();
    if(isset($_SESSION['admin'])) {
        header("Location: admin/admin_homepage.php");
        exit;
    }    
    if(isset($_SESSION['login'])) {
        header("Location: user/user_listarNotas.php");
        exit;
    }

    include_once("system/sys_conectarUserBD.php"); 
    if( isset($_POST['txtUsername']) && isset($_POST['txtPassword']) ) { 

        $username = $_POST['txtUsername'];
        $password = $_POST['txtPassword'];
        
        $query = "SELECT username, password FROM tbl_client ". 
        " WHERE username = '$username' AND password = '$password'"; 
        
        $result = mysqli_query($conn, $query);
        
        if(($username == "admin") && ($password == "engcomp&012013")){

            $_SESSION['admin'] = true;
            $_SESSION['login'] = true;
            header("Location: admin/admin_homepage.php");
            exit; 

        }else{

            if($result->num_rows > 0){   

                $_SESSION['login'] = true;
                header("Location: user/user_listarNotas.php");
                exit; 
            } 
            else{
                echo 'Usuario ou senha invalidos!';
            }
        }
    } 
?>

<html>
<head><title>Login|EasyDonate</title></head>
    <body>
    <center>
        <h1>Login</h1>
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            Username <input type="text" name="txtUsername" value="" /><br/>
            Password <input type="password" name="txtPassword" value="" /><br/>
            <input type="submit" name="btnSubmit" value="Login"/>
        </form>
    </center>
    </body>
</html>