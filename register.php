<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml/DTD/xhtm1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head runat="server">
        <title>Mindkraft Registration Portal</title>
        <script type="text/javascript" src="https://ajax.microsoft.com/ajax/jQuery/jquery-1.4.2.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/register-styles.css">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <script>
function result() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "", true);
  xhttp.send();
}
</script>

<body>
<div class="container-fluid">
    <div class="jumbotron">
      <h1 class="text-center">REGISTER HERE</h1>
      <form>
        <div class="form-group">
            <input class="form-control input-lg text-center" id="inputlg" name="user" type="text" autofocus placeholder="Enter or Scan your Register Number" style="">
                <button type="button" onclick="result()">Search</button>
        </div>  
      </form>
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

        
        $uname = $_POST["user"]; 
        $query = "select * from register where registerno ='$uname'";
        $result = mysqli_query($conn , $query) or die(mysql_error());
        if( mysqli_num_rows($result)==1)
        {
            echo "User Already Registered .";
            header("location:Default.aspx");
            exit();
        }
        else
        {
            echo "Register Number Not registered Please Register";
            header("location:register.php");
        }
        ?>
      <div id="result1"></div>
    </div>
</div>
</body>
</html>