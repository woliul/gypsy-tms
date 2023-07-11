<?php
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
</style>
</head>
<body>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/img/logo/gypsy-white.svg" alt="Travel Explorer Logo" class="logo-img" style="width: 125px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" style="color: white"><i class="fas fa-search"></i> Explore</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../flights.php" style="color: white"><i class="fas fa-plane"></i> Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../hotels.php" style="color: white"><i class="fas fa-hotel"></i> Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../rentals.php" style="color: white"><i class="fas fa-car"></i> Car Rentals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../offer.php" style="color: white"><i class="fas fa-tag"></i> Deals</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



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
</style>



<div class="mt-4 container">
    <div class="row"><div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="mb-0">Flight from Abu Dhabi International (AUH) to Amsterdam (AMS)</h5>
                </div>
                <div class="card-body collapsed" aria-controls="flightDetails0" aria-expanded="false" data-target="#flightDetails0" data-toggle="collapse">
                    <div class="row">
                        <div class="col-md-4">
                            <h5><i class="fas fa-plane-departure"></i> Departure</h5>
                            <p><i class="far fa-calendar-alt"></i> 2023-08-10</p>
                            <p><i class="far fa-clock"></i> 12:15:00</p>
                            <p><i class="fas fa-plane"></i> KLM Royal Dutch Airlines</p>
                        </div>
                        <div class="col-md-4">
                            <h5><i class="fas fa-plane-arrival"></i> Arrival</h5>
                            <p><i class="far fa-calendar-alt"></i> 2023-08-10</p>
                            <p><i class="far fa-clock"></i> 23:45:00</p>
                            <p><i class="fas fa-plane"></i> KLM Royal Dutch Airlines</p>
                        </div>
                        <div class="col-md-2">
                            <h5><i class="far fa-clock"></i> Duration</h5>
                            <p>7 hours 30 minutes</p>
                        </div>
                        <div class="col-md-2">
                            <h5><i class="fas fa-coins"></i> Price</h5>
                            <p>USD 945</p>
                            <p aria-controls="flightDetails0" aria-expanded="false" data-target="#flightDetails0" data-toggle="collapse" class="text-right text-black-50 h5 collapsed"><i class="fa fa-angle-down"></i></p>
                        </div>
                    </div>
                </div>

                <div class="collapse" id="flightDetails0" style="">
                    <div class="card-body" style="background-color: #e3f1ff;">
                        <div class="mt-4 row justify-content-center">
                            <div class="col-md-12">
                                <div class="row justify-content-center">
                                    <div class="pt-3 pl-3 pr-3 mb-3 card col-md-6">
                                        <p><strong><i class="fas fa-plane"></i> Airline:</strong> KLM Royal Dutch Airlines                                    </p>
                                        <p><strong><i class="fas fa-plane"></i> Flight:</strong> Abu Dhabi International (AUH)                                        | Amsterdam (AMS)</p>
                                    </div>
                                    <div class="ml-3 pt-3 card mb-3 col-md-5">
                                        <p><strong><i class="fas fa-star"></i> Class:</strong> Economy</p>
                                        <p><strong><i class="far fa-clock"></i> Duration:</strong> 7 hours 30 minutes                                    </p>
                                    </div>
                                    <div class="pt-3 pl-3 pr-3 card col-md-6">
                                        <div>
                                            <div class="">
                                                <p class=""><i class="mb-0 far fa-clock fa-fw align-middle" style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Arrival
                                                        Time:</strong> 23:45:00</p>
                                                <p class=""><i class="mb-0 fas fa-plane-arrival fa-fw align-middle" style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Arrival
                                                        Airport:</strong> Amsterdam (AMS)</p>
                                                <p class="mb-0"><i class="mb-0 fas fa-circle fa-fw align-middle" style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                                </p>
                                                <p class="mb-0"><i class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle" style="display: inline-block;transform: rotate(90deg);  margin-right: 5px; font-size: 20px;"></i>
                                                </p>
                                                <p class="mb-0"><i class="mb-0 vertical-dash-icon fas fa-plane fa-fw align-middle" style="display: inline-block;transform: rotate(-90deg);  margin-right: 5px; font-size: 20px;"></i>
                                                </p>
                                                <p class="mb-0"><i class="mb-0 vertical-dash-icon fas fa-minus fa-fw align-middle" style="display: inline-block;transform: rotate(90deg);  margin-right: 5px; font-size: 20px;"></i>
                                                </p>
                                                <p><i class="mb-0 fas fa-circle fa-fw align-middle" style="display: inline-block; margin-right: 5px; font-size: 20px;"></i>
                                                </p>
                                                <p><i class="mb-0 far fa-clock fa-fw align-middle" style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Departure
                                                        Time:</strong> 12:15:00</p>
                                                <p><i class="mb-0 fas fa-plane-departure fa-fw align-middle" style="display: inline-block; margin-right: 5px; font-size: 20px;"></i><strong>Departure
                                                        Airport:</strong> Abu Dhabi International (AUH)</p>
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
                                                Traveler):</strong> USD 945</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card col-md-4" style="
    font-size: 80%;
