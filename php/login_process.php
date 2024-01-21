<?php
session_start(); 

include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn->query("USE abcproperty");

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        
        $_SESSION['email'] = $email; 
        header("Location: ../index.php"); 
        exit(); 
    } else {
        
        echo "Invalid login credentials";
    }
}
?>
