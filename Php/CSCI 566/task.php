<html>
<head>
<title>Task</title>
</head>

<body bgcolor = "2C8A7D">
<h1 style = "color: #c91d1d"><b><center><font size = "20">Task Page</font></center></b></h1>

 <?php    // starting the php.
  $pageTitle = "Project";
  $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);

/*********** Displaying a table of list of tasks. *********/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Show all Tasks</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "task" id = "task" action = "showtask.php" method="post">';
  echo '<div align = "center">';
  echo '<br>   <input type = "submit" value = "Show All Tasks"> '; // Submit button.
  echo '</div>'; //end div2.
  echo '</form></center>';
  echo '</div>'; // end div1.
/************************************************** FORM-1 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">2) Insert A Task</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 60%;" name = "task1" id = "task1" action = "task.php" method="post">';
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "title">Enter Task Description: </label>';
  echo '<input type = "text" name = "description" id = "description"><br><br>'; // Text box for entering a task description.
  echo 'Enter Task Type: <input type = "text" name = "type" id = "type"><br>'; // Text box for entering task type.
  echo '<br>Enter the Task Status: <input type = "text" name = "status" id = "status"><br>'; // Text box for task status.
  echo '<br>   <input type = "submit" value = "Insert Task"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>';
  echo '</div>'; // end div1.
  
/************************************************** FORM-2 *************************************************************/

  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">3) Update A Task</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 50%;" name = "task3" id = "task3" action = "task.php" method = "post">';
  echo '<div align = "center">'; // start div2.
  echo '<br><label for = "pl">Enter a Task description to update: </label>';
  echo '<select name = "update" id = "update"><option value = "">SELECT</option>';
  $sql='Select * from task';
  foreach($conn->query($sql) as $row)
  {
   echo '<option value = ' . $row['code'] . '>' . $row['description'].'</option>';
  }
  echo '</select><br><br>';
  echo 'Enter a Task Status: <input type = "text" name = "status" id = "status"><br>';
  echo '<br>   <input type = "submit" value = "Update Task"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-2
  echo '</div>'; // end div2.

/*********************************************** FORM-3 *************************************************/
 
  echo '<div style = "padding: 40px">'; //starting div1.
  echo '<center><h3 style = "color: #24248f;">4) Delete A Task</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #660000; width: 40%;" name = "task2" id = "task2" action="task.php" method="post">';
  echo '<div align = "center">'; // starting div2.
  echo '<br><label for = "delete">Choose a task for deletion: </label>';
  echo '<select name = "delete" id = "delete"><option value = ""> SELECT</option>';
  foreach($conn->query($sql1) as $row)
  {
   echo '<option value = ' . $row['code'] . '>' . $row['description']. '</option>'; // Displaying the select values with the task description.
  }
  echo '</select><br><br>';
  echo '<br><input type = "submit" value = "Delete"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; //reset button.
  echo '</div>'; // end of div2.
  echo '</form></center>'; // End of form-4.
  echo '</div>'; // End of div2.
  
 /********************************************** IF for INSERTING ************************************************************/
  
 if(!(empty($_POST["description"]) || empty($_POST["type"]) || empty($_POST["status"])))// Condition for checking if the submit button is clicked for inserting a task.
  {
   $task_description = $_POST['description'];
   $task_code = $_POST['type'];
   $task_status = $_POST['status'];
   $sql2 = "INSERT INTO task(description, type, status) VALUES ('$task_description', '$task_type', '$task_status')";
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($task_description,$task_type, $task_status));
    echo '<p style = "color: blue"><b><i>The task - ' .$task_description. ' is added to the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The task - ' .$task_description. ' could not be added.</center></b><br><br>';
    echo '<b>Error! </b>' .$e->getMessage(); // Error message.
   }
 } 
/********************************************** IF for UPDATING ************************************************************/
  
   if(!(empty($_POST["update"])))// Condition for checking if the submit button is clicked for updating a task.
  {
   $description = $_POST['update'];
   $status = $_POST['status'];
   if(!(empty($status)))
   {
   $sql2 = "UPDATE task SET status=? WHERE code=?"; // Query for updating a task .
   try
   {
    $st = $conn->prepare($sql2);
    $exe = $st->execute(array($status, $description));
    echo '<p style = "color: blue"><b><i>The task status is updated in the database.</i></b></p>'; // Message if query was successful.
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The task status could not be updated.</center></b><br><br>';
    echo '<b>Error! <b>' .$e->getMessage(); // Error message.
   }
   }
 }

 /****************************************** IF for DELETE *******************************************************/
 
//if
 if(!(empty($_POST["delete"]))) // Condition for deletion.
 {
  $task = $_POST["delete"];
    $sql3 = "DELETE FROM assigned where code = ?"; // deleting a task from assigned.
    $sql4 = "DELETE FROM task where code = ?"; // deleting a task from Task.
  try
  {
      $st2 = $conn->prepare($sql3);
      $st4 = $conn->prepare($sql4);
      $exe2 = $st2->execute(array($task));
      $exe4 = $st4->execute(array($task));
   echo '<p style = "color: blue"><b><i>The task was Deleted!</i></b></p>'; // // Message if query was successful
  }
  catch(PDOException $e)
  {
   echo '<b><center>Sorry! The task could not be deleted.</center></b><br><br>';
   echo '<b>Error! </b>' .$e->getMessage(); // Error message.
  }
 }// end of if.
  
?>
</body>
</html>