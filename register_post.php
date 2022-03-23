<?php 

session_start();
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$role = $_POST['role'];

$select = "SELECT COUNT(*) as hoise FROM users WHERE email='$email'";
$select_result = mysqli_query($db_connection, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['hoise'] == 1){
    $_SESSION['exsit'] = 'Email Alredy Exsit';
     header('location:register.php');
}

else{

    // images ====

     $upload_file = $_FILES['profile_photo'];
     $upload_file_name = $upload_file['name'];
     $after_explod = explode('.', $upload_file_name); 
     $extension = end($after_explod);
    $allow_extension = array ('jpg', 'png', 'jpeg');

    if(in_array($extension, $allow_extension)){
         if($upload_file['size'] <= 100000000){
              $insert = "INSERT INTO users (name,email,password,role) VALUES('$name', '$email', '$password','$role')";
              $insert_result = mysqli_query($db_connection, $insert);
              $last_id = mysqli_insert_id($db_connection);
              $file_name = $last_id. '.' .$extension;
              $new_location = 'uploads/user/'.$file_name;
              move_uploaded_file($upload_file['tmp_name'],$new_location);

             $update_user = "UPDATE   users SET profile_photo='$file_name' WHERE id=$last_id";
             $update_user_result = mysqli_query($db_connection, $update_user);

                        
            $_SESSION['success'] = 'Success';
            header('location:register.php');

         }
         else{
             $_SESSION['site_file'] = 'File Size Too Large , Max 1 MB';
            header('location:register.php'); 
         }
    }
    else{
       $_SESSION['extansion'] = 'Invalid Extansion';
       header('location:register.php');
    }
     

}



?>