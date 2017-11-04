 <html>
<head>
 <title>Items</title>
</head>

<body bgcolor = "2C8A7D">
<h1 style = "color: #c91d1d"><b><center><font size = "20">Items Page</font></center></b></h1>

 <?php    // starting the php.
  $pageTitle = "Project";
   $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);
 
 /*********** Displaying a table of list of Items. *********/

 echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Show all Packages</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "item" id = "item" action = "showitems.php" method="post">'; // Creating a form-1
  echo '<div align = "center">';
  echo '<br>   <input type = "submit" value = "Show All Items"> '; // Submit button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
      /************************************************** FORM-1 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Insert An Item</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 60%;" name = "item1" id = "item1" action = "item.php" method="post">'; // Creating a form-1
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "title">Enter Item Description: </label>';
  echo '<input type = "text" name="description" id="description"><br><br>'; // Text box for entering an item description.
  echo 'Enter Item Value: <input type = "text" name = "value" id = "value"><br><br>'; // Text box for entering item value.
  echo 'Enter Quantity: <input type = "text" name = "quantity" id = "quantity"><br>';
  echo '<br>   <input type = "submit" value = "Insert Item"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
  echo '<br>';
  
            /************************************************** FORM-2 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">2) Update An Item</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #114A16; width: 40%;" name = "item" id = "item" action = "item.php" method="post">'; // Creating a form-2
  echo '<div align = "center">'; // start div2.
  echo '<br>Choose an item to update: ';
  echo '<select name = "update" id = "update"><option value = "">SELECT</option>';
  $sql='Select * from item';
  foreach($conn->query($sql) as $row)
  {
   echo '<option value = ' . $row['item_id'] . '>' . $row['description'].'</option>'; // Displaying the select values with the volunteer names.
  }
  echo '</select><br><br>';
  echo 'Enter Item value: <input type = "text" name = "value" id = "value"><br>'; // Text box for address.
  echo '<br>Enter the Item quantity: <input type = "text" name = "quantity" id = "quantity"><br>'; // Text box for phone no.
  echo '<br>   <input type = "submit" value = "Update item"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.

   /*********************************************** FORM-3 *************************************************/
 
  echo '<div style = "padding: 40px">'; //starting div1.
  echo '<center><h3 style = "color: #24248f;">3) Delete An Item</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #660000; width: 40%;" name = "item2" id = "item2" action="item.php" method="post">'; // Creating a form-3
  echo '<div align = "center">'; // starting div2.
  echo '<br><label for = "delete">Choose an item for deletion: </label>';
  echo '<select name = "delete" id = "delete"><option value = ""> SELECT</option>';
  $sql9 = "select item_id,description from item";
  foreach($conn->query($sql9) as $row)
  {
   echo '<option value = ' . $row['item_id'] . '>' . $row['description']. '</option>'; // Displaying the select values with the item IDs.
  }
  echo '</select><br><br>';
  echo '<br><input type = "submit" value = "Delete"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; //reset button.
  echo '</div>'; // end of div2.
  echo '</form></center>'; // End of form-4.
  echo '</div>'; // End of div2.
  
  /********************************************** IF for INSERTING ************************************************************/
  
  //if - 2
  if(!(empty($_POST["description"]) || empty($_POST["value"]) || empty($_POST["quantity"])))
  {
   $item_description = $_POST['description'];
   $item_value = $_POST['value'];
   $quantity = $_POST['quantity'];
   $sql2 = "INSERT INTO item(value, quantity, description) VALUES ('$item_value', '$quantity','$item_description')"; // Query for inserting an item.
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($item_description,$item_value, $quantity));
    echo '<p style = "color: green"><b><i>The item - ' .$item_description. ' is added to the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The item - ' .$item_description. ' could not be added.</center></b><br><br>';
    echo '<b>Error! </b>' .$e->getMessage(); // Error message.
   }
 }// end of if - 2.

    /********************************************** IF for UPDATING ************************************************************/
  
  //if
  if(!(empty($_POST["update"])))// 
  {
   $description = $_POST['update'];
   $value = $_POST['value'];
   $quantity = $_POST['quantity'];
   if(!(empty($value)))
   {
   $sql2 = "UPDATE item SET value=? WHERE item_id=?"; 
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($value, $description));
    echo '<p style = "color: green"><b><i>The item value is updated in the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The item value could not be updated.</center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
   }
   if(!(empty($quantity)))
   {
   $sql3 = "UPDATE item SET quantity=? WHERE item_id=?"; 
   try
   {
    $st = $conn->prepare($sql3);
    $exe = $st->execute(array($quantity, $description));
    echo '<p style = "color: green"><b><i>The item quantity is updated in the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The item quantity could not be updated.</center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
   }
 }

 /****************************************** IF for DELETE *******************************************************/
 if(!(empty($_POST["delete"]))) // Condition for deletion.
 {
  $item = $_POST["delete"];
    $sql4 = "DELETE FROM item where item_id = ?"; // deleting an item from Items.
  try
  {
      $st2 = $conn->prepare($sql4);
      $exe2 = $st2->execute(array($item));
   echo '<p style = "color: red"><b><i>The item was Deleted!</i></b></p>'; // // Message if query was successful
  }
  catch(PDOException $e)
  {
   echo '<b><center>Sorry! The item could not be deleted.</center></b><br><br>';
   echo '<b>Error! </b>' .$e->getMessage(); // Error message.
  }
 } 
?>
</body>
</html>

