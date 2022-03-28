<?php
require '../db.php';
session_start();
$description = $_POST['description'];

$insert_about = "INSERT INTO `about`(`description`) VALUES ('$description')";
$insert_about_result = mysqli_query($db_connect, $insert_about);
$_SESSION['insert_about'] = 'About Added Successfully';
header('location:add_about.php');
?>