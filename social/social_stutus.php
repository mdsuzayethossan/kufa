<?php
session_start();
require '../db.php';
$id = $_GET['id'];

$select_social = "SELECT * FROM `social` WHERE  id=$id";
$select_social_result = mysqli_query($db_connect, $select_social);
$after_assoc = mysqli_fetch_assoc($select_social_result);
if ($after_assoc['status'] == 1) {
    $update_status = "UPDATE social SET status=0 WHERE id=$id";
    $update_status_result= mysqli_query($db_connect, $update_status);
    header('location:social.php');
}
else {

    // $count_skills ="SELECT COUNT(*) as total_active FROM skills"
    // $count_skills_result = mysqli_query($db_connect, $count_skills);
    // $after_assoc_count = mysqli_fetch_assoc($count_skills_result);
    // echo $after_assoc_count['total_active'];
    // die();
    


    $update_status1 = "UPDATE social SET status=1 WHERE id=$id";
    $update_status_result1 = mysqli_query($db_connect, $update_status1);
    header('location:social.php');
}
// $_SESSION['soft_delete'] = "User Soft deleted Succesfully";

?>