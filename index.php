<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtm1-transitional.dtd">
<?php
require 'db.php';
?>


<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Mindkraft Registration Portal</title>
        <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        
        <script>
            $(document).ready(function() {
                $(".contain").addClass("animated headShake");
            });
        </script>
    </head>
    
    <?php
    
    ?>
    
    <body>
        <div class="contain">
            <div class="header">
                <img src="img/logo.png">
                <h1>Mindkraft</h1>
            </div>
            <br><br>
            <form id="form1" method="GET" action="authenticate.php">
                    <div class="form-input">
                        <input type="text" name="username" placeholder="Register Number" autofocus>
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Password">                
                    </div>
                
                    <input type="submit" name="submit" value="LOGIN" class="btn btn-success btn-lg">
                
                    
                
            </form>
            <br>
            <a href="#"><strong>Forget Password</strong></a>
        </div>
    </body>
</html>
