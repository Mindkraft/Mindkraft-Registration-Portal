<?php
session_start();
    require 'db.php';
    

    if(isset($_GET['username']) && !empty($_GET['username']) AND isset($_GET['password']) && !empty($_GET['password'])) {
        $username = mysqli_escape_string($conn, $_GET['username']);
        $password = mysqli_escape_string($conn, $_GET['password']);
        
        $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password=sha1('$password')");
        
        if(mysqli_num_rows($result) == 0) {
            header("location: index.php");
            $_SESSION = array();
        }
        else {
            header("location: register.php");
            $_SESSION['active']=1;
        }
        $_SESSION['username']=$username;
    }
    
?>









<?php

/*
SHOULD PUT IT IN THE BEGINNING OF REGISTER.PHP


*/
        ?>