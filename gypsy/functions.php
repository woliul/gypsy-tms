<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

include_once 'func.php';

session_start(); // Start the session
if (isset($_GET['destination'])) {// Destination or City Places
    $destination = $_GET['destination'];
}


if (isset($_GET['atname'])) {// Destination or City Places
    $atname = $_GET['atname'];
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destination = $_POST['destination'];
}

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

        $totalrating = count($avratings);
        $averageRating = $totalrating > 0 ? array_sum($avratings) / $totalrating : 0;
        $avgrating = number_format($averageRating, 1);

        // Store the average rating count in session
        $_SESSION['averageRating'] = $avgrating;

        // Debug Display the average rating count
        //echo "Average Rating: " . $formattedAverageRating;
        //echo "Average Rating: " . $totalrating;


    } 



// Display the Total rating with percentage count
$totratingCounts = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0);
$ratingPercentages = array();

// Execute the query to count occurrences of each rating value

$totquery = "SELECT user_rating, COUNT(*) AS countstar FROM review WHERE destination = '$destination' GROUP BY user_rating";

$totresult = $conn->query($totquery);

// Check if the query was successful
if ($totresult) {
    // Fetch the rows
    while ($row = $totresult->fetch_assoc()) {
        // Get the rating and count value
        $totrating = $row['user_rating'];
        $totcount = $row['countstar'];

        // Assign the count value to the corresponding array element
        $totratingCounts[$totrating] = $totcount;
    }

    // Calculate the percentage for each rating value
    foreach ($totratingCounts as $totrating => $totcount) {
        $percentage = ($totcount / $totalrating) * 100;
        $ratingPercentages[$totrating] = $percentage;
    }

} else {
    // Query execution failed
    echo "Error executing query: " . $conn->error;
}

// Debug Output the counts and percentages
/*
    for ($i = 1; $i <= 5; $i++) {
        echo "Count of " . $i . "-star: " . $totratingCounts[$i] . "<br>";
        echo "Percentage of " . $i . "-star: " . round($ratingPercentages[$i]) . "%<br>";
    }
*/

// Retrieve suggestions from the database based on user input


    $query2 = "SELECT * FROM Attractions WHERE location  = '" . $destination . "'";
    $result2 = $conn->query($query2);

    $location = array();
    $img = array();
    $count=0;
    if ($result2->num_rows > 0) {
        while ($row = $result2->fetch_assoc()) {
            $location[] = $row['name'];
            $des[] = $row['description'];
            $img[] = $row['image'];
            $hour[] = $row['opening_hours'];
            $ticket[] = $row['ticket_price'];
            $type[] = $row['attraction_type'];
        
        $count=$count+1;
    }
    }

//Single place details
$atquery = "SELECT * FROM Attractions WHERE name  = '" . $atname . "'";
$atresult = $conn->query($atquery);

if ($atresult->num_rows > 0) {
    while ($atrow = $atresult->fetch_assoc()) {
        $atlocation = $atrow['name'];
        $atdes = $atrow['description'];
        $atimg = $atrow['image'];
        $athour = $atrow['opening_hours'];
        $atticket = $atrow['ticket_price'];
        $atrating = $atrow['rating'];
        $attype = $atrow['attraction_type'];

    }
}



/*for ($i =0 ; $i <= $count; $i++) {

    echo $location[$i] ." <br> ";
    echo $des[$i] ." <br> ";
    echo $img[$i] ." <br> ";
    echo $locationid ." <br> ";
    echo $hour[$i] ." <br> ";
    echo $ticket[$i] ." <br> ";
    echo $type[$i] ." <br> ";
}*/
// Close the connection
mysqli_close($conn);
?>

