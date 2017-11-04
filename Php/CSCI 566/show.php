<?php // starting the php.
  $pageTitle = "566 Group Project";
  //require('conn.php'); //including conn.php file.
 $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
echo '<html><title>Show All Volunteers</title><body>';
  echo '<h3><u>List Of All Volunteers</u></h3>'; // Listing all the volunteers.
  $sql1 = 'SELECT * FROM volunteer';
  $stmt = $conn->query($sql1); /*********** Displaying a table of list of volunteers. *********/ 
  echo '<table border = 10 bordercolor = "#c80404">'; // creating a table.
  echo '<tr>';
  echo '<th>ID</th><th>Name</th><th>Address</th><th>Phone Number</th>';
  echo '</tr>';
  while($row = $stmt->fetch()) //Loop for getting the values from the table 'Volunteer'.
  {
   echo '<tr>';
    echo '<td>' .$row['volunteer_id']. '</td>';
    echo '<td>' .$row['name']. '</td>';
    echo '<td>' .$row['address']. '</td>';
    echo '<td>' .$row['phone_number']. '</td>';
   echo '</tr>';
  }
  echo '</table><br>'; // closing tag for table.
echo '</body></html>';
?>
