<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 4:41 AM
 */
/* echo "Debug";*/
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
$from = array();
$to = array();
$departureDate = array();
$departureTime = array();
$arrivalDate = array();
$arrivalTime = array();
$airline = array();
$duration = array();
$price = array();
// Check if the query was successful
if ($result3) {
    // Fetch the rows from the result set
    while ($row3 = mysqli_fetch_assoc($result3)) {
        // Access the flight data using column names
        $from[$count] = $row3['dep'];
        $id[$count] = $row3['id'];
        $to[$count] = $row3['dest'];
        $departureDate[$count] = $row3['departure_date'];
        $departureTime[$count] = $row3['departure_time'];
        $arrivalDate[$count] = $row3['arrival_date'];
        $arrivalTime[$count] = $row3['arrival_time'];
        $airline[$count] = $row3['airline'];
        $duration[$count] = $row3['duration'];
        $price[$count] = $row3['price'];
        $count++;

    }


} else {
    // Handle the case when the query fails
    echo "Error executing query: " . mysqli_error($conn);
}
include 'header.php';
?>
<style>
    .vertical-line {
        position: relative;
    }

    .vertical-line:before {
        content: "";
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 2px;
        height: 100%;
        max-height: 30px;
        background-color: #000; /* Adjust the color as needed */
    }

    .arrival,
    .departure {
        position: relative;
        width: 100%;
        padding-left: 10px;
        margin-bottom: 10px;
    }

</style>
<div class="jumbotron flbg">
    <div class="container">
        <h1>Search for Flights</h1>
        <p>Start planning your trip by searching for the best flights.</p>
        <form class="search-bar" action="" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">

                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="pl-2 input-group-text pr-2 bg-white border-white">
                            <i class="fas fa-plane-departure"></i>
                        </span>
                        </div>
                        <input class="form-control border-white pl-0" name="departure" list="datalistOptions"
                               id="exampleDataList"
                               placeholder="Departure City">
                    </div>
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

                    <div class="input-group">
                        <input class="form-control border-white" name="destination" list="datalistOptions2"
                               id="exampleDataList2"
                               placeholder="Destination City">
                        <div class="input-group-prepend">
                        <span style=" border-top-right-radius: 2px; border-bottom-right-radius: 2px;"
                              class="pl-2 input-group-text pr-2 bg-white border-white">
                            <i class="fas fa-plane-arrival"></i>
                        </span>
                        </div>
                    </div>
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
            <button type="submit" name="submit" class="btn btn-primary">Search Flights</button>
        </form>

    </div>
