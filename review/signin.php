<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 6/27/23
 * Time: 5:24 PM
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $user = $_POST['username'];
    $pass = md5($_POST['password']);


    include '../database.php';


    // Prepare the SQL statement
    $sql = "SELECT * FROM users WHERE username = '$user' AND password = '$pass'";

    // Execute the SQL statement
    $result = $conn->query($sql);

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['user'] = $user;

        // User authentication successful
        header("Location: index.php");
    } else {
        // User authentication failed
        ?>
        <script>alert('Invalid username or password!');</script>
        <?php
    }

    // Close the database connection
    $conn->close();
}
?>


