<?php
require '../db.php';
session_start();
$quiote = $_POST['quiote'];
$comments = mysqli_real_escape_string($db_connect, $_POST['comments']);
$client_name = $_POST['client_name'];
$designation = $_POST['designation'];


$uploaded_file = $_FILES['client_photo'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 3000000) {
        $insert_blog = "INSERT INTO `testimonials`(`quiote`, `comments`, `client_name`, `designation`) VALUES ('$quiote','$comments','$client_name','$designation')";
        $insert_blog_result = mysqli_query($db_connect, $insert_blog);
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/testimonials/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE `testimonials` SET client_photo='$file_name' WHERE id=$id"; 
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['success'] = 'Testimonials Added Successfully';
        header('location:add_testimonials.php');

    }
    else {
        $_SESSION['invalid_size'] = 'Image type should be maximum 3 mb';
        header('location:add_testimonials.php');
    

    }

  }
else {
    $_SESSION['invalid_extension'] = 'Image type should be (jpg, png, gig, jpeg)';
    header('location:add_testimonials.php');

}

?>