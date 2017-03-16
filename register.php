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


    .reg-cell {
        width: 15%;
    }
    .name-cell {
        width: 25%;
    }
    .dept-cell {
        width: 30%;
    }
    .status-cell {
        width: 15%;
    }
    .date-cell {
        width: 15%;
    }
    
</style>
<body>
<div class="container-fluid">
    <div class="jumbotron">
    
        <?php
            //echo "<p class='user-display-name'>" . $_SESSION['username'] . "</p>"; 
        ?>
      <h1 class="text-center">REGISTER HERE</h1>
      <form method="POST" autocomplete="off">
        <div class="form-group">
            <input class="form-control input-lg text-center" id="inputlg" name="user" type="text" autofocus placeholder="Enter or Scan your Register Number" style="" onchange="">
                
        </div>  
      </form>
      <div id="status"></div>
      </div>

      <div id="txtHint"><table class="table table-bordered table-hover my-table table-top text-center">
                <tr>
                <th class="reg-cell text-center">REGISTRATION NO.</th>
                <th class="name-cell">NAME</th>
                <th class="dept-cell">DEPARTMENT</th>
                <th class="status-cell text-center">STATUS</th>
                <th class="date-cell text-center">DATE</th>
                </tr></table></div>

        <?php
        // put your code here
        error_reporting(0);

        $register = $_POST["user"];
        //Database connectivity
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpwd = "";
        //Open MYSQL connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpwd) or die("Connection Error");
        //Select the database
        $dbname = "login";
        mysqli_select_db($conn, $dbname) or die('Database Error');

        
        if (isset($_POST['user']))    
        {    
          // Instructions if $_POST['user'] exist    
            # code...
            //$sql="INSERT INTO user (rno) VALUES ('$register')";
            //$result=mysqli_query($conn,$sql);
            $sql0="SELECT registerno FROM register WHERE register.registerno='$register'";
            $res=mysqli_query($conn,$sql0);
            if(mysqli_num_rows($res) == 0 ){
               echo "<script language='javascript'>";
               echo "alert('Register Number NOT REGISTERED .')";
               echo "</script>";
            }
            else{
                $sql="INSERT INTO user (rno) VALUES ('$register')";
                $result=mysqli_query($conn,$sql);

                $sql1="SELECT register.* , user.* FROM register, user WHERE register.registerno = user.rno";
                $result1=mysqli_query($conn,$sql1);

                while($row = mysqli_fetch_assoc($result1)) {
                echo "<table class='table table-bordered table-hover my-table'>";
                echo "<tr>";
                echo "<td class='reg-cell text-center'>" . $row["registerno"] . "</td>";
                echo "<td class='name-cell'>" . $row["name"] . "</td>";
                echo "<td class='dept-cell'>" . $row["dept"] . "</td>";
                echo "<td class='status-cell text-center'>" . $row["status"] . "</td>";
                echo "<td class='date-cell'>" . $row["cdate"] . "</td>";
                echo "</tr>";
                }
                echo "</table>";

            }
               
        }          
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
