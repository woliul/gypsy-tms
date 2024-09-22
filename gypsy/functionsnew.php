<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

include_once 'func.php';

session_start(); // Start the session
if (isset($_GET['destination'])) {// Destination or City Places
    $destination = $_GET['destination'];
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

    $query1= "SELECT id FROM `Locations` WHERE name='" . $destination . "'";
    $result1 = $conn->query($query1);

    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $locationid = $row['id'];
        }
    }
    $query2 = "SELECT * FROM Attractions WHERE destination_id  = '" . $locationid . "'";
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


//all places from single locations
$atLocquery = "SELECT * FROM Attractions WHERE location  = '" . $atLoclocation . "'";
$atLocresult = $conn->query($atLocquery);

$atLocname = array();
$atLocimg = array();
$atLoccount=0;
if ($atLocresult->num_rows > 0) {
    while ($atLocrow = $atLocresult->fetch_assoc()) {
        $atLocname[] = $atLocrow['name'];
        $atLocdes[] = $atLocrow['description'];
        $atLocimg[] = $atLocrow['image'];
        $atLochour[] = $atLocrow['opening_hours'];
        $atLocticket[] = $atLocrow['ticket_price'];
        $atLoctype[] = $atLocrow['attraction_type'];

        $atLoccount++;
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


//all hotel from city
$htLocquery = "SELECT * FROM hotel WHERE location  = '" . $htLoclocation . "'";
$htLocresult = $conn->query($htLocquery);

$htLoclocation = array();
$htLocimg = array();
$htLoccount=0;
if ($htLocresult->num_rows > 0) {
    while ($htLocrow = $htLocresult->fetch_assoc()) {
        $htLoclocation[] = $htLocrow['name'];
        $htLocdes[] = $htLocrow['description'];
        $htLocrating[] = $htLocrow['rating'];
        $htLocaddress[] = $htLocrow['location'];
        $htLocimg[] = $htLocrow['image'];
        $htLoccount++;
    }
}

//Single hotel info
$htquery = "SELECT * FROM Attractions WHERE name  = '" . $htname . "'";
$htresult = $conn->query($htquery);

if ($htresult->num_rows > 0) {
    while ($htrow = $atresult->fetch_assoc()) {
        $htlocation = $atrow['name'];
        $htdes = $htrow['description'];
        $htrating = $htrow['rating'];
        $htprice = $htLocrow['price'];
        $htaddress = $htLocrow['location'];
        $htcity = $htLocrow['city'];
        $htimg = $htrow['image'];
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

