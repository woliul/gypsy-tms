<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

session_start();
include_once 'func.php';
if (isset($_SESSION['user']) != "") {

}
$username=$_SESSION['user'];
include 'header.php';
?>
<?php

// Fetch all the ratings
$query = "SELECT user_rating FROM review";
$result = mysqli_query($conn, $query);
$ratings = array();
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $ratings[] = $row['user_rating'];
    }
}

// Calculate the average rating count
$averageRating = count($ratings) > 0 ? array_sum($ratings) / count($ratings) : 0;
$avgr=round($averageRating);
// Display the average rating count
echo "Average Rating: " . $avgr;

// Close the connection
mysqli_close($conn);
?>

<?php
// Include the footer
include 'footer.php';
?>

