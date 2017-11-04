<?php // starting the php.
  $pageTitle = "566 Group Project";
 $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
echo '<html><title>Show All Packages</title><body>';
  echo '<h3><u>List Of All Packages</u></h3>'; 
  $sql1 = 'SELECT * FROM package';
  $stmt = $conn->query($sql1); 
echo '<table border = 10 bordercolor = "#c80404">'; // creating a table.
  echo '<tr>';
  echo '<th>Package ID</th><th>Weight</th><th>Date</th>';
  echo '</tr>';
  while($row = $stmt->fetch()) //Loop for getting the values from the table 'Package'.
  {
   echo '<tr>';
    echo '<td>' .$row['package_id']. '</td>';
    echo '<td>' .$row['total_weight']. '</td>';
	echo '<td>' .$row['date_of_packing']. '</td>';
   echo '</tr>';
  }
  echo '</table><br>'; // closing tag for table.
echo '</body></html>';
?>

