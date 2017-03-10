<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtm1-transitional.dtd">

<!--
LOGIN PAGE FOR MINDKRAFT REGISTRATION PORTAL
-->

<html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/../css/style.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    </head>
    
    <body>
        <div class="contain animated fadeIn">
            <div class="header">
                <img src="img/logo.png">
                <h1>Mindkraft</h1>
            </div>
            <br><br>
            <form id="form1" runat="server">
                    <div class="form-input">
                        <input type="text" name="username" placeholder="Enter your Register Number">
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Enter Password">                
                    </div>
                
                    <input type="submit" name="submit" value="LOGIN" class="btn btn-success btn-lg">
            </form>
            <br>
            <a href="#"><strong>Forget Password</strong></a>
        </div>
    </body>
</html>
