<html>
<head>
<title>Assigned Tasks</title>
</head>

<body bgcolor = "2C8A7D">
<h1 style = "color: #c91d1d"><b><center><font size = "20">Assigned Task Page</font></center></b></h1>

 <?php    // starting the php.
  $pageTitle = "Project";
  $pageTitle = "Project";
   $dsn = "mysql:host=courses;dbname=z1809837";
        $username = "z1809837";
        $password = "1993Nov27";
        $conn= new PDO( $dsn , $username, $password);

/*********** Displaying a table of list of Assigned Tasks *********/

  
 echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">1) Show all Assigned Tasks</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "assigned" id = "assigned" action = "showassigned.php" method="post">'; // Creating a form-1
  echo '<div align = "center">';
  echo '<br>   <input type = "submit" value = "Show All Assigned Tasks"> '; // Submit button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  
      /************************************************** FORM-1 *************************************************************/

  $sql1='Select * from volunteer';
  $sql2='Select * from task';
  echo '<div style = "padding: 40px">'; // start div1.
  echo '<center><h3 style = "color: #24248f;">2) Assign A Task</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #4d004d; width: 40%;" name = "assignedtask1" id = "assignedtask1" action = "assignedtask.php" method="post">'; // Creating a form-1
  echo '<div align = "center">'; // start div2.
  echo '<br>Select Volunteer: ';
  echo '<select name = "volunteer_id" id = "volunteer_id"><option value = "">SELECT</option>';
  foreach($conn->query($sql1) as $row)
  {
   echo '<option value = ' . $row['volunteer_id'] . '>' . $row['name']. '</option>'; // Displaying the select values with the Volunteer names.
  }
  echo '</select><br><br>';
  echo '<br> Select Task: ';
  echo '<select name = "task_code" id = "task_code"><option value = "">SELECT</option>';
  foreach($conn->query($sql2) as $row)
  {
   echo '<option value = ' . $row['code'] . '>' . $row['description'].' - '.$row['task_type']. '</option>'; // Displaying the select values with the task description.
  }
  echo '</select><br><br>';
  echo 'Enter the Start Time: ';
  echo '<input type = "time" name = "start_time" id = "start_time" placeholder = "hh:mm:ss"><br><br>'; // Text box for entering the start time.
  echo 'Enter the End Time: <input type = "time" name = "end_time" id = "end_time" placeholder="hh:mm:ss"><br>'; // Text box for entering end time.
  echo '<br>   <input type = "submit" value = "Assign Task"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; // reset button.
  echo '</div>'; //end div2.
  echo '</form></center>'; // End of form-1
  echo '</div>'; // end div1.
  echo '<br>';

  /*********************************************** FORM-3 *************************************************/
 
  echo '<div style = "padding: 40px">'; //starting div1.
  echo '<center><h3 style = "color: #24248f;">3) Delete Assigned Task</h3>';
  echo '<form style = "background-color: #00FF00; border: 3px solid #660000; width: 40%;" name = "item2" id = "item2" action="assignedtask.php" method="post">'; // Creating a form-3
  echo '<div align = "center">'; // starting div2.
  echo '<br><label for = "delete">Choose a task for deletion: </label>';
  echo '<select name = "delete" id = "delete"><option value = ""> SELECT</option>';
  foreach($conn->query($sql2) as $row)
  {
   echo '<option value = ' . $row['code'] . '>' .$row[description]. '</option>'; // Displaying the select values with the task IDs.
  }
  echo '</select><br><br>';
  echo '<br><input type = "submit" value = "Delete"> '; // Submit button.
  echo '<input type = "Reset" value = "Clear"><br><br>'; //reset button.
  echo '</div>'; // end of div2.
  echo '</form></center>'; // End of form-4.
  echo '</div>'; // End of div2.
/************************************************************* IF for assigning task ********************************************************/
//if.
 if(!(empty($_POST["volunteer_id"]) || empty($_POST["code"]) || empty($_POST["start_time"]) || empty($_POST["end_time"])))// Condition for checking if the submit button is clicked for connecting the volunteer and task.
  {
   $volunteer_id = $_POST['volunteer_id'];
   $task_code = $_POST['code'];
   $start_time = $_POST['start_time'];
   $end_time = $_POST['end_time'];
   $sql3 = "INSERT INTO assigned (code, start_time, end_time) VALUES ($task_code,$start_time,$end_time)"; // Query for connecting an volunteer and task.
   try
   {
    $st = $conn->prepare($sql3);
    $exe = $st->execute(array($volunteer_id,$task_code,$start_time,$end_time));
    echo '<p style = "color: green"><b><i>The task is assigned to the volunteer successfully.</i></b></p>'; // Message if query was successful
   }
   catch(PDOException $e)
   {
    echo '<b><center>Sorry! The task could not be assigned to the volunteer.</center></b><br><br>';
    echo '<b>Error! </b>' .$e->getMessage(); // Error message.
   }
 }// end of if.

/******************************************************* IF fro DELETION ************************************************************/

 if(!(empty($_POST["delete"]))) // Condition for deletion.
 {
  $task = $_POST["delete"];
  $sql3 = "DELETE FROM assigned where code = ?"; // deleting a task from assignedTask.
  try
  {
   $st1 = $conn->prepare($sql3);
   $exe1 = $st1->execute(array($task));
   echo '<p style = "color: red"><b><i>The task is Deleted!</i></b></p>'; // // Message if query was successful
  }
  catch(PDOException $e)
  {
   echo '<b><center>Sorry! The task could not be deleted.</center></b><br><br>';
   echo '<b>Error! </b>' .$e->getMessage(); // Error message.
  }
 }// end of if - 4.  

  ?>
  </body>
  </html>
