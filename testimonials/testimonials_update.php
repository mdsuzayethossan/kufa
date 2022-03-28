<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$quiote = $_POST['quiote'];
$comments = mysqli_real_escape_string($db_connect, $_POST['comments']);
$client_name = $_POST['client_name'];
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);


$uploaded_file = $_FILES['client_photo'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpeg', 'jpg', 'png', 'gig','webp');

if ($_FILES['client_photo']['name']!= '') {
    if(in_array($extension, $allowed_extension)) {
        if($uploaded_file['size'] < 2000000) {
            //image delete from folder start here
            $select_img = "SELECT * FROM testimonials WHERE id=$id";
            $select_img_result = mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc($select_img_result);
            $delete_from ='../uploads/testimonials/'.$after_assoc['client_photo'];
            unlink($delete_from);
            //image delete from folder end here
    
            $update_banners = "UPDATE `testimonials` SET `quiote`='$quiote',`comments`='$comments',`client_name`='$client_name,`designation`='$designation' WHERE id=$id";
            $update_banners_result = mysqli_query($db_connect, $update_banners);
    
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/testimonials/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_image = "UPDATE testimonials SET client_photo=$file_name WHERE id=$id";
            $update_image_result = mysqli_query($db_connect, $update_image);
            $_SESSION ['update_testimonials'] = "Testimonials Updated Successfully";
            header('location:testimonials_edit.php?id='.$id);
    
        }
        else {
            $_SESSION ['file_size_invld'] = "File size is too large";
            header('location:testimonials_edit.php?id='.$id);
    
        }
    }
    else {
        $_SESSION ['invld_exten'] = "Invalid Extension";
        header('location:testimonials_edit.php?id='.$id);
    }

}
else {
    $update_banners = "UPDATE `testimonials` SET `quiote`='$quiote',`comments`='$comments',`client_name`='$client_name',`designation`='$designation' WHERE id=$id";
    $update_banners_result = mysqli_query($db_connect, $update_banners);

    $_SESSION ['update_testimonials'] = "Testimonials Updated Successfully";
    header('location:testimonials_edit.php?id='.$id);

}

?>