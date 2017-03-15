<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
        $register = $_GET['q'];

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpwd = "";
        //Open MYSQL connection
        $conn = mysqli_connect($dbhost, $dbuser, $dbpwd) or die("Connection Error");
        //Select the database
        $dbname = "mindkraft";
        mysqli_select_db($conn, $dbname) or die('Database Error');
        
        $sql="SELECT * FROM register WHERE registerno = '.$register.'";
        $result = mysqli_query($conn,$sql);

            echo "<table>
                <tr>
                <th>Registration Number</th>
                <th>Name</th>
                <th>Department</th>
                <th>Status</th>
                <th>Date</th>
                </tr>";
                
                while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['registerno'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['dept'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "</tr>";
                }
                
            echo "</table>";
                
mysqli_close($conn);
?>
</body>
</html>