<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 4:41 AM
 */

include 'database.php';

// Execute the SQL query
$sql = "SELECT `dep` FROM `flights` ORDER BY `dep`";
$result = $conn->query($sql);
$sql2 = "SELECT `dest` FROM `flights` ORDER BY `dest`";
$result2 = $conn->query($sql2);
$departureLocation = $_POST['departure'];
$destinationLocation = $_POST['destination'];
// Simulated flight data array
$sql3 = "SELECT * FROM flights WHERE dep = '$departureLocation' AND dest = '$destinationLocation' ";
$result3 = $conn->query($sql3);
$count = 0;
// Check if the query was successful
if ($result3) {
    // Fetch the rows from the result set
    while ($row3 = mysqli_fetch_assoc($result3)) {
        // Access the flight data using column names
        $from = $row3['dep'];
        $to = $row3['dest'];
        $departureDate = $row3['departure_date'];
        $departureTime = $row3['departure_time'];
        $arrivalDate = $row3['arrival_date'];
        $arrivalTime = $row3['arrival_time'];
        $airline = $row3['airline'];
        $duration = $row3['duration'];
        $price = $row3['price'];
        $count++;

    }


} else {
    // Handle the case when the query fails
    echo "Error executing query: " . mysqli_error($conn);
}
include 'header.php';
?>

<div class="jumbotron flbg">
    <div class="container">
        <h1>Search for Flights</h1>
        <p>Start planning your trip by searching for the best flight options.</p>
        <form class="search-bar" action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input class="form-control" name="departure" list="datalistOptions" id="exampleDataList"
                           placeholder="Departure City">
                    <datalist id="datalistOptions">
                        <?php // Check if any results were found
                        if ($result->num_rows > 0) {
                        // Output the results
                        while ($row = $result->fetch_assoc()) {
                        ?>

                        <option value="<?php echo $row['dep']; ?>">

                            <?php
                            }
                            } else {
                                echo "No results found.";
                            } ?>
                    </datalist>
                </div>
                <div class="form-group col-md-6">
                    <input class="form-control" name="destination" list="datalistOptions2" id="exampleDataList2"
                           placeholder="Destination City">
                    <datalist id="datalistOptions2">
                        <?php
                        // Check if any results were found
                        if ($result2->num_rows > 0) {
                        // Output the results
                        while ($row2 = $result2->fetch_assoc()) {
                        ?>

                        <option value="<?php echo $row2['dest']; ?>">

                            <?php
                            }
                            } else {
                                echo "No results found.";
                            } ?>
                    </datalist>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" id="inputDeparture">
                </div>
                <div class="form-group col-md-6">
                    <input type="date" class="form-control" id="inputReturn">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Search Flights</button>
        </form>

    </div>
</div>
<?php
//Loop for destination data
for ($i = 0;
     $i < $count;
     $i++) {
    ?>
    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Flight from <?php echo $from; ?> to <?php echo $to; ?></h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <h5><i class="fas fa-plane-departure"></i> Departure</h5>
                        <p><i class="far fa-calendar-alt"></i> <?php echo $departureDate; ?></p>
                        <p><i class="far fa-clock"></i> <?php echo $departureTime; ?></p>
                        <p><i class="fas fa-plane"></i> <?php echo $airline ?></p>
                    </div>
                    <div class="col-md-4">
                        <h5><i class="fas fa-plane-arrival"></i> Arrival</h5>
                        <p><i class="far fa-calendar-alt"></i> <?php echo $arrivalDate; ?></p>
                        <p><i class="far fa-clock"></i> <?php echo $arrivalTime; ?></p>
                        <p><i class="fas fa-plane"></i> <?php echo $airline; ?></p>
                    </div>
                    <div class="col-md-2">
                        <h5><i class="far fa-clock"></i> Duration</h5>
                        <p><?php echo $duration; ?></p>
                    </div>
                    <div class="col-md-2">
                        <h5><i class="fas fa-coins"></i> Price</h5>
                        <p><?php echo $price; ?></p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a aria-controls="flightDetails<?php echo $count; ?>" aria-expanded="false"
                   class="btn btn-primary collapsed" data-target="#flightDetails<?php echo $count; ?>"
                   data-toggle="collapse" href="#">
                    <i class="fas fa-info-circle"></i> Flight Details
                </a>
            </div>
            <div class="collapse" id="flightDetails<?php echo $count; ?>" style="">
                <div class="card-body" style="background-color: #e3f1ff;">
                    <div class="mt-4 row justify-content-center">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="pt-3 pl-3 pr-3 mb-3 card col-md-6">
                                    <p><strong><i class="fas fa-plane"></i> Airline:</strong> <?php echo $airline; ?>
                                    </p>
                                    <p><strong><i class="fas fa-plane"></i> Flight:</strong> <?php echo $from; ?>
                                        | <?php echo $to; ?></p>
                                </div>
                                <div class="ml-3 pt-3 card mb-3 col-md-5">
                                    <p><strong><i class="fas fa-star"></i> Class:</strong> Economy</p>
                                    <p><strong><i class="far fa-clock"></i> Duration:</strong> <?php echo $duration; ?>
                                    </p>
                                </div>
                                <div class="pt-3 pl-3 pr-3 card col-md-6">
                                    <div>
                                        <div class="">
                                            <p class=""><i class="mb-0 far fa-clock fa-fw align-middle"
                                                           style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Arrival
                                                    Time:</strong> <?php echo $arrivalTime; ?></p>
                                            <p class=""><i class="mb-0 fas fa-plane-arrival fa-fw align-middle"
                                                           style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Arrival
                                                    Airport:</strong> <?php echo $to; ?></p>
                                            <p class="mb-0"><i class="mb-0 fas fa-circle fa-fw align-middle"
                                                               style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p class="mb-0"><i
                                                        class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle"
                                                        style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p class="mb-0"><i
                                                        class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle"
                                                        style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p class="mb-0"><i
                                                        class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle"
                                                        style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p><i class="mb-0 fas fa-circle fa-fw align-middle"
                                                  style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p><i class="mb-0 far fa-clock fa-fw align-middle"
                                                  style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Departure
                                                    Time:</strong> <?php echo $departureTime; ?></p>
                                            <p><i class="mb-0 fas fa-plane-departure fa-fw align-middle"
                                                  style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Departure
                                                    Airport:</strong> <?php echo $from; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-3 pt-3 card col-md-5">
                                    <p class="mb-0"><strong><i class="fas fa-suitcase"></i> Baggage Allowance:</strong>
                                    </p>
                                    <ul>
                                        <li><strong><i class="fas fa-plane"></i> Flight:</strong> 7 kg</li>
                                        <li><strong><i class="fas fa-suitcase"></i> Cabin:</strong> 20 kg</li>
                                    </ul>
                                    <p><strong><i class="fas fa-coins"></i> Total (1
                                            Traveler):</strong> <?php echo $price; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php
    //Loop for destination data
}
?>

<?php
// Include the footer
include 'footer.php';

?>



