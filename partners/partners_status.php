<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$select_logo = "SELECT * FROM `partners` WHERE  id=$id";
$select_logo_result = mysqli_query($db_connect, $select_logo);
$after_assoc = mysqli_fetch_assoc($select_logo_result);
if ($after_assoc['status'] == 1) {
    $update_status = "UPDATE partners SET status=0 WHERE id=$id";
    $update_status_result= mysqli_query($db_connect, $update_status);
    header('location:partners.php');
}
else {

    $update_status = "UPDATE partners SET status=1 WHERE id=$id";
    $update_status_result= mysqli_query($db_connect, $update_status);
    header('location:partners.php');
}
// $_SESSION['soft_delete'] = "User Soft deleted Succesfully";

?>