<?php
require '../db.php';
session_start();
$description = $_POST['description'];
$years = $_POST['years'];
$only_years = $_POST['only_years'];
$only_experience = $_POST['only_experience'];

$insert_times = "INSERT INTO `times`(`description`, `years`, `only_years`, `only_experience`) VALUES ('$description','$years','$only_years','$only_experience')";
$insert_times_result = mysqli_query($db_connect, $insert_times);

$_SESSION['times_added'] = 'Times Added Successfully';
header('location:add_times.php');
 


 
?>