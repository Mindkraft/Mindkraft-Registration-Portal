<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtm1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
        <title>Mindkraft Registration Portal</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/register-styles.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <script>
        function showUser(str) {
             
            
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("GET","getuser.php?q="+str,true);
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
        
        xmlhttp.send();
            $("#txtHint").focus();
}
</script>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}
</style>
<body>
<div class="container-fluid">
    <div class="jumbotron">
      <h1 class="text-center">REGISTER HERE</h1>
      <form method="get">
        <div class="form-group">
            <input class="form-control input-lg text-center" id="inputlg" name="user" type="text" 
                   autofocus placeholder="Enter or Scan your Register Number" style="" onchange="showUser(this.value)">
                
        </div>  
      </form>
      </div>
      <div id="txtHint"><b></b></div>

        <?php
        // put your code here
        //Database connectivity
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpwd = "";
        //Open MYSQL connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpwd) or die("Connection Error");
        //Select the database
        $dbname = "mindkraft";
        mysqli_select_db($conn, $dbname) or die('Database Error');

       ?>
    
</div>
</body>
</html>
