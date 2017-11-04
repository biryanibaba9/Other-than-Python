<?php // starting the php.
  $pageTitle = "566 Group Project";
 $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
echo '<html><title>Show All Items</title><body>';
  echo '<h3><u>List Of All Items</u></h3>';
  $sql1 = 'SELECT * FROM item';
  $stmt = $conn->query($sql1);
echo '<table border = 10 bordercolor = "#c80404">'; // creating a table.
  echo '<tr>';
  echo '<th>Item ID</th><th>Value</th><th>Quantity</th><th>Description</th>';
  echo '</tr>';
  while($row = $stmt->fetch()) //Loop for getting the values from the table 'Item'.
  {
   echo '<tr>';
    echo '<td>' .$row['item_id']. '</td>';
    echo '<td>' .$row['value']. '</td>';
        echo '<td>' .$row['quantity']. '</td>';
echo '<td>'.$row['description'].'</td>';
   echo '</tr>';
  }
  echo '</table><br>'; // closing tag for table.
echo '</body></html>';
?>


