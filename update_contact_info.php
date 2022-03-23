<?php 

session_start();
require 'db.php';

$id = $_POST['id'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];



 $update_contact = "UPDATE contact_info set address='$address', phone='$phone',email='$email' WHERE id=$id";
 $update_contact_result = mysqli_query($db_connection, $update_contact);
header('location:view_contact_info.php'); 


?>