<html>

<head>
 <title>Volunteer</title>
</head>

<body bgcolor = "2C8A7D">
<h1 style = "color: #c91d2d"><b><center><font size = "20">Volunteers Page</font></center></b></h1>

 <?php    
  $pageTitle = "566 Group Project";
   $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
 
/*********** Displaying a table of list of volunteers. *********/
	echo '<div style = "padding: 40px">'; 
  echo '<center><h3 style = "color: #24248f;">1) Show all Volunteers</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "volunteer" id = "volunteer" action = "show.php" method="post">'; 
  echo '<div align = "center">';
  echo '<br>   <input type = "submit" value = "Show All Volunteers"> '; // Submit button.
  echo '</div>'; 
  echo '</form></center>';
  echo '</div>';
	
/************************************************** FORM-1 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">2) Insert A Volunteer</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "volunteer" id = "volunteer" action = "volunteer.php" method="post">'; 
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "name">Enter a Name: </label>';
  echo '<input type = "text" name="name" id="name"><br><br>'; // Text box for entering a volunteer.
  echo 'Enter Address: <input type = "text" name = "address" id = "address"><br>'; // Text box for entering address.
  echo '<br>Enter the Phone Number: <input type = "text" name = "phone_number" id = "phone_number"><br>'; // Text box for entering phone no.
  echo '<br>   <input type = "submit" value = "Insert Volunteer"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; 
  echo '</form></center>'; 
  echo '</div>'; 
 /************************************************** FORM-2 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">3) Update A Volunteer Details</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #114A16; width: 40%;" name = "volunteer" id = "volunteer" action = "volunteer.php" method="post">'; // Creating a form-2
  echo '<div align = "center">'; // start div2.
  echo '<br>Choose a Volunteer: ';
  echo '<select name = "update" id = "update"><option value = "">SELECT</option>';
  $sql='Select * from volunteer';
  foreach($conn->query($sql) as $row)
  {
   echo '<option value = ' . $row['volunteer_id'] . '>' . $row['name'].'</option>'; // Displaying the select values with the volunteer names.
  }
  echo '</select><br><br>';
  echo 'Enter Address: <input type = "text" name = "address" id = "address"><br>'; // Text box for address.
  echo '<br>Enter the Phone Number: <input type = "text" name = "phone_number" id = "phone_number"><br>'; // Text box for phone no.
  echo '<br>   <input type = "submit" value = "Update Volunteer"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
  /*********************************************** FORM-3 *************************************************/
 
  echo '<div style = "padding: 40px">'; //starting div1.
  echo '<center><h3 style = "color: #24248f;">4) Delete A Volunteer</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #660000; width: 40%;" name = "volunteer_id" id = "volunteer_id" action="volunteer.php" method="post">'; // Creating a form-3
  echo '<div align = "center">'; // starting div2.
  echo '<br><label for = "delete">Choose a volunteer for deletion: </label>';
  echo '<select name = "delete" id = "delete"><option value = ""> SELECT</option>';
 $sql1='select * from volunteer'; 
foreach($conn->query($sql1) as $row)
  {
   echo '<option value = ' . $row['volunteer_id'] . '>' . $row['name']. '</option>'; // Displaying the select values with the volunteer names.
  }
  echo '</select><br><br>';
  echo '<br><input type = "submit" value = "Delete"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; //reset button.
  echo '</div>'; // end of div2.
  echo '</form></center>'; // End of form-4.
  echo '</div>'; // End of div2.
  
  /********************************************** IF for INSERTING ************************************************************/
  $link = mysqli_connect("courses", "z1809837", "1993Nov27", "z1809837");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$name = mysqli_real_escape_string($link, $_POST['name']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$phone_number = mysqli_real_escape_string($link, $_POST['phone_number']);

$sql1 = "use z1809837";
$x = mysqli_query($link, $sql1);
$sql = "INSERT INTO volunteer (name, address, phone_number) VALUES ('$name', '$address', '$phone_number')";
if(mysqli_query($link, $sql)){
    echo ".";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);
 

   /********************************************** IF for UPDATING ************************************************************/
  
  //if
  if(!(empty($_POST["update"])))// Condition for checking if the submit button is clicked for updating a volunteer.
  {
   $volunteer_name_update = $_POST['update'];
   $address = $_POST['address'];
   $phone_number = $_POST['phone_number'];
   if(!(empty($address)))
   {
   $sql2 = "UPDATE volunteer SET address=? WHERE volunteer_id=?"; // Query for updating a volunteer .
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($address, $volunteer_name_update));
    echo '<p style = "color: green"><b><i>The volunteer address is updated in the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The volunteer address could not be updated.</center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
   }
   if(!(empty($phone_number)))
   {
   $sql3 = "UPDATE volunteer SET phone_number=? WHERE volunteer_id=?"; // Query for updating a volunteer .
   try
   {
    $st = $conn->prepare($sql3);
    $exe = $st->execute(array($phone_no, $volunteer_name_update));
    echo '<p style = "color: green"><b><i>The volunteer phone number is updated in the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The volunteer phone number could not be updated.</center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
   }
 }// end of if - 2.

 /****************************************** IF for DELETE *******************************************************/
 
//if
 if(!(empty($_POST["delete"]))) // Condition for deletion.
 {
  $volunteer = $_POST["delete"];
//  $sql3 = "DELETE FROM assigned where volunteer_id = ?"; // deleting a volunteer from assigned.
  $sql4 = "DELETE FROM volunteer where volunteer_id = ?"; // deleting a volunteer from Volunteer.
  try
  {
 //  $st1 = $conn->prepare($sql3);
   $st2 = $conn->prepare($sql4);
 //  $exe1 = $st1->execute(array($volunteer));
   $exe2 = $st2->execute(array($volunteer));
   echo '<p style = "color: red"><b><i>The Volunteer was Deleted!</i></b></p>'; // // Message if query was successful
  }
  catch(PDOException $e)
  {
   echo '<b><center>Sorry! The volunteer could not be deleted.</center></b><br><br>';
   echo '<b>Error! </b>' .$e->getMessage(); // Error message.
  }
 }

 
 ?>
</body>
</html>
