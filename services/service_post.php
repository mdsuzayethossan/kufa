<?php
require '../db.php';
session_start();
$logo_class = $_POST['logo_class'];
$service_name = $_POST['service_name'];
$description = $_POST['description'];

$select_service = "INSERT INTO `services`(`logo_class`, `service_name`, `description`) VALUES ('$logo_class','$service_name','$description')";
$select_service_result = mysqli_query($db_connect, $select_service);
$_SESSION['service'] = 'Service Added Succesfully';
header('location:add_service.php');




?>