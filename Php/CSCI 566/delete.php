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

$a_id = mysqli_real_escape_string($link, $_POST['aid']);

$sql1 = "use z1809837";
$x = mysqli_query($link, $sql1);
$sql = "DELETE FROM actor where aid='$a_id'";
$sql2 = "DELETE FROM performs_in where aid='$a_id'";
if(mysqli_query($link, $sql2) && mysqli_query($link, $sql)){
    echo "Records deleted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>

