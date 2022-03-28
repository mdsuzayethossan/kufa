<?php
require '../db.php';
session_start();
$submenu_id = $_POST['menu_id'];
$submenu_name = $_POST['submenu_name'];
$submenu_link = $_POST['submenu_link'];

$insert_menu = "INSERT INTO `submenus`(`menu_id`, `submenu_name`, `submenu_link`) VALUES ('$submenu_id','$submenu_name','$submenu_link')";
$insert_menu_result = mysqli_query($db_connect, $insert_menu );

$_SESSION['submenu_added'] = 'Submenu Added Successfully';
header('location:add_submenu.php');
 
?>