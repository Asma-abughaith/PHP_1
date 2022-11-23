<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "seat";

    $conn = mysqli_connect($servername,$username,$password,$database);

    if (!$conn){
        echo "You Have Connection";
    }

    return $conn;
}

function get_users(){
    $sql = "SELECT * FROM username";
    $result = mysqli_query(connect(), $sql);
    $users = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_object($result)){
            $users[]= $row;
        }
    }
    return $users;
}

function create_user( $email, $password ,$username)
{
    $connection = connect();
    $sql = "INSERT INTO username (email, password, username) VALUES ( '$email', '$password' ,'$username')";
    $result = mysqli_query($connection, $sql);
    $id = $connection->insert_id;
    return $id;
}

function get_user($id)
{
   
    $sql = "SELECT *FROM username WHERE id = $id";
    $result = mysqli_query(connect(), $sql);
    return mysqli_fetch_object($result) ;
}


function create_seats($seat_number)
{
    $connection = connect();
    $sql = "INSERT INTO all_seat (seat_number) VALUES ('$seat_number')";
    $result = mysqli_query($connection, $sql);
}

function get_all_seats(){
    $sql = "SELECT * FROM all_seat";
    $result = mysqli_query(connect(), $sql);
    $all_seats = array();
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_object($result)){
            $all_seats[]= $row;
        }
    }
    return $all_seats;
}
function get_seat($id)
{
   
    $sql = "SELECT *FROM all_seat WHERE id = $id";
    $result = mysqli_query(connect(), $sql);
    return mysqli_fetch_object($result) ;
}


function reserve_seat($id,$status,$user_id){
    !empty($user_id)?$user_id:"NULL";
    $connection =connect();
    $sql = <<<EOD
    UPDATE all_seat
        SET available=$status , user_owner = $user_id
        WHERE id=$id
    EOD;
    $result = mysqli_query($connection, $sql);
    
}
