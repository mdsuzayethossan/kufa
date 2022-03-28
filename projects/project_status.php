<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$select_project = "SELECT * FROM `projects` WHERE  id=$id";
$select_project_result = mysqli_query($db_connect, $select_project);
$after_assoc = mysqli_fetch_assoc($select_project_result);
if ($after_assoc['status'] == 1) {
    $update_status = "UPDATE projects SET status=0 WHERE id=$id";
    $update_status_result= mysqli_query($db_connect, $update_status);
    header('location:project.php');
}
else {
    $update_status1 = "UPDATE projects SET status=0 WHERE id=$id";
    $update_status_result1 = mysqli_query($db_connect, $update_status1);

    $update_status = "UPDATE projects SET status=1 WHERE id=$id";
    $update_status_result= mysqli_query($db_connect, $update_status);
    header('location:project.php');
}
// $_SESSION['soft_delete'] = "User Soft deleted Succesfully";

?>