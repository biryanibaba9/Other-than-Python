<?php // starting the php.
  $pageTitle = "566 Group Project";
 $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
	echo '<html><title>Show All Assigned Tasks</title><body>';
  	echo '<h3><u>List Of All Assigned Tasks</u></h3>';
  	$sql1 = 'SELECT v.name as Volunteer, t.description as Task,at.start_time as StartTime,at.end_time as EndTime FROM assigned at,volunteer v, task t where v.volunteer_id=at.volunteer_id group by Volunteer';
  	$st = $conn->query($sql1); 
	echo '<table border=10 bordercolor = "#c80404">';
  echo '<tr>'; 
  echo '<th>Volunteer</th><th>Task Description</th><th>Start Time</th><th>End Time</th>';
  echo '</tr>';
  while($row = $st->fetch()) //Loop for getting the values from the table 'assignedTask'.
  {
   echo '<tr>';
    echo '<td>' .$row['Volunteer']. '</td>';
    echo '<td>' .$row['Task']. '</td>';
    echo '<td>' .$row['StartTime']. '</td>';
    echo '<td>' .$row['EndTime']. '</td>';
   echo '</tr>';
  }
echo '</table><br>'; // closing tag for table. 
echo '</body></html>'; 
?>
