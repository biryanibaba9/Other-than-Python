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

$title_name = mysqli_real_escape_string($link, $_POST['titlename']);
$release = mysqli_real_escape_string($link, $_POST['release']);
$length = mysqli_real_escape_string($link, $_POST['length']);

$sql1 = "use z1809837";
$x = mysqli_query($link, $sql1);
$sql = "INSERT INTO movie (title, releaseYear, length) VALUES ('$title_name', '$release', '$length')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>
