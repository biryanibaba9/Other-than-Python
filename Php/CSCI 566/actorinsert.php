<?php

/*
 Assignment-10  Due:11/11/2016
 Name: Shreyas Javvadhi
 Z-ID: Z1809837
*/


$link = mysqli_connect("courses", "z1809837", "1993Nov27", "z1809837");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$First_name = mysqli_real_escape_string($link, $_POST['fname']);
$Last_name = mysqli_real_escape_string($link, $_POST['lname']);

$sql1 = "use z1809837";
$x = mysqli_query($link, $sql1);
$sql = "INSERT INTO actor (fname,lname) VALUES ('$First_name', '$Last_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>


