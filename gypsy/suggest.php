<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/8/23
 * Time: 2:24 AM
 */
include 'database.php';
include 'header.php';
include 'functions.php';
/*// Retrieve suggestions from the database based on user input
if (isset($_GET['destination'])) {
    $destination = $_GET['destination'];
    $query1= "SELECT id FROM `Locations` WHERE name='" . $destination . "'";
    $result1 = $conn->query($query1);

    if ($result1->num_rows > 0) {
        while ($row = $result1->fetch_assoc()) {
            $locationid = $row['id'];
        }
    }
$query = "SELECT * FROM Attractions WHERE destination_id  = '" . $locationid . "'";
$result = $conn->query($query);

$location = array();
$img = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $location[] = $row['name'];
        $des[] = $row['description'];
        $img[] = $row['image'];
        $hour[] = $row['opening_hours'];
        $ticket[] = $row['ticket_price'];
        $type[] = $row['attraction_type']

        $count=$count+1;
    }
}
}
for ($i =1 ; $i <= $count; $i++) {

echo $location[$i] ." * ";
echo $des[$i] ." * ";
echo $img[$i] ." * ";
echo $locationid ." * ";
}
$conn->close();*/


// Include the footer
include 'footer.php';





