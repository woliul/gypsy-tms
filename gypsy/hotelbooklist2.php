<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

//Rating Test Page

session_start();
include_once 'database.php';
if (isset($_SESSION['user']) != "") {

}
/*$username = $_SESSION['user'];*/
include 'header.php';
include 'func.php';
include 'functions.php';
?>

<style>


    .circle-image img {

        border: 6px solid #fff;
        border-radius: 100%;
        padding: 0px;
        top: -28px;
        position: relative;
        width: 70px;
        height: 70px;
        border-radius: 100%;
        z-index: 1;
        background: #e7d184;
        cursor: pointer;

    }


    .dot {
        height: 18px;
        width: 18px;
        background-color: blue;
        border-radius: 50%;
        display: inline-block;
        position: relative;
        border: 3px solid #fff;
        top: -48px;
        left: 186px;
        z-index: 1000;
    }

    .name {
        margin-top: -21px;
        font-size: 18px;
    }


    .fw-500 {
        font-weight: 500 !important;
    }


    .start {

        color: green;
    }

    .stop {
        color: red;
    }


    .rate {

        border-bottom-right-radius: 12px;
        border-bottom-left-radius: 12px;

    }


    .rating {
        display: flex;
        flex-direction: row-reverse;
        justify-content: left;
    }

    .rating > input {
        display: none
    }

    .rating > label {
        position: relative;
        width: 1em;
        font-size: 30px;
        font-weight: 300;
        color: #008dfb;
        cursor: pointer
    }

    .rating > label::before {
        content: "\f005"; /* Font Awesome star icons */
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 900;
        opacity: 40%;
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before {
        opacity: 1 !important
    }

    .rating > input:checked ~ label:before {
        opacity: 1
    }

    .rating:hover > input:checked ~ label:before {
        opacity: 0.4
    }


    .buttons {
        top: 36px;
        position: relative;
    }


    .rating-submit {
        border-radius: 15px;
        color: #fff;
        height: 49px;
    }


    .rating-submit:hover {

        color: #fff;
    }

    /*    Data*/

    [data-star] {
        text-align: left;
        font-style: normal;
        display: inline-block;
        position: relative;
        unicode-bidi: bidi-override;
        font-size: xx-large;
    }

    [data-star]::before {
        display: block;
        content: '\f005\f005\f005\f005\f005'; /* Font Awesome star icons */
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        color: #7eb4ef;
    }

    [data-star]::after {
        white-space: nowrap;
        position: absolute;
        top: 0;
        left: 0;
        content: '\f005\f005\f005\f005\f005'; /* Font Awesome star icons */
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 900;
        width: 0;
        color: #027bff;
        overflow: hidden;
        height: 100%;
    }

    [data-star^="0.1"]::after {
        width: 2%
    }

    [data-star^="0.2"]::after {
        width: 4%
    }

    [data-star^="0.3"]::after {
        width: 6%
    }

    [data-star^="0.4"]::after {
        width: 8%
    }

    [data-star^="0.5"]::after {
        width: 10%
    }

    [data-star^="0.6"]::after {
        width: 12%
    }

    [data-star^="0.7"]::after {
        width: 14%
    }

    [data-star^="0.8"]::after {
        width: 16%
    }

    [data-star^="0.9"]::after {
        width: 18%
    }

    [data-star^="1"]::after {
        width: 20%
    }

    [data-star^="1.1"]::after {
        width: 22%
    }

    [data-star^="1.2"]::after {
        width: 24%
    }

    [data-star^="1.3"]::after {
        width: 26%
    }

    [data-star^="1.4"]::after {
        width: 28%
    }

    [data-star^="1.5"]::after {
        width: 30%
    }

    [data-star^="1.6"]::after {
        width: 32%
    }

    [data-star^="1.7"]::after {
        width: 34%
    }

    [data-star^="1.8"]::after {
        width: 36%
    }

    [data-star^="1.9"]::after {
        width: 38%
    }

    [data-star^="2"]::after {
        width: 40%
    }

    [data-star^="2.1"]::after {
        width: 42%
    }

    [data-star^="2.2"]::after {
        width: 44%
    }

    [data-star^="2.3"]::after {
        width: 46%
    }

    [data-star^="2.4"]::after {
        width: 48%
    }

    [data-star^="2.5"]::after {
        width: 50%
    }

    [data-star^="2.6"]::after {
        width: 52%
    }

    [data-star^="2.7"]::after {
        width: 54%
    }

    [data-star^="2.8"]::after {
        width: 56%
    }

    [data-star^="2.9"]::after {
        width: 58%
    }

    [data-star^="3"]::after {
        width: 60%
    }

    [data-star^="3.1"]::after {
        width: 62%
    }

    [data-star^="3.2"]::after {
        width: 64%
    }

    [data-star^="3.3"]::after {
        width: 66%
    }

    [data-star^="3.4"]::after {
        width: 68%
    }

    [data-star^="3.5"]::after {
        width: 70%
    }

    [data-star^="3.6"]::after {
        width: 72%
    }

    [data-star^="3.7"]::after {
        width: 74%
    }

    [data-star^="3.8"]::after {
        width: 76%
    }

    [data-star^="3.9"]::after {
        width: 78%
    }

    [data-star^="4"]::after {
        width: 80%
    }

    [data-star^="4.1"]::after {
        width: 82%
    }

    [data-star^="4.2"]::after {
        width: 84%
    }

    [data-star^="4.3"]::after {
        width: 86%
    }

    [data-star^="4.4"]::after {
        width: 88%
    }

    [data-star^="4.5"]::after {
        width: 90%
    }

    [data-star^="4.6"]::after {
        width: 92%
    }

    [data-star^="4.7"]::after {
        width: 94%
    }

    [data-star^="4.8"]::after {
        width: 96%
    }

    [data-star^="4.9"]::after {
        width: 98%
    }

    [data-star^="5"]::after {
        width: 100%
    }

    .rightend {
        text-align: end;
    }

    .bgbody {
        background-color: aliceblue;
    }

    .bdfont80 {
        font-size: 80%;
    }

    .bdfont90 {
        font-size: 90%;
    }
</style>
</head>
<body class="bgbody">

<div class="container">
    <div class="row mb-4 mt-4">
        <div class="col-lg-12">
            <div class="card pt-1 pr-2 pl-2">
                <div class="card-body">
                    <div class="row">

                        <div class="bdfont80 col-7">
                            <div class="mb-2">
                                <h2 class="mb-1">Long Beach Hotel</h2><!-- Hotel Name -->
                                <p class="mb-0"><i data-star="4.0" style="font-size: 100%;"></i></p><!-- Hotel Star -->
                                <p class="mb-0"><strong> Cox's Bazar</strong> 21.3 km from center</p>
                                <!-- Location Distance -->
                            </div>
                            <div class="">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Property Amenities</h5>
                                        <ul class="list-unstyled text-muted">
                                            <li><i class="mr-2 fas fa-parking"></i>Paid private parking nearby</li>
                                            <li><i class="fas fa-wifi mr-1"></i>Free High-Speed Internet (WiFi)</li>
                                            <li><i class="fas fa-dumbbell mr-1"></i>Fitness Center with Gym / Workout
                                                Room
                                            </li>
                                            <li><i class="fas fa-glass-martini-alt mr-1"></i>Bar / lounge</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 pt-3 mt-3">
                                        <ul class="list-unstyled text-muted">
                                            <li><i class="fas fa-bicycle mr-1"></i>Bicycles available</li>
                                            <li><i class="fas fa-chess mr-1"></i>Board games / puzzles</li>
                                            <li><i class="fas fa-book mr-1"></i>Books, DVDs, music for children</li>
                                            <li><i class="fas fa-chair mr-1"></i>Highchairs available</li>
                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <!-- Main Features -->
                            <!-- Special Features -->
                            <div class="bdfont80 text-success">
                                <p class="mb-1">FREE cancellation</p><!-- Offer -->
                                <p class="mb-1"><strong>No prepayment needed</strong> – pay at the property</p>
                                <!-- Attractions -->
                            </div>
                        </div>
                        <div class="bdfont80 rightend col-sm-5 mt-0">
                            <div class="text-sm-end">
                                <div>
                                    <h5 class=" mb-1">
                                        <span class="badge bg-success text-white"
                                              style="margin-top: 0.35rem;">4.5</span><!-- User Ratings -->
                                    </h5>
                                    <p class="bdfont80 text-muted mb-1">118 reviews</p><!--Ratings Counts-->
                                </div>
                                <div class="col-md-12 mt-4 pt-3 pl-0 pr-0">


                                    <div class="row">
                                        <div class="col-sm-6 text-left">
                                            <h5>Room Types</h5>
                                            <ul class="list-unstyled list-unstyled text-muted">
                                                <li><i class="fas fa-smoking-ban mr-1"></i>Non-smoking rooms</li>
                                            </ul>
                                            <ul class="list-unstyled text-muted list-unstyled">
                                                <li><i class="fas fa-city mr-1"></i>City view</li>
                                                <li><i class="fas fa-door-closed mr-1"></i>Suites</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6">
                                            <h5 class="text-sm-end">Room Features</h5>
                                            <ul class="list-unstyled text-muted">
                                                <li>Allergy-free room <i class="fas fa-seedling"></i></li>

                                                <li>Air conditioning <i class="fas fa-wind"></i></li>
                                                <li>Flatscreen TV <i class="fas fa-tv"></i></li>
                                                <li>Minibar <i class="fas fa-glass-cheers"></i></li>
                                                <li>Bath / shower <i class="fas fa-bath"></i></li>
                                                <li>Housekeeping <i class="fas fa-broom"></i></li>
                                                <li>Desk <i class="fas fa-desktop"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-sm-6 pt-3 mt-3">

                                        </div>
                                    </div>
                                </div>

                                <!-- Tax and charges -->
                            </div>
                        </div>
                    </div><!-- end row -->


                </div>


            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active carousel-item-left">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item carousel-item-next carousel-item-left">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title">Superior Twin Room</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 24 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 1 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>


            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title">Junior Suite, 1 Bedroom
                    </h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 32 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 1 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title">Luxury Suite, 1 Bedroom, Balcony, City View
                    </h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 65 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 4</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 1 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title" style="
">Deluxe Twin Room, 2 Twin Beds</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 27 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 2 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>


            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title" style="
">Junior Studio, 1 Bedroom</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 34 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 2 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title" style="
">Deluxe Double Room, 1 King Bed</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 34 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 2 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title">Executive Twin Room</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 29 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 3 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>


            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-next carousel-item-left">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item active carousel-item-left">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title">1 Bedroom Suite</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 45 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 3 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>
            <div class="card">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item carousel-item-next carousel-item-left">
                            <img class="d-block w-100" src="assets/img/newyork.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item active carousel-item-left">
                            <img class="d-block w-100" src="assets/img/tokyo.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="card-body" style="
    font-size: 80%;
">
                    <h5 class="card-title">Superior Room</h5>

                    <p class="card-text mb-0"><i class="fas fa-ruler-combined"></i> 24 sq m</p>
                    <p class="card-text mb-0"><i class="fas fa-user-friends"></i> Sleeps 2</p>
                    <p class="card-text mb-0"><i class="fas fa-wifi"></i> Free WiFi</p>
                    <p class="card-text mb-1"><i class="fas fa-bed"></i> 2 Twin Beds</p>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <span class="form-check-label col-6" for="inlineRadio1">Non-refundable</span>
                        <span class="form-check-label col-6" for="" style="text-align: end;">+ USD 0</span></div>
                    <div class="form-check form-check-inline col-12">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                               value="option1">
                        <label class="form-check-label col-6" for="inlineRadio1">Fully refundable before Jul 24,
                            2023</label><span class="form-check-label col-6" for=""
                                              style="text-align: end;">+ USD 0</span>
                    </div>
                    <p class="card-text text-muted" style="
    font-size: 80%;
">Reserve now, pay later</p><h5><span class="badge bg-danger text-white" style="margin-top: 0.35rem;">25% off</span>
                    </h5>
                    <h5 class="h4 mb-1">BDT 44,912
                        <del class="ml-2 h6 mb-1">USD 434</del>
                    </h5>
                    <p></p>
                    <p class="card-text">USD 417 total <br>
                        includes taxes &amp; fees<span class="card-text text-danger float-right">We have 3 left</span>
                    </p>

                    <p class="card-text text-primary"><i class="fas fa-info-circle mr-1"></i>Price details

                        <span class="card-text btn btn-primary float-right">Reserve
<i class="ml-1 fas fa-chevron-right"></i></span></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
include 'footer.php';
?>

