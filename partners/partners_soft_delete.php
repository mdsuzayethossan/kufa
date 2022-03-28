<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$update_partners = "UPDATE partners SET status=0 WHERE id=$id";
$update_partners_result = mysqli_query($db_connect, $update_partners);
$_SESSION['soft_delete'] = "Partners Soft deleted Succesfully";
header('location:partners.php');
?>