<?php 
session_start();
require 'session_check.php';
require 'db.php';

$id = $_GET['id'];

$delete = "DELETE FROM service WHERE id='$id'";
$delete_result = mysqli_query($db_connection, $delete);
$_SESSION['success'] = 'Success';
header('location:service_view.php');
?>