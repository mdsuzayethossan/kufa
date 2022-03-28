<?php
require '../db.php';
session_start();
$hello = $_POST['hello'];
$title = $_POST['title'];
$description = mysqli_real_escape_string($db_connect, $_POST['description']);
$btn = $_POST['btn'];


$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif');

$uploaded_file1 = $_FILES['dot_image'];
$after_explode1 = explode('.', $uploaded_file1['name']);
$extension1 = end($after_explode1);
$allowed_extension1 = array('jpg', 'png', 'jpeg', 'gif');


if(in_array($extension, $allowed_extension) && in_array($extension1, $allowed_extension1)){
    if($uploaded_file['size'] <=3000000) {
        $insert_banner = "INSERT INTO `banners`(`hello`, `title`, `description`, `btn`) VALUES ('$hello','$title','$description','$btn')";
        $inset_banner_result = mysqli_query($db_connect, $insert_banner);
        $id = mysqli_insert_id($db_connect);

        $file_name1 = $id.'.'.$extension1;
        $new_location1 = '../uploads/dot_image/'.$file_name1;
        move_uploaded_file($uploaded_file1['tmp_name'], $new_location1);

        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/banners/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_image = "UPDATE banners SET image='$file_name', dot_image='$file_name1' WHERE id=$id"; 
        $update_image_result = mysqli_query($db_connect, $update_image);
        $_SESSION['success'] = 'Banner Added Successfully';
    header('location:add_banner.php');

    }
    else {
        $_SESSION['invalid_size'] = 'Image type should be maximum 3 mb';
        header('location:add_banner.php');
    }

  }
else {
    $_SESSION['invalid_extension'] = 'Image type should be (jpg, png, gig, jpeg)';
    header('location:add_banner.php');

}
//dot_image
 
?>

