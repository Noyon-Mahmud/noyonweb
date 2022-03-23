<?php
require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$insert = "INSERT INTO message (name, email, message)VALUES('$name', '$email', '$message')";
$insert_result = mysqli_query($db_connection,$insert);
header('location:index.php#contact');


?>