</div>
<?php
//Loop for destination data
for ($i = 0; $i < $count; $i++) {
    ?>

    <div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <h5 class="mb-0">Flight from <span name="dep"> <strong> <?php echo $from[$i]; ?> </strong></span> to
                    <span name="dest"><strong><?php echo $to[$i]; ?></strong></span></h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row collapsed" aria-controls="flightDetails<?php echo $i; ?>" aria-expanded="false"
                         data-target="#flightDetails<?php echo $i; ?>" data-toggle="collapse">
                        <div class="col-md-4">
                            <h5><i class="fas fa-plane-departure"></i> Departure</h5>
                            <p name="departure_date" class="mb-0"><i
                                        class="fas fa-calendar-alt"></i> <?php echo $departureDate[$i]; ?></p>
                            <p name="departure_time"><i class="fas fa-clock"></i> <?php echo $departureTime[$i]; ?></p>
                            <p name="airline"><i class="fas fa-plane"
                                                 style="display: inline-block;transform: rotate(-90deg);  margin-right: 5px; font-size: 20px;"></i> <?php echo $airline[$i]; ?>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h5><i class="fas fa-plane-arrival"></i> Arrival</h5>
                            <p name="arrival_date" class="mb-0"><i
                                        class="fas fa-calendar-alt"></i> <?php echo $arrivalDate[$i]; ?></p>
                            <p name="arrival_time"><i class="fas fa-clock"></i> <?php echo $arrivalTime[$i]; ?></p>
                            <p name="airline"><i class="fas fa-plane"
                                                 style="display: inline-block;transform: rotate(90deg);  margin-right: 5px; font-size: 20px;"></i> <?php echo $airline[$i]; ?>
                            </p>
                        </div>
                        <div class="col-md-2">
                            <h5><i class="fas fa-clock"></i> Duration</h5>
                            <p name="duration"><?php echo $duration[$i]; ?></p>
                            <p class="card-text"><i class="fas fa-exchange-alt"></i> Stops: Non-stop</p>
                        </div>
                        <div class="col-md-2">
                            <h5><i class="fas fa-coins"></i> Price</h5>
                            <p name="duration"><?php echo $price[$i]; ?></p>
                            <p aria-controls="flightDetails<?php echo $i; ?>" aria-expanded="false"
                               data-target="#flightDetails<?php echo $i; ?>" data-toggle="collapse"
                               class="collapsed text-right h4"><i class="fa fa-angle-down"></i></p>
                        </div>
                    </div>
                    <a href="flightbooking.php?destination=<?php echo urlencode($id[$i]); ?>" type="submit"
                       class="btn btn-primary"><i class="fas fa-check mr-2"></i>Book Now</a>

            </div>

            <div class="collapse" id="flightDetails<?php echo $i; ?>" style="">
                <div class="card-body" style="background-color: #e3f1ff;">
                    <div class="mt-4 row justify-content-center">
                        <div class="col-md-12">
                            <div class="row justify-content-center">
                                <div class="pt-3 pl-3 pr-3 mb-3 card col-md-6">
                                    <p><strong><i class="fas fa-plane"></i>
                                            Airline:</strong> <?php echo $airline[$i]; ?>
                                    </p>
                                    <p><strong><i class="fas fa-plane"></i> Flight:</strong> <?php echo $from[$i]; ?>
                                        | <?php echo $to[$i]; ?></p>
                                </div>
                                <div class="ml-3 pt-3 card mb-3 col-md-5">
                                    <p><strong><i class="fas fa-star"></i> Class:</strong> Economy</p>
                                    <p><strong><i class="fas fa-clock"></i>
                                            Duration:</strong> <?php echo $duration[$i]; ?>
                                    </p>
                                </div>
                                <div class="pt-3 pl-3 pr-3 card col-md-6">
                                    <div>
                                        <div class="">
                                            <p class=""><i class="mb-0 fas fa-clock fa-fw align-middle"
                                                           style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Arrival
                                                    Time:</strong> <?php echo $arrivalTime[$i]; ?></p>
                                            <p class=""><i class="mb-0 fas fa-plane-arrival fa-fw align-middle"
                                                           style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Arrival
                                                    Airport:</strong> <?php echo $to[$i]; ?></p>
                                            <p class="mb-0"><i class="mb-0 fas fa-circle fa-fw align-middle"
                                                               style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p class="mb-0"><i
                                                        class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle"
                                                        style="display: inline-block;transform: rotate(90deg);  margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p class="mb-0"><i
                                                        class="mb-0 vertical-dash-icon fas fa-plane fa-fw align-middle"
                                                        style="display: inline-block;transform: rotate(-90deg);  margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p class="mb-0"><i
                                                        class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle"
                                                        style="display: inline-block;transform: rotate(90deg);  margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p><i class="mb-0 fas fa-circle fa-fw align-middle"
                                                  style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                            </p>
                                            <p><i class="mb-0 fas fa-clock fa-fw align-middle"
                                                  style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Departure
                                                    Time:</strong> <?php echo $departureTime[$i]; ?></p>
                                            <p><i class="mb-0 fas fa-plane-departure fa-fw align-middle"
                                                  style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Departure
                                                    Airport:</strong> <?php echo $from[$i]; ?></p>
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
                                            Traveler):</strong> <?php echo $price[$i]; ?></p>
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
<div class="container">
    <span style="
    font-family: Pangea Text,Helvetica,Arial,sans-serif;
    font-size: 14px;
    font-weight: 600;
" class="text-muted">PLAN YOUR TRIP</span>
    <h1 style="
    font-family: Pangea Text,Helvetica,Arial,sans-serif;
    font-size: 48px;
    font-weight: 600;
">Where to next?</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="assets/img/flightbody1.jpg" class="card-img-top" alt="Destination 1">

            </div>
            <h3 class="card-title font-weight-bold">Indonesia</h3>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="assets/img/flightbody2.jpg" class="card-img-top" alt="Destination 1">

            </div>
            <h3 class="card-title font-weight-bold">Amazon</h3>
        </div>
        <div class="col-md-4">
            <div class="card mb-3">
                <img src="assets/img/flightbody3.jpg" class="card-img-top" alt="Destination 1">

            </div>
            <h3 class="card-title font-weight-bold">Dominica</h3>
        </div>

    </div>

    <h2>Top Deals</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="assets/img/bali.jpg" class="card-img-top" alt="Deal 1">
                <div class="card-body">
                    <h5 class="card-title">Flight + Hotel to Bali</h5>
                    <p class="card-text">Experience the beauty and tranquility of Bali with our special package.</p>
                    <a href="#" class="btn btn-primary">View Deal</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/img/cancun.jpg" class="card-img-top" alt="Deal 2">
                <div class="card-body">
                    <h5 class="card-title">All-Inclusive Resort in Cancun</h5>
                    <p class="card-text">Enjoy a luxurious and worry-free vacation in Cancun.</p>
                    <a href="#" class="btn btn-primary">View Deal</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/img/europe.jpg" class="card-img-top" alt="Deal 3">
                <div class="card-body">
                    <h5 class="card-title">European Cruise Package</h5>
                    <p class="card-text">Embark on a breathtaking journey through Europe's iconic cities.</p>
                    <a href="#" class="btn btn-primary">View Deal</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// Include the footer
include 'footer.php';

?>



