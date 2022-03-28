<?php
require '../db.php';
session_start();
$company_name = $_POST['company_name'];
$duration = $_POST['duration'];
$designation = $_POST['designation'];
$details = $_POST['details'];

$insert_experience = "INSERT INTO `experiences`(`company_name`, `duration`, `designation`, `details`) VALUES ('$company_name','$duration','$designation','$details')";
$insert_experience_result = mysqli_query($db_connect, $insert_experience);

$_SESSION['experience_added'] = 'Experience Added Successfully';
header('location:add_experience.php');
 
?>