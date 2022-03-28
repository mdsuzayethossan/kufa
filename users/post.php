<?php
session_start();
require '../db.php';

$errors = [];
$filed_names = ['name'=> 'Name Required', 'email'=> 'Email Required','password' => 'password Required'];
foreach ($filed_names as $filed_name => $message) {
  if(empty($_POST[$filed_name])) {
      $errors[$filed_name] = $message;  
  }

  else if(empty($_POST[$filed_name])) {
      $errors[$filed_name] = $message;
  }

  else if(empty($_POST[$filed_name])) {
      $errors[$filed_name] = $message;
  }
  
//   else if(empty($_POST[$filed_name])) {
//       $errors[$filed_name] = $message;
//   }

}
if (count($errors)==0) {
    // echo $_POST['name'].'<br>';
    // echo $_POST['email'].'<br>';
    // echo $_POST['password'].'<br>';
    // $after_implode = implode(',', $_POST['hobbies']);
    // echo $after_implode;

    //FOR INSERT START
    $name = $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password']; 
    $after_hash = password_hash($password, PASSWORD_DEFAULT);
    $designation= $_POST['designation'];
    date_default_timezone_set('Asia/Dhaka');
    $created_at = date('d-m-y h:i:s');
    $country = $_POST['country']; 
    $role = $_POST['role']; 
    $select_users = "SELECT COUNT(*) as email_exist FROM users WHERE email = '$email'";
    $select_users_result = mysqli_query($db_connect, $select_users);
    $after_assoc = mysqli_fetch_assoc($select_users_result);
    
    if ($after_assoc['email_exist'] == 0) {
        $uploaded_file = $_FILES['file'];
        $after_explode = explode('.',$uploaded_file['name']);
        $extension = end($after_explode);
        $allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'webp');
        if (in_array($extension, $allowed_extension)) {

            if ($uploaded_file['size'] < 2000000){
                  $insert = "INSERT INTO users(name,email,password,designation,country,created_at,role)VALUES('$name', '$email', '$after_hash', '$designation', '$country','$created_at', '$role')";
                  $insert_result = mysqli_query($db_connect, $insert);

                $user_id = mysqli_insert_id($db_connect);
                $file_name = $user_id.'.'.$extension;
                $new_location = '../uploads/users/'.$file_name;
                move_uploaded_file($uploaded_file['tmp_name'], $new_location);


                $update_user = "UPDATE users SET image='$file_name' WHERE id=$user_id";
                $update_user_result = mysqli_query($db_connect, $update_user);
                
                $_SESSION ['success'] = 'Registered Successfully';
                header('location:register.php');
             

            }
            else {
                $_SESSION ['filesize'] = 'File size is too large';
                header('location:register.php');

            }

        }
        else {
            $_SESSION ['invalid_ex'] = 'Invalid Extension';
            header('location:register.php');

        }
        // $insert = "INSERT INTO users(Name,Email,Password,created_at)VALUES('$name', '$email', '$after_hash','$created_at')";
        // $insert_result = mysqli_query($db_connect, $insert);
        
    }
    else {
        $_SESSION ['email_exist'] = 'Email already exists';
        header('location:register.php');
    }
   
    //FOR INSERT END
}
else {
    $_SESSION ['errors'] = $errors;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header('location:register.php');

}

?>