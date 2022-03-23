<?php 
session_start();
require 'db.php';
$id = $_GET['id'];

$select_icon_status1 = "SELECT * FROM social_icon WHERE id=$id";
$select_icon_status_result1 = mysqli_query($db_connection, $select_icon_status1);
$after_assoc1 = mysqli_fetch_assoc($select_icon_status_result1);
if( $after_assoc1['status'] == 1){
    
            $select_icon_status = "SELECT COUNT(*) AS total FROM social_icon WHERE STATUS = 1";
            $select_icon_status_result = mysqli_query($db_connection, $select_icon_status);
            $after_assoc = mysqli_fetch_assoc($select_icon_status_result);

            if($after_assoc['total'] == 1){
            $_SESSION['icon_err'] = 'Maximum 1 Icon Can Active';
            header('location:icon_view.php');
            }
            else{

            $update_status = "UPDATE social_icon SET status=0 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:icon_view.php');

            }

}
else{
            $select_icon_status = "SELECT COUNT(*) AS total FROM social_icon WHERE STATUS = 1";
            $select_icon_status_result = mysqli_query($db_connection, $select_icon_status);
            $after_assoc = mysqli_fetch_assoc($select_icon_status_result);

if($after_assoc['total'] == 4 ){
            $_SESSION['icon_err'] = 'Maximum 4 Icon Can Active';
            header('location:icon_view.php');
}
else{
            $update_status = "UPDATE social_icon SET status=1 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:icon_view.php');
}

}



?>