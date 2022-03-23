<?php 
session_start();
require 'db.php';

$title = $_POST['title'];
$category = $_POST['category'];
$desp = $_POST['desp'];
$user_id = $_SESSION['id'];

$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extansion = end($after_explode);
$allow_extansion = array ('jpg','JPG','png','PNG','JPEG', 'jpeg');

if(in_array($extansion, $allow_extansion)){

    if($uploaded_file['size'] <= 100000000000000){
        $insert = "INSERT INTO works (user_id, title, category, desp)VALUES($user_id,'$title', '$category', '$desp')";
        $insert_result = mysqli_query($db_connection,$insert);
        $last_id = mysqli_insert_id($db_connection);
        $file_name = $last_id.'.'.$extansion;
        $new_location = 'uploads/protfolio/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_image = "UPDATE works SET image='$file_name' WHERE id=$last_id";
        $update_image_result = mysqli_query($db_connection, $update_image);
        header('location:add_portfolio.php'); 

    }

    else{
        $_SESSION['size'] = 'maximum 5mb image allaw';
         header('location:add_portfolio.php'); 
    }

}
else{
    $_SESSION['extansion'] = 'Invalid extansion';
    header('location:add_portfolio.php'); 
}




?>