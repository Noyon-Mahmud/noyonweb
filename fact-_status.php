<?php 
session_start();
require 'db.php';
$id = $_GET['id'];

$select_fact_status1 = "SELECT * FROM fact WHERE id=$id";
$select_fact_status_result1 = mysqli_query($db_connection, $select_fact_status1);
$after_assoc1 = mysqli_fetch_assoc($select_fact_status_result1);
if( $after_assoc1['status'] == 1){
    
            $select_fact_status = "SELECT COUNT(*) AS total FROM fact WHERE STATUS = 1";
            $select_fact_status_result = mysqli_query($db_connection, $select_fact_status);
            $after_assoc = mysqli_fetch_assoc($select_fact_status_result);

            if($after_assoc['total'] == 1){
            $_SESSION['icon_err'] = 'Maximum 1 Icon Can Active';
            header('location:fact_view.php');
            }
            else{

            $update_status = "UPDATE fact SET status=0 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:fact_view.php');

            }

}
else{
            $select_fact_status = "SELECT COUNT(*) AS total FROM fact WHERE STATUS = 1";
            $select_fact_status_result = mysqli_query($db_connection, $select_fact_status);
            $after_assoc = mysqli_fetch_assoc($select_fact_status_result);

if($after_assoc['total'] == 4 ){
            $_SESSION['icon_err'] = 'Maximum 4 Icon Can Active';
            header('location:fact_view.php');
}
else{
            $update_status = "UPDATE fact SET status=1 WHERE id=$id";
            $update_status_result  = mysqli_query($db_connection, $update_status);
            header('location:fact_view.php');
}

}



?>