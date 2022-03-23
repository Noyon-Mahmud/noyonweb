<?php 
session_start();
require 'db.php';
$id = $_GET['id'];

$select_works_status1 = "SELECT * FROM works WHERE id=$id";
$select_works_status_result1 = mysqli_query($db_connection, $select_works_status1);
$after_assoc1 = mysqli_fetch_assoc($select_works_status_result1);
if( $after_assoc1['status'] == 1){
    
            $select_works_status = "SELECT COUNT(*) AS total FROM works WHERE STATUS = 1";
            $select_works_status_result = mysqli_query($db_connection, $select_works_status);
            $after_assoc = mysqli_fetch_assoc($select_works_status_result);

            if($after_assoc['total'] == 1){
            $_SESSION['icon_err'] = 'Maximum 1 Icon Can Active';
            header('location:view_protfolio.php');
            }
            else{

            $update_status = "UPDATE works SET status=0 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:view_protfolio.php');

            }

}
else{
            $select_works_status = "SELECT COUNT(*) AS total FROM works WHERE STATUS = 1";
            $select_works_status_result = mysqli_query($db_connection, $select_works_status);
            $after_assoc = mysqli_fetch_assoc($select_works_status_result);

if($after_assoc['total'] == 6 ){
            $_SESSION['icon_err'] = 'Maximum 4 Icon Can Active';
            header('location:view_protfolio.php');
}
else{
            $update_status = "UPDATE works SET status=1 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:view_protfolio.php');
}

}



?>