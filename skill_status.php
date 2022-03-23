<?php 
session_start();
require 'db.php';
$id = $_GET['id'];

$select_skill_status1 = "SELECT * FROM skill WHERE id=$id";
$select_skill_status_result1 = mysqli_query($db_connection, $select_skill_status1);
$after_assoc1 = mysqli_fetch_assoc($select_skill_status_result1);
if( $after_assoc1['status'] == 1){
    
            $select_skill_status = "SELECT COUNT(*) AS total FROM skill WHERE STATUS = 1";
            $select_skill_status_result = mysqli_query($db_connection, $select_skill_status);
            $after_assoc = mysqli_fetch_assoc($select_skill_status_result);

            if($after_assoc['total'] == 1){
            $_SESSION['icon_err'] = 'Maximum 1 Icon Can Active';
            header('location:skill_view.php');
            }
            else{

            $update_status = "UPDATE skill SET status=0 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:skill_view.php');

            }

}
else{
            $select_skill_status = "SELECT COUNT(*) AS total FROM skill WHERE STATUS = 1";
            $select_skill_status_result = mysqli_query($db_connection, $select_skill_status);
            $after_assoc = mysqli_fetch_assoc($select_skill_status_result);

if($after_assoc['total'] == 4 ){
            $_SESSION['icon_err'] = 'Maximum 4 Icon Can Active';
            header('location:skill_view.php');
}
else{
            $update_status = "UPDATE skill SET status=1 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:skill_view.php');
}

}



?>