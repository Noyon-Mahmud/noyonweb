<?php 
require 'db.php';
$id = $_GET['id'];


$update_status = "UPDATE logo SET status=0";
$update_status_result = mysqli_query($db_connection, $update_status);
header('location:logo_view.php');


$update_status2 = "UPDATE logo SET status=1 WHERE id=$id";
$update_status_result2 = mysqli_query($db_connection, $update_status2);
header('location:logo_view.php');
