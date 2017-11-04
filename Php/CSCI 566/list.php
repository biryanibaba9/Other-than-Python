<?php
/*
 Assignment-9   Due:11/7/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

try {
        $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $link= new PDO( $dsn , $username, $password);
 $sql ="SELECT * from director";
    $result = $link->query($sql);
    echo "<html><head></head><body bgcolor=grey>";
    echo "<h4> LIST OF DIRECTORS: </h4>";
    echo "<table border = 2>";
    echo "<tr>";
    echo "<th>Director_ID</th>";
    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "</tr>";
    echo "<tr>";
    while(($row = $result->fetch())!=NULL)
    {
        echo "<td>";
        echo $row['did'];
        echo "</td>";
        echo "<td>";
        echo $row['fname'];
        echo "</td>";
        echo "<td>";
        echo $row['lname'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</body></html>";

}

catch(PDOexception $e)
        {
                echo "Connection failed:" . $e->getMessage();
        }



?>


