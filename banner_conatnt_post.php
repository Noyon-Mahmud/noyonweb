<?php 
session_start();
require 'db.php';

$sub_title = $_POST['sub_title'];
$title = $_POST['title'];
$desp = $_POST['desp'];


$insert = "INSERT INTO banners_contants (sub_title, title, desp)VALUES('$sub_title', '$title', '$desp')";
$insert_result = mysqli_query($db_connection,$insert);
header('location:add_banner.php'); 


?>