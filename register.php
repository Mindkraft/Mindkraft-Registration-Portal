<?php
    require 'db.php';
    if(isset($_SESSION['username']) && !empty($_SESSION['username']) AND ($_SESSION['active'] == 1)) {
        //echo $_SESSION['username'];
       
        
    }
    else {
        header("location: index.php");
    }

?>
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
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}
    .reg-cell {
        width: 20%;
    }
    .name-cell {
        width: 30%;
    }
    .dept-cell {
        width: 30%;
    }
    .status-cell {
        width: 20%;
    }
    
</style>
<body>
<div class="container-fluid">
    <div class="jumbotron">
    
        <?php
            //echo "<p class='user-display-name'>" . $_SESSION['username'] . "</p>"; 
        ?>
      <h1 class="text-center">REGISTER HERE</h1>
      <form method="POST">
        <div class="form-group">
            <input class="form-control input-lg text-center" id="inputlg" name="user" type="text" 
                   autofocus placeholder="Enter or Scan your Register Number" style="" onchange="">
                
        </div>  
      </form>
      </div>
      <div id="txtHint"><table>
                <tr>
                <th class="reg-cell">Registration Number</th>
                <th class="name-cell">Name</th>
                <th class="dept-cell">Department</th>
                <th class="status-cell">Status</th>
                </tr></div>

        <?php
        // put your code here
        $register = $_POST["user"];
        //Database connectivity
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpwd = "root";
        //Open MYSQL connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpwd) or die("Connection Error");
        //Select the database
        $dbname = "login";
        mysqli_select_db($conn, $dbname) or die('Database Error');
        $sql="INSERT INTO user (rno) VALUES ('$register')";
        $result=mysqli_query($conn,$sql);

        $sql1="SELECT * FROM register WHERE registerno IN ( SELECT rno FROM user )";
        $result1=mysqli_query($conn,$sql1);
                while($row = mysqli_fetch_assoc($result1)) {
                    echo "<table>";
                echo "<tr>";
                echo "<td class='reg-cell'>" . $row["registerno"] . "</td>";
                echo "<td class='name-cell'>" . $row["name"] . "</td>";
                echo "<td class='dept-cell'>" . $row["dept"] . "</td>";
                echo "<td class='status-cell'>" . $row["status"] . "</td>";
                echo "</tr>";
                }
                
            echo "</table>";
                
mysqli_close($conn);
       ?>
    
</div>
</body>
</html>

<!--
     $_SESSION = array();


<script>
            
            window.onbeforeunload = function() {
                var confirmClose = confirm('Close?');
                return confirmClose;
        }
    </script>
-->
