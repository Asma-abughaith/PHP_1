<?php session_start()?>
 <?php include './functions.php' ?>
 <?php

$_SESSION['error'] = null;
$_SESSION['user'] = null;


if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)) 
    die("You are a bad guy and you are trying to access this code directly!");

$error = false;
$error_msg = '';

$email = isset($_POST['email'])?$_POST['email']:null;
$password = isset($_POST['password'])?$_POST['password']:null;
$username=isset($_POST['username'])?$_POST['username']:null;

if (!empty($_POST['email'])&& !empty($_POST['password'])&& !empty($_POST['username']) ){

    $new_user_id = create_user( $email,$password , $username);
    $new_user = get_user($new_user_id);

}else{
    die("fill the requerment");
}



if ($error) {
    $_SESSION['error'] = $error_msg;
    header("location:./registration.php");
} else {
    $_SESSION['user'] = array(
        'username' =>$new_user->usename,
        'admin' =>$new_user->admin,
        'id' => $new_user->id,
        'password' => $new_user->password
    );
    header("location:./home.php?id=$new_user->id");
}