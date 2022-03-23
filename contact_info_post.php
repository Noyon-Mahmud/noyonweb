<?php 
session_start();
require 'db.php';

$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$insert = "INSERT INTO contact_info (address, phone, email)VALUES('$address', '$phone', '$email')";
$insert_result = mysqli_query($db_connection,$insert);
header('location:contact_info.php'); 


?>