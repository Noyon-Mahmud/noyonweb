<?php 
require 'db.php';


     $upload_file = $_FILES['banner_image'];
     $upload_file_name = $upload_file['name'];
     $after_explod = explode('.', $upload_file_name); 
     $extension = end($after_explod);
    $allow_extension = array ('jpg','JPG', 'png', 'jpeg');

    if(in_array($extension, $allow_extension)){
         if($upload_file['size'] <= 10000000000){
              $insert = "INSERT INTO banner_image (banner_image) VALUES('$upload_file_name')";
              $insert_result = mysqli_query($db_connection, $insert);
              $last_id = mysqli_insert_id($db_connection);
              $file_name = $last_id. '.' .$extension;
              $new_location = 'uploads/banner/'.$file_name;
              move_uploaded_file($upload_file['tmp_name'],$new_location);

             $update_user = "UPDATE   banner_image SET banner_image ='$file_name' WHERE id=$last_id";
             $update_user_result = mysqli_query($db_connection, $update_user);

                        
            $_SESSION['success'] = 'Banner Images Success';
            header('location:add_banner.php');

         }
         else{
             $_SESSION['site_file'] = 'File Size Too Large , Max 1 MB';
            header('location:add_banner.php'); 
         }
    }
    else{
       $_SESSION['extansion'] = 'Invalid Extansion';
       header('location:add_banner.php');
    }


?>