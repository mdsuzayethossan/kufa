<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$hello = $_POST['hello'];
$title = $_POST['title'];
$description = mysqli_real_escape_string($db_connect, $_POST['description']);
$btn = $_POST['btn'];


$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpeg', 'jpg', 'png', 'gig','webp');

$uploaded_file1 = $_FILES['dot_image'];
$after_explode1 = explode('.', $uploaded_file1['name']);
$extension1 = end($after_explode1);
$allowed_extension1 = array('jpeg', 'jpg', 'png', 'gig','webp');

if ($_FILES['image']['name']!='' && $_FILES['dot_image']['name']!= '') {
    if(in_array($extension, $allowed_extension) && in_array($extension, $allowed_extension)) {
        if($uploaded_file['size'] && $uploaded_file1['size'] < 2000000) {
            //image delete from folder start here
            $select_img = "SELECT * FROM banners WHERE id=$id";
            $select_img_result = mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc($select_img_result);
            $delete_from ='../uploads/banners/'.$after_assoc['image'];
            unlink($delete_from);
            //image delete from folder end here
    
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/banners/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_image = "UPDATE banners SET image=$file_name WHERE id=$id";
            $update_image_result = mysqli_query($db_connect, $update_image);

            $select_img1 = "SELECT * FROM banners WHERE id=$id";
            $select_img_result1 = mysqli_query($db_connect, $select_img1);
            $after_assoc1 = mysqli_fetch_assoc($select_img_result1);
            $delete_from1 ='../uploads/dot_image/'.$after_assoc1['dot_image'];
            unlink($delete_from1);

            $file_name1 = $id.'.'.$extension1;
            $new_location1 = '../uploads/dot_image/'.$file_name1;
            move_uploaded_file($uploaded_file1['tmp_name'], $new_location1);
            $update_image1 = "UPDATE banners SET dot_image=$file_name1 WHERE id=$id";
            $update_image_result1 = mysqli_query($db_connect, $update_image1);
            $_SESSION ['update_banner'] = "Banner Updated Successfully";
            header('location:banner_edit.php?id='.$id);
    
        }
        else {
            $_SESSION ['file_size_invld'] = "File size is too large";
            header('location:banner_edit.php?id='.$id);
    
        }
    }
    else {
        $_SESSION ['invld_exten'] = "Invalid Extension";
        header('location:banner_edit.php?id='.$id);
    }

}
else {
    $update_banner = "UPDATE banners SET hello='$hello', title='$title', description='$description', btn='$btn' WHERE id=$id";
    $update_user_result = mysqli_query($db_connect, $update_banner);

    $_SESSION ['update_user'] = "User Updated Successfully";
    header('location:banner_edit.php?id='.$id);

}

?>