<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$update_banner = "UPDATE banners SET status=1 WHERE id=$id";
$update_banner_result = mysqli_query($db_connect, $update_banner);
$_SESSION['soft_delete'] = "User Soft deleted Succesfully";
header('location:banners.php');
?>