">
            <div class="mt-3">
                <img alt="Eiffel Tower" class="card card-img-top mb-0" src="../assets/img/eiffel_tower.jpg">
                <div class="ml-0 pl-0 pr-0 mr-0 mb-2 card-text">


                    <!--Progressbar-->
                    <div class="pt-3 pl-3 pr-3 mt-3 mb-3 card ">
                        <p><strong><i class="fas fa-plane"></i> Airline:</strong> KLM Royal Dutch Airlines                                    </p>
                        <p><strong><i class="fas fa-plane"></i> Flight:</strong> AUH | AMS</p>
                    </div>
                </div>

                <hr class="mt-3">
                <div class="pl-3 pr-3 pt-3 card mt-3 mb-3">
                    <p><strong><i class="fas fa-star"></i> Class:</strong> Economy</p>
                    <p><strong><i class="far fa-clock"></i> Duration:</strong> 7 hours 30 minutes                                    </p>
                </div><hr class="mt-3"><div class="pl-3 pr-3 pt-3 card mt-3 mb-3">
                    <p class="mb-0"><strong><i class="fas fa-suitcase"></i> Baggage Allowance:</strong>
                    </p>
                    <ul>
                        <li><i class="fas fa-plane"></i> Flight: 7 kg</li>
                        <li><i class="fas fa-suitcase"></i> Cabin:
                            20 kg</li>
                    </ul>

                </div><hr class="mt-3">


                <div class="col order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">-$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>


                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>

                </div>



            </div>
        </div>
        <div class="col-md-8 order-md-1">
            <div class="card">


                <form class=" pl-4 pr-4 pt-4 pb-4 needs-validation" action="../../review/process_rating.php?destination=" method="POST">





                    <div class="row mb-0">
                        <div class="col-md-6 mb-0">
                            <label for="firstName">First name</label>
                            <div class="form-label-group">
                                <input name="first" autofocus="" class="form-control" id="firstName" placeholder="First name" required="" type="text">
                                <label for="firstName">Type your First name</label>
                            </div>

                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-0">
                            <label for="lastName">Last name</label>
                            <div class="form-label-group">
                                <input name="last" autofocus="" class="form-control" id="lastName" placeholder="Last name" required="" type="text">
                                <label for="lastName">Type your Last name</label>
                            </div>

                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="username">Username</label>
                        <div class="form-label-group">
                            <input name="username" autofocus="" class="form-control" id="username" placeholder="Username" required="" type="text">
                            <label class="" for="username">Type your Username</label>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>

                        </div>
                    </div>


                    <div class="mb-3">

                        <label for="email">Email <small class="text-muted">(optional)</small></label>
                        <div class="form-label-group">
                            <input name="email" autofocus="" class="form-control" id="email" placeholder="Email address" type="email">
                            <label for="email">Type E-mail address</label>
                        </div>
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>

                    <div class="mt-4 custom-control custom-checkbox">
                        <input class="custom-control-input" id="same-address" required="" type="checkbox">
                        <label class="custom-control-label" for="same-address">I agree to Terms and Conditions.</label>
                    </div>


                    <hr class="mt-4">
                    <div class="row">

                        <div class="col order-md-1">
                            <h4 class="mb-3">Billing address</h4>
                            <form class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName">First name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid first name is required.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName">Last name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                        <div class="invalid-feedback">
                                            Valid last name is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="username">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">@</span>
                                        </div>
                                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                                        <div class="invalid-feedback" style="width: 100%;">
                                            Your username is required.
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                    <div class="invalid-feedback">
                                        Please enter a valid email address for shipping updates.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                                    <div class="invalid-feedback">
                                        Please enter your shipping address.
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                                    <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                                </div>

                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <select class="custom-select d-block w-100" id="country" required="">
                                            <option value="">Choose...</option>
                                            <option>United States</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid country.
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <select class="custom-select d-block w-100" id="state" required="">
                                            <option value="">Choose...</option>
                                            <option>California</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Zip code required.
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="same-address">
                                    <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="save-info">
                                    <label class="custom-control-label" for="save-info">Save this information for next time</label>
                                </div>
                                <hr class="mb-4">

                                <h4 class="mb-3">Payment</h4>

                                <div class="d-block my-3">
                                    <div class="custom-control custom-radio">
                                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                                        <label class="custom-control-label" for="credit">Credit card</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                        <label class="custom-control-label" for="debit">Debit card</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                        <label class="custom-control-label" for="paypal">PayPal</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-name">Name on card</label>
                                        <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                                        <small class="text-muted">Full name as displayed on card</small>
                                        <div class="invalid-feedback">
                                            Name on card is required
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="cc-number">Credit card number</label>
                                        <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Credit card number is required
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-expiration">Expiration</label>
                                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Expiration date required
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="cc-cvv">CVV</label>
                                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                                        <div class="invalid-feedback">
                                            Security code required
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-4">

                            </form>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<footer class="footer">
    <div class="container">
        <p>© 2023Gypsy Travel Managment. All rights reserved.</p>
    </div>
</footer>

<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.slim.min.js"></script>
<script src="../assets/js/jquery.min.map"></script>
<script src="../assets/js/jquery.slim.min.map"></script>
<script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/form-validation.js"></script>




</body>


<?php
// Include the footer
include 'footer.php';
?>

