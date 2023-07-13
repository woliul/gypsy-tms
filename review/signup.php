<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 6/27/23
 * Time: 5:02 PM
 */

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


// Handle form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Hash the password
    $hashedPassword = md5($password, PASSWORD_DEFAULT);

    // Construct the SQL query to insert the user data
    $query = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$hashedPassword')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // User data inserted successfully
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Your account has been created.</p>";
    } else {
        // Error occurred during insertion
        echo "<h2>Error!</h2>";
        echo "<p>Registration failed. Please try again.</p>";
    }
}

// Close the database connection
mysqli_close($conn);
?>