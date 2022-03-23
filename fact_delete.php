<?php 
session_start();
require 'session_check.php';
require 'db.php';

$id = $_GET['id'];

$delete = "DELETE FROM fact WHERE id='$id'";
$delete_result = mysqli_query($db_connection, $delete);
$_SESSION['success'] = 'Success';
header('location:fact_view.php');
?>