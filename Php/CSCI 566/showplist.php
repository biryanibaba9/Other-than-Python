<?php // starting the php.
  $pageTitle = "566 Group Project";
 $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
echo '<html><title>Show All Packing List</title><body>';
  echo '<h3><u>List Of All Packing List</u></h3>'; // Listing all the packing list.
  $sql1 = 'SELECT * FROM packing_id';
  $stmt = $conn->query($sql1);
 echo '<table border = 10 bordercolor = "#c80404">'; // creating a table.
  echo '<tr>';
  echo '<th>ID</th><th>Name</th><th>Description</th>';
  echo '</tr>';
  while($row = $stmt->fetch()) //Loop for getting the values from the table 'PackingList'.
  {
   echo '<tr>';
    echo '<td>' .$row['id']. '</td>';
    echo '<td>' .$row['name']. '</td>';
    echo '<td>' .$row['description']. '</td>';
   echo '</tr>';
  }
 echo '</table><br>'; // closing tag for table.
echo '</body></html>';
?>

