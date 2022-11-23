<?php session_start()?>
 <?php include '../functions.php' ?>
 <?php

$seat = get_seat($_GET['id']);

$user_id=$_SESSION['user']['id'];

if ($seat->available){
    reserve_seat($seat->id,0,$user_id);
}else{
    reserve_seat($seat->id,1,NULL);
}

header("location:../home.php")
?>