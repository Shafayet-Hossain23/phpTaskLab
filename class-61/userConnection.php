<?php

$link = mysqli_connect("localhost", "root", "", "phplogin");


if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$user_name = mysqli_real_escape_string($link, $_REQUEST['user_name']);
$user_email = mysqli_real_escape_string($link, $_REQUEST['user_email']);
$user_pass = mysqli_real_escape_string($link, $_REQUEST['user_pass']);



$sql = "INSERT INTO user (user_name, user_email, user_pass) VALUES ('$user_name', '$user_email', '$user_pass')";
if (mysqli_query($link, $sql)) {
    echo "Records added successfully.";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>