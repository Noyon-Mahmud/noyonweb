<?php 
session_start();
require 'session_check.php';
require 'db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM works WHERE id=$id";
$select_img_result = mysqli_query($db_connection, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_img = 'uploads/protfolio/'.$after_assoc['profile_photo'];
unlink($delete_img);

$delete = "DELETE FROM works WHERE id='$id'";
$delete_result = mysqli_query($db_connection, $delete);
$_SESSION['success'] = 'Success';
header('location:view_protfolio.php');



?>