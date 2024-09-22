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

include 'header.php';
?>

<!-- Landing page -->
<div class="jumbotron flight-land" style="background-image: url(../assets/img/flbg.jpg);background-size: cover; background-blend-mode: multiply;">
    <div class="container">
        <form class="search-bar" action="../flightresult.php" method="GET">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="inputFrom" placeholder="Departure City">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="inputTo" placeholder="Destination City" name="destination">
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
<!-- Landing page End-->
<div class="container">
    <h1>Flight Search Results</h1>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="mb-0">Flight from Dhaka (DAC) to Cox's Bazar (CXB)</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h5><i class="fas fa-plane-departure"></i> Departure</h5>
                    <p><i class="far fa-calendar-alt"></i> July 10, 2023</p>
                    <p><i class="far fa-clock"></i> 15:15</p>
                    <p><i class="fas fa-plane"></i> Biman Bangladesh Airlines</p>
                </div>
                <div class="col-md-4">
                    <h5><i class="fas fa-plane-arrival"></i> Arrival</h5>
                    <p><i class="far fa-calendar-alt"></i> July 10, 2023</p>
                    <p><i class="far fa-clock"></i> 16:30</p>
                    <p><i class="fas fa-plane"></i> Biman Bangladesh Airlines</p>
                </div>
                <div class="col-md-2">
                    <h5><i class="far fa-clock"></i> Duration</h5>
                    <p>1 hour 15 minutes</p>
                </div>
                <div class="col-md-2">
                    <h5><i class="fas fa-coins"></i> Price</h5>
                    <p>BDT 4,699</p>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a aria-controls="flightDetails1" aria-expanded="false" class="btn btn-primary collapsed" data-target="#flightDetails1" data-toggle="collapse" href="#">
                <i class="fas fa-info-circle"></i> Flight Details
            </a>
        </div>
        <div class="collapse show" id="flightDetails1" style="">
            <div class="card-body" style="background-color: #e3f1ff;">

                <div class="mt-4 row justify-content-center">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="pt-3 pl-3 pr-3 mb-3 card col-md-6 ">
                                <p><strong><i class="fas fa-plane"></i> Airline:</strong> Biman Bangladesh Airlines</p>
                                <p><strong><i class="fas fa-plane"></i> Flight:</strong> BG 437 | DH8</p>


                            </div><div class="ml-3 pt-3 card mb-3 col-md-5">


                                <p><strong><i class="fas fa-star"></i> Class:</strong> Economy</p>
                                <p><strong><i class="far fa-clock"></i> Duration:</strong> 1 hour 15 minutes</p>
                            </div><div class="pt-3 pl-3 pr-3 card col-md-6">
                                <div>
                                    <div class="">


                                        <p class=""> <i class="mb-0 far fa-clock fa-fw align-middle" style="display: inline-block;/* transform: rotate(90deg); */ margin-right: 5px; font-size: 20px;"></i><strong>Arrival Time:</strong> 16:30, Mon, 10 Jul, 2023</p>
                                        <p class=""> <i class="mb-0 fas fa-plane-arrival fa-fw align-middle" style="display: inline-block;/* transform: rotate(90deg); */ margin-right: 5px; font-size: 20px;"></i><strong>Arrival Airport:</strong> CXB</p><p class="mb-0"><i class="mb-0 fas fa-circle fa-fw align-middle" style="display: inline-block;/* transform: rotate(90deg); */ margin-right: 5px; font-size: 20px;"></i></p><p class="mb-0"><i class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle" style="display: inline-block;transform: rotate(90deg);  margin-right: 5px; font-size: 20px;"></i></p>
                                        <p class="mb-0"><i class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle" style="display: inline-block;transform: rotate(90deg); margin-right: 5px; font-size: 20px;"></i></p>
                                        <p class="mb-0"><i class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle" style="display: inline-block;transform: rotate(90deg); margin-right: 5px; font-size: 20px;"></i></p>
                                        <p><i class="mb-0 fas fa-circle fa-fw align-middle" style="display: inline-block;/* transform: rotate(90deg); */ margin-right: 5px; font-size: 20px;"></i></p><p><i class="mb-0 far fa-clock fa-fw align-middle" style="display: inline-block;/* transform: rotate(90deg); */ margin-right: 5px; font-size: 20px;"></i><strong> Departure Time:</strong> 15:15, Mon, 10 Jul,
                                            2023</p><p><i class="mb-0 fas fa-plane-departure fa-fw align-middle" style="display: inline-block;/* transform: rotate(90deg); */ margin-right: 5px; font-size: 20px;"></i><strong> Departure Airport:</strong> DAC</p>
                                    </div>


                                </div>
                            </div><div class="ml-3 pt-3 card col-md-5">
                                <p class="mb-0"><strong><i class="fas fa-suitcase"></i> Baggage Allowance:</strong></p>
                                <ul>
                                    <li><strong><i class="fas fa-plane"></i> Flight:</strong> 7 kg</li>
                                    <li><strong><i class="fas fa-suitcase"></i> Cabin:</strong> 20 kg</li>
                                </ul>
                                <p><strong><i class="fas fa-coins"></i> Total (1 Traveler):</strong> BDT 4,699</p>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>

    <!-- Add more flight cards here -->

</div>
<?php
// Include the footer
include 'footer.php';
?>
