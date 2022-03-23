<?php 
session_start();
require 'db.php';

$service_icon = $_POST['service_icon'];
$title = $_POST['title'];
$desp = $_POST['desp'];


$insert = "INSERT INTO service (service_icon, title, desp)VALUES('$service_icon', '$title', '$desp')";
$insert_result = mysqli_query($db_connection,$insert);
header('location:add_service.php'); 


?>