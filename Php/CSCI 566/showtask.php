<?php // starting the php.
  $pageTitle = "566 Group Project";
  $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
echo '<html><title>Show All Tasks</title><body>';
  echo '<h3><u>List Of All Tasks</u></h3>'; 
  $sql1 = 'SELECT * FROM task';
  $stmt = $conn->query($sql1); 
  echo '<table border = 10 bordercolor = "#c80404">'; // creating a table.
  echo '<tr>';
  echo '<th>Code</th><th>Description</th><th>Type</th><th>Status</th>';
  echo '</tr>';
  while($row = $stmt->fetch()) 
  {
    echo '<tr>'; 
    echo '<td>' .$row['code']. '</td>';
    echo '<td>' .$row['description']. '</td>';
    echo '<td>' .$row['type']. '</td>';
    echo '<td>' .$row['status']. '</td>';
   echo '</tr>';
  }
  echo '</table><br>';
echo '</body></html>';
?>
