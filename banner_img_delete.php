<?php 

require 'db.php';

$id = $_GET['id'];

$select = "SELECT * FROM banner_image WHERE  id =$id " ;
$select_result  = mysqli_query($db_connection, $select);
$after_img_assoc = mysqli_fetch_assoc($select_result);


$delete_from = 'uploads/banner/'.$after_img_assoc['banner_image'];
unlink($delete_from);

$delete = "DELETE FROM banner_image WHERE id=$id";
$delete_result = mysqli_query($db_connection, $delete);
header('location:view_banner.php');


?>