<?php

    include_once("verificarSessaoAdmin.php");

    include_once("connectionClient.php"); 


        $query = "DELETE FROM tbl_notas WHERE username = '$username' "; 
        
        mysqli_query($conn, $query);


?>