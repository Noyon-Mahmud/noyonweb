<?php 
session_start();
require 'db.php';


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);


if(empty($password)){

  if($_FILES['profile_photo']['name'] != ''){



 // image update code
 
 $upload_file = $_FILES['profile_photo'];
     $upload_file_name = $upload_file['name'];
     $after_explod = explode('.', $upload_file_name); 
     $extension = end($after_explod);
     $allow_extension = array ('jpg', 'png', 'jpeg');
     
     if(in_array($extension, $allow_extension)){
       if($upload_file['size'] <= 600000){
  //  image delete code
    $select_img = "SELECT * FROM users WHERE id=$id";
    $select_img_result = mysqli_query($db_connection, $select_img);
    $after_assoc = mysqli_fetch_assoc($select_img_result);
    $delete_img = 'uploads/user/'.$after_assoc['profile_photo'];
    unlink($delete_img);
 //  image delete code
      $update_user = "UPDATE users set name='$name', email='$email' WHERE id=$id";
      $update_user_result = mysqli_query($db_connection, $update_user);

         $file_name = $id. '.' .$extension;
         $new_location = 'uploads/user/'.$file_name;
         move_uploaded_file($upload_file['tmp_name'],$new_location);
         
         $update_user = "UPDATE   users SET profile_photo='$file_name' WHERE id=$id";
         $update_user_result = mysqli_query($db_connection, $update_user);
         
         
         $_SESSION['success'] = 'Success';
         header('location:user_edit.php?id='.$id);
         
        }
        else{
          $_SESSION['site_file'] = 'File Size Too Large , Max 1 MB';
          header('location:user_edit.php?id='.$id); 
        }
      }
      else{
        $_SESSION['extansion'] = 'Invalid Extansion';
        header('location:user_edit.php?id='.$id);
      }
    }
    //  image update code
    else{
      $update_user = "UPDATE users set name='$name', email='$email' WHERE id=$id";
      $update_user_result = mysqli_query($db_connection, $update_user);
      header('location:user.php');
    }
    
  }
  
  
  else{    

  if($_FILES['profile_photo']['name'] != ''){
 //  image update code
 
    $upload_file = $_FILES['profile_photo'];
     $upload_file_name = $upload_file['name'];
     $after_explod = explode('.', $upload_file_name); 
     $extension = end($after_explod);
     $allow_extension = array ('jpg', 'png', 'jpeg');
     
     if(in_array($extension, $allow_extension)){
       if($upload_file['size'] <= 600000){


   //  image delete code
    $select_img = "SELECT * FROM users WHERE id=$id";
    $select_img_result = mysqli_query($db_connection, $select_img);
    $after_assoc = mysqli_fetch_assoc($select_img_result);
    $delete_img = 'uploads/user/'.$after_assoc['profile_photo'];
    unlink($delete_img);
 //  image delete code



      $update_user = "UPDATE users set name='$name', email='$email', password='$password_hash' WHERE id=$id";
    $update_user_result = mysqli_query($db_connection, $update_user);

         $file_name = $id. '.' .$extension;
         $new_location = 'uploads/user/'.$file_name;
         move_uploaded_file($upload_file['tmp_name'],$new_location);
         
         $update_user = "UPDATE   users SET profile_photo='$file_name' WHERE id=$id";
         $update_user_result = mysqli_query($db_connection, $update_user);
         
         
         $_SESSION['success'] = 'Success';
         header('location:user_edit.php?id='.$id);
         
        }
        else{
          $_SESSION['site_file'] = 'File Size Too Large , Max 1 MB';
          header('location:user_edit.php?id='.$id); 
        }
      }
      else{
        $_SESSION['extansion'] = 'Invalid Extansion';
        header('location:user_edit.php?id='.$id);
      }
    }
    //  image update code
    else{
        $update_user = "UPDATE users set name='$name', email='$email', password='$password_hash' WHERE id=$id";
    $update_user_result = mysqli_query($db_connection, $update_user);
    header('location:user.php');
    }
    

    // ==============


}






?>