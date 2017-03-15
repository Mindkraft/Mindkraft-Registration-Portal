<?php 
session_start();
    $servername = "localhost";
    $username = "root";
    $password = "root";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Select database
    $db_check = mysqli_select_db($conn, "login");
    if(!$db_check) {
        die("Database selection failed! " . mysqli_connect_error());
    }

    
?>