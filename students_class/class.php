<?php  
define('SERVERNAME', 'localhost');  
define('USER', 'root');  
define('PASSWORD', '');  
define('DATABASE', 'students');  

  
    
class DB  
  
{  
     public $SERVERNAME =  'localhost';  
     public $USER=  'root';  
     public $PASSWORD= '';  
     public $DATABASE= 'students';  
    function __construct() {  
        $con = mysql_connect($SERVERNAME, $USER, $PASSWORD, $DATABASE);  
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
            }
            return $conn;
        } 
}  
  
class User extends DB 
  
{  
    public  
  
    function __construct() {  
        $db = new DB;  
    }  
  
    public  
  
    function create_user($name, $DOB, $weight, $gender, $email,$phone,$address,$color,$cv)
{
    $connection = $db;
    $sql = "INSERT INTO student_table (name, DOB, weight, gender, email, phone, address, color, cv) VALUES ('$name', '$DOB', '$weight', '$gender', '$email','$phone','$address','$color','$cv')";
    $result = mysqli_query($connection, $sql);
    $id = $connection->insert_id;
    return $id;
}
  
    public  
  
    function get_students()
{
    $sql = "SELECT * FROM student_table";
    $result = mysqli_query($db, $sql);
    $students = array();

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }
    }

    return $students;
}
  
    
}  
  
?>