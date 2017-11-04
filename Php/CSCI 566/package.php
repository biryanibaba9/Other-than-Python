<html>
<head>
<title>Package</title>
</head>

<body bgcolor = "2C8A7D">
<h1 style = "color: #c91d1d"><b><center><font size = "20">Package Page</font></center></b></h1>

 <?php    // starting the php.
  $pageTitle = "Project";
  $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);

/*********** Displaying a table of list of Package. *********/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Show all Packages</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "package" id = "package" action = "showp.php" method="post">';
  echo '<div align = "center">';
  echo '<br>   <input type = "submit" value = "Show All Packages"> '; // Submit button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
 /************************************************** FORM-1 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">2) Insert A Package</h3></center>';
  echo '<center><form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "package1" id = "package1" action = "package.php" method = "post">'; 
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "weight">Enter Weight of Package: </label>';
  echo '<input type = "number" name = "total_weight" id = "total_weight" min = "1" max = "10"><br><br>';
  echo '<br><label for = "code">Choose a task: </label>';
  echo '<select name = "code" id = "code"><option value = "">SELECT</option>';
  $sql2='Select * from task';
  foreach($conn->query($sql2) as $row)
  {
   echo '<option value = ' . $row['code'] . '>' .$row['code']. ') ' .$row['description'].' - '.$row['type']. '</option>'; 
  }
  echo '</select><br><br>';
  echo 'Enter Date: <input type = "date" name = "date_of_packing" id = "date_of_packing" placeholder = "yyyy-mm-dd"><br>';
  echo '<br>   <input type = "submit" value = "Insert Package"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
  
    /*********************************************** FORM-2 *************************************************/
 
  echo '<div style = "padding: 40px">'; //starting div1.
  echo '<center><h3 style = "color: #24248f;">3) Delete A Package</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #660000; width: 40%;" name = "package2" id = "package2" action="package.php" method="post">'; 
  echo '<div align = "center">'; // starting div2.
  echo '<br><label for = "delete">Choose a package for deletion: </label>';
  echo '<select name = "delete" id = "delete"><option value = ""> SELECT</option>';
  $sql1 = 'select * from package';
  foreach($conn->query($sql1) as $row)
  {
   echo '<option value = ' . $row['package_id'] . '>' . $row['package_id']. '</option>'; 
  }
  echo '</select><br><br>';
  echo '<br><input type = "submit" value = "Delete"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; //reset button.
  echo '</div>'; // end of div2.
  echo '</form></center>'; 
  echo '</div>'; // End of div2.
  
  /********************************************** IF for INSERTING ************************************************************/
  
  //if - 2
  
if(!(empty($_POST['total_weight']) || empty($_POST['code']) || empty($_POST['date_of_packing'])))// Condition for checking if the submit button is clicked for inserting a package.
  {
   $weight = $_POST['total_weight'];
   $task_code = $_POST['code'];
   $date = $_POST['date_of_packing'];
   $sql2 = "INSERT INTO package(total_weight,date_of_packing) VALUES ('$weight','$date')"; // Query for inserting a package.
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($weight,$task_code, $date));
    echo '<p style = "color: green"><b><i>The package is added to the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The package could not be added. </center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
 }// end of if - 2.
 
 /****************************************** IF for DELETE *******************************************************/
 if(!(empty($_POST["delete"]))) // Condition for deletion.
 {
  $package = $_POST["delete"];
  $sql4 = "DELETE FROM package where package_id = ?"; // deleting a package from Package.
  try
  {
   $st2 = $conn->prepare($sql4);
   $exe2 = $st2->execute(array($package));
   echo '<p style = "color: red"><b><i>The package was Deleted!</i></b></p>'; // // Message if query was successful
  }
  catch(PDOException $e)
  {
   echo '<b><center>Sorry! The package could not be deleted.</center></b><br><br>';
   echo '<b>Error! </b>' .$e->getMessage(); // Error message.
  }
 }  
  
?>
</body>
</html>
