<?php
session_start();
require '../db.php';
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$country = $_POST['country'];
$uploaded_file = $_FILES['file'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpeg', 'jpg', 'png', 'gig','webp');


if(empty($_POST['password'])){
    if ($_FILES['file']['name']!= '') {
        if(in_array($extension, $allowed_extension)) {
            if($uploaded_file['size'] < 2000000) {
                //image delete from folder start here
                $select_img = "SELECT * FROM users WHERE id=$id";
                $select_img_result = mysqli_query($db_connect, $select_img);
                $after_assoc = mysqli_fetch_assoc($select_img_result);
                $delete_from ='../uploads/users/'.$after_assoc['image'];
                unlink($delete_from);
                //image delete from folder end here
        
                $update_user = "UPDATE users SET name='$name', email='$email', country='$country' WHERE id=$id";
                $update_user_result = mysqli_query($db_connect, $update_user);
        
                $file_name = $id.'.'.$extension;
                $new_location = '../uploads/users/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);
                $update_image = "UPDATE users SET image=$file_name WHERE id=$id";
                $update_image_result = mysqli_query($db_connect, $update_image);
                $_SESSION ['update_user'] = "User Updated Successfully";
                header('location:edit.php?id='.$id);
        
            }
            else {
                $_SESSION ['file_size_invld'] = "File size is too large";
                header('location:edit.php?id='.$id);
        
            }
        }
        else {
            $_SESSION ['invld_exten'] = "Invalid Extension";
            header('location:edit.php?id='.$id);
        }
    
    }
    else {
        $update_user = "UPDATE users SET name='$name', email='$email', country='$country' WHERE id=$id";
        $update_user_result = mysqli_query($db_connect, $update_user);
    
        $_SESSION ['update_user'] = "User Updated Successfully";
        header('location:edit.php?id='.$id);
    
    }
}
else {
    echo 'ace';
}
if ($_FILES['file']['name']!= '') {
    if(in_array($extension, $allowed_extension)) {
        if($uploaded_file['size'] < 2000000) {
            //image delete from folder start here
            $select_img = "SELECT * FROM users WHERE id=$id";
            $select_img_result = mysqli_query($db_connect, $select_img);
            $after_assoc = mysqli_fetch_assoc($select_img_result);
            $delete_from ='../uploads/users/'.$after_assoc['image'];
            unlink($delete_from);
            //image delete from folder end here
    
            $update_user = "UPDATE users SET name='$name', email='$email', password='$password', country='$country' WHERE id=$id";
            $update_user_result = mysqli_query($db_connect, $update_user);
    
            $file_name = $id.'.'.$extension;
            $new_location = '../uploads/users/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);
            $update_image = "UPDATE users SET image=$file_name WHERE id=$id";
            $update_image_result = mysqli_query($db_connect, $update_image);
            $_SESSION ['update_user'] = "User Updated Successfully";
            header('location:edit.php?id='.$id);
    
        }
        else {
            $_SESSION ['file_size_invld'] = "File size is too large";
            header('location:edit.php?id='.$id);
    
        }
    }
    else {
        $_SESSION ['invld_exten'] = "Invalid Extension";
        header('location:edit.php?id='.$id);
    }

}
else {
    $update_user = "UPDATE users SET name='$name', email='$email', password='$password', country='$country' WHERE id=$id";
    $update_user_result = mysqli_query($db_connect, $update_user);

    $_SESSION ['update_user'] = "User Updated Successfully";
    header('location:edit.php?id='.$id);

}
?>