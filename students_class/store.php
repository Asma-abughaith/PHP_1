<?php
session_start();
include "./class.php";

$_SESSION['error'] = null;

if ($_SERVER['REQUEST_METHOD'] != "POST" || empty($_POST)) // check if the form was submitted using POST method and is not empty
    die("You are a bad guy and you are trying to access this code directly!");

$name = isset($_POST['name']) ? $_POST['name'] : null;
$DOB = isset($_POST['dob']) ? $_POST['dob'] : null;
$weight = isset($_POST['weight']) ? $_POST['weight'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$phone = isset($_POST['phone']) ? $_POST['phone'] : null;
$address = isset($_POST['address']) ? $_POST['address'] : null;
$color = isset($_POST['color']) ? $_POST['color'] : null;
$cv = isset($_POST['cv']) ? $_POST['cv'] : null;



$error = false;
$error_msg = '';

$new_student = new user;

if (!empty($name) && !empty($email)) {
    $new_student -> create_user($name, $DOB, $weight, $gender, $email,$phone,$address,$color,$cv);
} else {
    $error_msg = "Please fillout the required information (First Name, Last Name)";
    $error = true;
}

if ($error) {
    $_SESSION['error'] = $error_msg;
    header("Location: ./index.php");
} else {
    header("Location: ./table.php?id=$new_student");
}