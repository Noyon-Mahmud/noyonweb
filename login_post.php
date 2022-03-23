<?php 
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT COUNT(*) as email_exist, id, name, email,  profile_photo  FROM users WHERE email='$email'";
$select_result = mysqli_query($db_connection, $select);
$after_assoc =mysqli_fetch_assoc($select_result);

if($after_assoc['email_exist'] == 1){

    $select_email2 = "SELECT * FROM users WHERE email='$email'";
    $select_email2_result = mysqli_query($db_connection, $select_email2);
    $after_assoc2 =mysqli_fetch_assoc($select_email2_result);
    
    if(password_verify($password, $after_assoc2['password'])){
        $_SESSION['login_korso'] ='login korsi';
        $_SESSION['login_msg'] ='login successfully';
        $_SESSION['id'] = $after_assoc['id'];
          header('location:user.php');
    }
    else{
        $_SESSION['password_wrong'] = 'Password Wrong';
         header('location:login.php');
    }



}
else{
    $_SESSION['email_exist'] = 'Invalid Email ';
    header('location:login.php');

}



?>