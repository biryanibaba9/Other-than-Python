<?php

/*
 Assignment-10	Due:11/11/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

        echo "<html><head><meta charset='UTF-8'><title>Add Record Form</title></head><body bgcolor=grey>";
	echo "<center><h1>ASSIGNMENT 10</h1></center>";
	echo "<p><b> Add a movie: </b></p>";
	echo "<form action='insert.php' method='post'><p>";
        echo "<label for='titlename'> Title Name:</label>";
	echo "<input type='text' name='titlename' id='titleName'></p><p>";
        echo "<label for='release'> Release Year:</label>";
        echo "<input type='text' name='release' id='release'></p><p>";
        echo "<label for='length'>Length:</label>";
        echo "<input type='text' name='length' id='length'></p>";
    	echo "<input type='submit' value='Submit'></form>";

	echo "<br><br><br>";
	echo "<p><b>Add an Actor: </b></p>";
	echo "<form action='actorinsert.php' method='post'><p>";
	echo "<label for='fname'>First Name:</label>";
        echo "<input type='text' name='fname' id='fname'></p><p>";
        echo "<label for='lname'> Last Name:</label>";
        echo "<input type='text' name='lname' id='lname'></p><p>";
        echo "<input type='submit' value='Submit'></p></form>";

	echo "<br><br><br>";
	echo "<p><form action='connect.php' method='post'>";
	$link = mysqli_connect("courses", "z1809837", "1993Nov27", "z1809837");
	if($link === false){
    	die("ERROR: Could not connect. " . mysqli_connect_error());
	}
	$sql3 = "select * from movie";
	$result = mysqli_query($link, $sql3);
	echo "<label for='movie'>Select a Movie: </label>";
    	echo "<select name='title' id='title' class='form-control'><option value=''>SELECT</option></p>";
    	while(($row = mysqli_fetch_array($result))!=NULL)
    	{
		echo "<option value=" . $row['mid'] . ">" . $row['title']." ". "</option>";
    	}
    	echo "</select> ";

	echo "<br><br>";
	$link = mysqli_connect("courses", "z1809837", "1993Nov27", "z1809837");
        if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql4 = "select * from actor";
        $result = mysqli_query($link, $sql4);
        echo "<label for='actor'>Select an Actor: </label>";
        echo "<select name='aid' id='aid' class='form-control'><option value=''>SELECT</option>";
        while(($row = mysqli_fetch_array($result))!=NULL)
        {
                  echo "<option value=" . $row['aid'] . ">" . $row['fname']." ". $row['lname']. "</option>";
        }
        echo "</select><br> ";
	echo "<p>Enter Salary:</p>";
	echo "<input type='text' name='salary' id='salary'>";
	echo "<p><input type='submit' value='Connect'>";
	echo "</p></form>";

	echo "<br><br>";
	echo "<form action='delete.php' method='post'>";
	$link = mysqli_connect("courses", "z1809837", "1993Nov27", "z1809837");
        if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $sql4 = "select * from actor";
        $result = mysqli_query($link, $sql4);
        echo "<label for='actor'>Select an Actor: </label>";
        echo "<select name='aid' id='aid' class='form-control'><option value=''>SELECT</option>";
        while(($row = mysqli_fetch_array($result))!=NULL)
        {
                  echo "<option value=" . $row['aid'] . ">" . $row['fname']." ". $row['lname']. "</option>";
        }
        echo "</select><br> ";
	echo "<p><input type='submit' value='Delete'></p>";
	echo "</form>";
	echo "</body></html>";


?>

