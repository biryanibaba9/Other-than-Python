<html>
<head>
 <title>Packing List</title>
</head>

<body bgcolor = "2C8A7D">
<h1 style = "color: #c91d1d"><b><center><font size = "20">Packing List Page</font></center></b></h1>

 <?php    // starting the php.
  $pageTitle = "Project";
  $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);

/*********** Displaying a table of list of PackingList. *********/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Show all Packing List</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "packingList" id = "packingList" action = "showplist.php" method="post">'; // Creating a form-1
  echo '<div align = "center">';
  echo '<br>   <input type = "submit" value = "Show All Lists"> '; // Submit button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
 /************************************************** FORM-1 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Insert A Packing List</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 50%;" name = "packinglist" id = "packinglist" action = "packinglist.php" method = "post">'; // Creating a form-1
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "pl">Enter Packing List Description: </label>';
  echo '<input type = "text" name = "description" id = "description"><br><br>'; // Text box for entering a description.
  echo 'Enter Name of Packing List: <input type = "text" name = "name" id = "name"><br>'; // Text box for entering name.
  echo '<br>   <input type = "submit" value = "Insert Packing List"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
        /************************************************** FORM-2 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">2) Update A Packing List</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 50%;" name = "packinglist" id = "packinglist" action = "packinglist.php" method = "post">'; // Creating a form-2
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "pl">Enter name of Packing List to update: </label>';
  echo '<select name = "update" id = "update"><option value = "">SELECT</option>';
  $sql='Select * from packing_id';
  foreach($conn->query($sql) as $row)
  {
   echo '<option value = ' . $row['id'] . '>' . $row['name'].'</option>'; // Displaying the select values with the Packing List names.
  }
  echo '</select><br><br>';
  echo 'Enter a Packing List Description: <input type = "text" name = "description" id = "description"><br>';
  echo '<br>   <input type = "submit" value = "Update Packing List"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-2
  echo '</div>'; // end div2.

        /*********************************************** FORM-3 *************************************************/
 
  echo '<div style = "padding: 40px">'; //starting div1.
  echo '<center><h3 style = "color: #24248f;">3) Delete A Packing List</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #660000; width: 60%;" name = "packingList" id = "packingList" action="packinglist.php" method = "post">'; // Creating a form-2
  echo '<div align = "center">'; // starting div2.
  echo '<br><label for = "delete">Choose a packing list for deletion: </label>';
  echo '<select name = "delete" id = "delete"><option value = ""> SELECT</option>';
  $sql1='Select * from packing_id';
  foreach($conn->query($sql1) as $row)
  {
   echo '<option value = ' . $row['id'] . '>' . $row['name']. '</option>'; // Displaying the select values with the packing list names.
  }
  echo '</select><br><br>';
  echo '<br><input type = "submit" value = "Delete"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; //reset button.
  echo '</div>'; // end of div3.
  echo '</form></center>'; // End of form-3.
  echo '</div>'; // End of div3.
  
  
    /********************************************** IF for INSERTING ************************************************************/
  
  //if - 2
  if(!(empty($_POST["description"]) || empty($_POST["name"])))
  {
   $pl_description = $_POST['description'];
   $pl_name = $_POST['name'];
   $sql2 = "INSERT INTO packing_id(description, name) VALUES ('$pl_description', '$pl_name')"; // 
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($pl_description,$pl_name));
    echo '<p style = "color: green"><b><i>The packing list ' .$pl_name. ' is added to the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The packing list ' .$pl_name. ' could not be added. </center></b><br><br>';
    echo '<b>Error! </b>' .$e->getMessage(); // Error message.
   }
 }// end of if - 2.
 
   /********************************************** IF for UPDATING ************************************************************/
  
  //if
  if(!(empty($_POST["update"])))
  {
   $name = $_POST['update'];
   $description = $_POST['description'];
   if(!(empty($description)))
   {
   $sql2 = "UPDATE packing_id SET description=? WHERE id=?"; 
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($description, $name));
    echo '<p style = "color: green"><b><i>The packing list description is updated in the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The packing list description could not be updated.</center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
   }
 }
 /****************************************** IF for DELETE *******************************************************/
 if(!(empty($_POST["delete"]))) // Condition for deletion.
 {
  $packinglist = $_POST["delete"];
    $sql4 = "DELETE FROM packing_id where id = ?"; // deleting a packing list from PackingList
  
  try
  {
   
   $st5 = $conn->prepare($sql4);
   
   $exe5 = $st5->execute(array($packinglist));
   echo '<p style = "color: red"><b><i>The packing list was Deleted!</i></b></p>'; // // Message if query was successful
  }
  catch(PDOException $e)
  {
   echo '<b><center>Sorry! The packing list could not be deleted.</center></b><br><br>';
   echo '<b>Error! </b>' .$e->getMessage(); // Error message.
  }
 }// end of if - 4.
  
  ?>
  </body>
  </html>