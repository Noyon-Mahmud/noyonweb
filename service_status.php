<?php 
session_start();
require 'db.php';
$id = $_GET['id'];

$select_service_status1 = "SELECT * FROM service WHERE id=$id";
$select_service_status_result1 = mysqli_query($db_connection, $select_service_status1);
$after_assoc1 = mysqli_fetch_assoc($select_service_status_result1);
if( $after_assoc1['status'] == 1){
    
            $select_service_status = "SELECT COUNT(*) AS total FROM service WHERE STATUS = 1";
            $select_service_status_result = mysqli_query($db_connection, $select_service_status);
            $after_assoc = mysqli_fetch_assoc($select_service_status_result);

            if($after_assoc['total'] == 1){
            $_SESSION['icon_err'] = 'Maximum 1 Icon Can Active';
            header('location:service_view.php');
            }
            else{

            $update_status = "UPDATE service SET status=0 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:service_view.php');

            }

}
else{
            $select_service_status = "SELECT COUNT(*) AS total FROM service WHERE STATUS = 1";
            $select_service_status_result = mysqli_query($db_connection, $select_service_status);
            $after_assoc = mysqli_fetch_assoc($select_service_status_result);

if($after_assoc['total'] == 6 ){
            $_SESSION['icon_err'] = 'Maximum 6 Icon Can Active';
            header('location:service_view.php');
}
else{
            $update_status = "UPDATE service SET status=1 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:service_view.php');
}

}



?>