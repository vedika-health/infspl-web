<?php

$servername = "82.25.121.98"; // Hostinger MySQL for remote – or use srv1020.hstgr.io
$username = "u156619954_infs";
$password = "Investments2023@";
$database = "u156619954_infs";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // print('connected');
}
?>
