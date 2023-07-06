<?php
include_once 'func.php';
session_start(); // Start the session

    // Run the SQL query using the destination value
    $avquery = "SELECT user_rating FROM review WHERE destination = '" . $destination . "'";

    // Execute the query
    $avresult = $conn->query($avquery);

    // Check if the query was successful
    if ($avresult && $avresult->num_rows > 0) {
        $avratings = array();
        while ($row = $avresult->fetch_assoc()) {
            $avratings[] = $row['user_rating'];
        }

        $totalRating = count($avratings);
        $averageRating = $totalRating > 0 ? array_sum($avratings) / $totalRating : 0;
        $formattedAverageRating = number_format($averageRating, 1);

        // Store the average rating count in session
        $_SESSION['averageRating'] = $formattedAverageRating;

        // Display the average rating count
        /* echo "Average Rating: " . $formattedAverageRating;
         echo "Average Rating: " . $avresult;*/
    }
?>



