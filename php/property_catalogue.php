<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "abcproperty";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'property' table
$sql = "SELECT * FROM property";
$result = $conn->query($sql);

// Check if there are rows in the result
if ($result->num_rows > 0) {
    $propertyData = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $propertyData = [];
}

// Close the connection
$conn->close();
?>
