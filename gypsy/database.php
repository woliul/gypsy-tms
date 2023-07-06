<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gypsy";
$epassword = "";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    $conn = new mysqli($servername, $username, $epassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

