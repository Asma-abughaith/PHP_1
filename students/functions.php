<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="students";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$database);

    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    //echo "Connected successfully";
    return $conn;
}

function create_user($name, $DOB, $weight, $gender, $email,$phone,$address,$color,$cv)
{
    $connection = connect();
    $sql = "INSERT INTO student_table (name, DOB, weight, gender, email, phone, address, color, cv) VALUES ('$name', '$DOB', '$weight', '$gender', '$email','$phone','$address','$color','$cv')";
    $result = mysqli_query($connection, $sql);
    $id = $connection->insert_id;
    return $id;
}

function get_students()
{
    $sql = "SELECT * FROM student_table";
    $result = mysqli_query(connect(), $sql);
    $students = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
    }

    return $students;
}
