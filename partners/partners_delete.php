<?php
session_start();
require '../db.php';

$id = $_GET['id'];
//image delete from folder start here
$select_img = "SELECT * FROM partners WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from ='../uploads/partners/'.$after_assoc['logo'];
unlink($delete_from);
//image delete from folder end here

$delete_users = "DELETE FROM partners WHERE id=$id"; 
$delete_users_result = mysqli_query ($db_connect, $delete_users); 
$_SESSION['delete_partners'] = "User Deleted Successfully";
header('location:trash_banner.php');
?>