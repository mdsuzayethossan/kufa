<?php
require '../db.php';
session_start();
$logo = $_FILES['logo']['name'];
$uploaded_file = $_FILES['logo'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <=3000000) {
        $insert_logo = "INSERT INTO partners(logo)VALUES('$logo')";
        $inset_logo_result = mysqli_query($db_connect, $insert_logo);
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/partners/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE partners SET logo='$file_name' WHERE id=$id"; 
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['success'] = 'Partners Added Successfully';
        header('location:add_partners.php');

    }
    else {
        $_SESSION['invalid_size'] = 'Image type should be maximum 3 mb';
        header('location:add_partners.php');
    

    }

  }
else {
    $_SESSION['invalid_extension'] = 'Image type should be (jpg, png, gig, jpeg)';
    header('location:add_partners.php');

}
 
?>