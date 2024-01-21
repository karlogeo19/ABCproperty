<?php
include("db_connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $conn->query("USE abcproperty");

    $custName = $_POST['custName'];
    $email = $_POST['email'];
    $mobileNo = $_POST['mobileNo'];
    $password = md5($_POST['password']); 

    $sql = "INSERT INTO customer (custName, email, mobileNo, password)
            VALUES ('$custName', '$email', '$mobileNo', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign Up successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>