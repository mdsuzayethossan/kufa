<?php
require '../db.php';
session_start();
$description = mysqli_real_escape_string($db_connect, $_POST['description']);
$office = mysqli_real_escape_string($db_connect, $_POST['office']);
$address = mysqli_real_escape_string($db_connect, $_POST['address']);
$phone = $_POST['phone'];
$email = $_POST['email'];


$insert_contact = "INSERT INTO `contact`(`description`, `office`, `address`, `phone`, `email`) VALUES ('$description','$office','$address','$phone','$email')";
$insert_contact_result = mysqli_query($db_connect, $insert_contact);

$_SESSION['contact_added'] = 'Contact Added Successfully';
header('location:add_contact.php');
 
?>