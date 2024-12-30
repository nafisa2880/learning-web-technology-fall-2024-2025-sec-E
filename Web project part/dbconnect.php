<?php
// Database configuration
$servername = "localhost";  // Change if hosting elsewhere
$username = "root";         // Default username for XAMPP
$password = "";             // Default password is empty in XAMPP
$dbname = "healthinfo";   // Your database name
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>