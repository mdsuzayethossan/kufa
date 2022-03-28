<?php
require '../db.php';
session_start();
$icon_name = $_POST['icon_name'];
$icon_class = $_POST['icon_class'];
$social_link = $_POST['social_link'];

$insert_social = "INSERT INTO `social`(`icon_name`, `icon_class`, `social_link`) VALUES ('$icon_name','$icon_class','$social_link')";
$insert_social_result = mysqli_query($db_connect, $insert_social );

$_SESSION['social_added'] = 'Social Added Successfully';
header('location:add_social.php');
 
?>