<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$icon_name = $_POST['icon_name'];
$icon_class = $_POST['icon_class'];
$social_link = $_POST['social_link'];
$update_social = "UPDATE `social` SET `icon_name`='$icon_name',`icon_class`='$icon_class',`social_link`='$social_link' WHERE id=$id";
$update_social_result = mysqli_query($db_connect, $update_social);

$_SESSION['update_social'] = 'Social Updated Successfully';
header('location:social.php');
?>