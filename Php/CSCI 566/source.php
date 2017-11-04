<?php
/*
 Assignment-9	Due:11/7/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/

try 
{
	$dsn = "mysql:host=courses;dbname=z1809837";
	$username = "z1809837";
	$password = "1993Nov27";
	$link= new PDO( $dsn , $username, $password);
	$sql="SELECT * FROM movie";
	$result = $link->query($sql);
    echo "<html><head></head><body bgcolor=grey>";
    echo "<marquee><h1>MOVIES, ACTORS AND DIRECTORS</h1></marquee>";
    echo "<p><b> 1. LIST OF MOVIES </b></p>";
    echo "<table border='1'><tr><th>Movie ID</th><th>Movie Title</th><th>Release Year</th><th>Running Time</th></tr>";
    while(($row = $result->fetch())!=NULL) 
	{
    	echo "<center><tr><td>";
    	echo $row["mid"];
    	echo "</td>";
    	echo "<td>";
    	echo $row["title"];
    	echo "</td>";
	echo "<td>";
	echo $row["releaseYear"];
	echo "</td>";
	echo "<td>";
	echo $row["length"];
	echo "</td>";
    	echo "</tr></center>";
    	}
    echo "</table>";
echo "<br><br>";
    echo "<form action='source.php' method='get'>";
    $sql="SELECT * FROM actor";
    $result = $link->query($sql);
    echo "<label for='actor'>Select an Actor: </label>";
    echo "<select name='actor' id='actor' class='form-control'><option value=''>SELECT</option>";
    while(($row = $result->fetch())!=NULL)
    {
    	echo "<option value='" . $row['aid'] . "'>" . $row['fname']." ". $row['lname']. "</option>";
    }
    echo "</select> ";
    echo "<input type='submit' value='SUBMIT' name='SUBMIT'>";
echo "<br><br>";
    $sql ="SELECT fname,lname FROM actor WHERE aid=?";
    $prepared = $link->prepare($sql);
    $ret = $prepared->execute((array($_GET['actor'])));
    $row= $prepared->fetch();
    echo "<h3>Career Details of ";
    echo $row['fname'] .' '.$row['lname'].":</h3>";
    $sql ="SELECT title FROM movie WHERE mid IN (SELECT mid FROM performs_in WHERE aid=?)";
    $prepared = $link->prepare($sql);
    $ret = $prepared->execute((array($_GET['actor'])));
    echo "<h4>Movies: </h4>";
    echo "<ul>";
    while (($row = $prepared->fetch())!=NULL)
    {
    	echo "<li>";
    	echo $row['title']."</li>";
    }
    echo "</ul>";
    $sql ="SELECT sum(salary) AS total FROM performs_in WHERE aid=?";
    $prepared = $link->prepare($sql);
    $ret = $prepared->execute((array($_GET['actor'])));
    $row= $prepared->fetch();
    echo "<h4>Total Salary: </h4>";
    echo "<ul type = 'square'>";
    echo "<li>".$row['total']. "</li></ul>";
    echo "</form>";
    echo "<br><br>";
   			$sql = "SELECT distinct actor.fname, actor.lname FROM actor, performs_in where actor.aid = performs_in.aid and performs_in.mid = ?";
			$sql_1 = "SELECT * FROM movie where mid = ?";
			$stmt = $link->prepare($sql);
			$ret = $prepared->execute((array($_GET['actor'])));
			$stmt_1 = $link->prepare($sql_1);
 			$ret1 = $prepared->execute((array($_GET['actor'])));
    			$stmt->bindValue(1, $ret, PDO::PARAM_INT);
			$stmt_1->bindValue(1, $ret, PDO::PARAM_INT);
			$stmt->execute();
			$stmt_1->execute();
				echo "<center><table border=2><tr><td><table border=2>";
				while($row = $stmt_1->fetch())
				{
				echo "<tr><td style = text-align:center><b>Title:";
				echo $row['title'];
				echo "</b></td></tr><tr><td style = 'text-align: center'>Release Year:";
				echo $row['releaseYear'];
				echo "</td></tr><tr><td style = 'text-align: center'>Length:";
				echo $row['length'];
				echo "</td></tr></table></td>";
				echo "<tr><td style = 'text-align: center'><table border=2 align=center ><tr><td style = 'text-align: center' bgcolor=red>Actors</td></tr></font>";
				while($row = $stmt->fetch())
				{
				echo "<tr><td style = 'text-align: center' bgcolor=red>";
				echo $row['fname'];
				echo $row['lname'];
				echo "</td></tr>";
				}
				echo "</table></td></tr></tr></table></center>";
				}
echo "<br><br>";
	echo "<p><b>LIST OF DIRECTORS:</b>";
	echo "<a href='list.php'>CLICK HERE!!</a></p>";
	echo "</body></html>";

}

catch(PDOexception $e)
	{
		echo "Connection failed:" . $e->getMessage();
	}



?>

