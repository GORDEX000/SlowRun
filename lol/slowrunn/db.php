<?php
// Database connection file

$servername = "localhost"; // your server, usually localhost
$username = "root";        // your MySQL username (default is usually 'root')
$password = "";            // your MySQL password (leave empty if using XAMPP)
$dbname = "slowrun";       // the name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>