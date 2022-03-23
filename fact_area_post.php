<?php 
session_start();
require 'db.php';

$icon_class = $_POST['icon_class'];
$counter = $_POST['counter'];
$title = $_POST['title'];

$insert = "INSERT INTO fact (icon_class, counter, title)VALUES('$icon_class', '$counter', '$title')";
$insert_result = mysqli_query($db_connection,$insert);
header('location:add_fact_area_icon.php'); 


?>