<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$description = $_POST['description'];
$select_about = "UPDATE `about` SET `description`='$description' WHERE id=$id";
$select_about_result = mysqli_query($db_connect, $select_about);

$_SESSION['update_about'] = "About Update Successfuly";
header('location:about_edit.php?id='.$id);


?>