<?php 
session_start();
require 'db.php';

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];

$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extansion = end($after_explode);
$allow_extansion = array ('jpg','JPG','png','PNG','JPEG', 'jpeg');

if(in_array($extansion, $allow_extansion)){

    if($uploaded_file['size'] <= 100000000000000){
        $insert = "INSERT INTO about_contant (sub_title, title, desp)VALUES('$sub_title', '$title', '$desp')";
        $insert_result = mysqli_query($db_connection,$insert);
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extansion;
        $new_location = 'uploads/about/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_image = "UPDATE about_contant SET image='$file_name' WHERE id=$last_id";
        $update_image_result = mysqli_query($db_connection, $update_image);
        header('location:add_about_content.php'); 

    }

    else{
        $_SESSION['size'] = 'maximum 5mb image allaw';
         header('location:add_about_content.php'); 
    }

}
else{
    $_SESSION['extansion'] = 'Invalid extansion';
    header('location:add_about_content.php'); 
}




?>