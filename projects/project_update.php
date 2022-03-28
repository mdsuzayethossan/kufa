<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$category = $_POST['category'];
$title = $_POST['title'];
$information = $_POST['information'];
$user_id = $_POST['user_id'];

$uploaded_file = $_FILES['file'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpeg', 'jpg', 'png', 'gig','webp');

if ($_FILES['file']['name']!= '') {
    if(in_array($extension, $allowed_extension)) {
        if($uploaded_file['size'] < 2000000) {
            //image delete from folder start here
            $select_img = "SELECT * FROM `projects` WHERE id=$id";
            $select_img_result = mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc($select_img_result);
            $delete_from ='../uploads/projects/'.$after_assoc['image'];
            unlink($delete_from);
            //image delete from folder end here
    
            $update_banners = "UPDATE `projects` SET `category`='$category',`title`='$title',`information`='$information',`user_id`='$user_id' WHERE id=$id";
            $update_banners_result = mysqli_query($db_connect, $update_banners);
    
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/projects/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_image = "UPDATE `projects` SET image=$file_name WHERE id=$id";
            $update_image_result = mysqli_query($db_connect, $update_image);
            $_SESSION ['update_project'] = "Project Updated Successfully";
            header('location:project_edit.php?id='.$id);
    
        }
        else {
            $_SESSION ['file_size_invld'] = "File size is too large";
            header('location:project_edit.php?id='.$id);
    
        }
    }
    else {
        $_SESSION ['invld_exten'] = "Invalid Extension";
        header('location:project_edit.php?id='.$id);
    }

}
else {
    $update_banners = "UPDATE `projects` SET `category`='$category',`title`='$title',`information`='$information',`user_id`='$user_id' WHERE id=$id";
    $update_banners_result = mysqli_query($db_connect, $update_banners);

    $_SESSION ['update_project'] = "Project Updated Successfully";
    header('location:project_edit.php?id='.$id);

}

?>