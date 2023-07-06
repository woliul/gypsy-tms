<?php

include("database.php");

// Check for missing destination_id values between 1 and 100
$missing_ids = array();
for ($num = 1; $num <= 100; $num++) {
    $query = "SELECT COUNT(*) AS count FROM Attractions WHERE destination_id = $num";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    $count = $row["count"];
    if ($count == 0) {
        $missing_ids[] = $num;
    }
}

// Print the missing destination_id values
foreach ($missing_ids as $missing_id) {
    echo $missing_id . "<br>";
}

// Close the database connection
$conn->close();

?>
