<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$logo_class = $_POST['logo_class'];
$service_name = $_POST['service_name'];
$description = $_POST['description'];


$update_service = "UPDATE `services` SET `logo_class`='$logo_class',`service_name`='$service_name',`description`='$description' WHERE id=$id";
$update_service_result = mysqli_query($db_connect, $update_service);

$_SESSION['update_service'] = 'Service Updated Successfully';
header('location:service.php');
?>