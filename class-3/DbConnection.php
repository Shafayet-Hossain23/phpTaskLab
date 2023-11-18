<?php

$link = mysqli_connect("localhost", "root", "", "phpstudent");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$std_roll = mysqli_real_escape_string($link, $_REQUEST['std_roll']);
$std_class = mysqli_real_escape_string($link, $_REQUEST['std_class']);

 

$sql = "INSERT INTO student_info (name, std_roll, std_class) VALUES ('$name', '$std_roll', '$std_class')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>