<?php
$servername = "localhost";  // Change this to your MySQL server name if it's different
$username = "root";    // Your MySQL username
$password = "";    // Your MySQL password
$database = "Amit";    // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}

// Now you can use $conn to perform queries
?>
