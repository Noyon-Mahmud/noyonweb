<?php 
require 'db.php';

$uploaded_file = $_FILES['clints'];
$name = $uploaded_file['name'];
$after_explode = explode('.' , $uploaded_file['name']);
$extansion = end($after_explode);
$allowed_extansion = array ('JPG', 'jpg', 'PNG', 'png');

if(in_array($extansion, $allowed_extansion)){

    if($uploaded_file['size'] <= 200000000){
            $insert = "INSERT INTO clints (clints) VALUES ('$name')";
            $insert_result = mysqli_query($db_connection, $insert);  
            $last_id = mysqli_insert_id($db_connection);
            $file_name = $last_id.'.'.$extansion;
            $new_location = 'uploads/clints/'.$file_name;
            move_uploaded_file($uploaded_file['tmp_name'], $new_location);

            $update = "UPDATE clints SET clints='$file_name' WHERE id=$last_id";
            $update_result = mysqli_query($db_connection, $update);
             header('location:add_clints.php');
    }

    else{
    header('location:add_clints.php');
    }

}

else{
    header('location:add_clints.php');
}



?>