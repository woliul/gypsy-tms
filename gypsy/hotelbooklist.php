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
                            <div class="col-sm-3">
                                <img alt="image not found" class="card card-img-top mb-0" src="assets/img/assets/img/<?php echo $img[$i]; ?>">
                            </div>
                            <div class="bdfont80 col-sm-5">
                                <div class="mb-2">
                                    <h2 class="mb-1">Long Beach Hotel</h2><!-- Hotel Name -->
                                    <p class="mb-0"><i data-star="4.0" style="font-size: 100%;"></i></p><!-- Hotel Star -->
                                    <p class="mb-0"><strong> Cox's Bazar</strong> 21.3 km from center</p><!-- Location Distance -->
                                </div>
                                <h5 class="font-size-16 mb-0">Superior King Room</h5><!-- Main Features -->
                                <p class="font-size-15 mb-4">1 queen bed</p><!-- Special Features -->
                                <div class="bdfont80 text-success">
                                    <p class="mb-1">FREE cancellation</p><!-- Offer -->
                                    <p class="mb-1"><strong>No prepayment needed</strong> – pay at the property</p><!-- Attractions -->
                                </div>
                            </div>
                            <div class="rightend col-sm-4">
                                <div class="text-sm-end">
                                    <div>
                                        <h5 class=" mb-1">
                                            <span class="badge bg-success text-white" style="margin-top: 0.35rem;">4.5</span><!-- User Ratings -->
                                        </h5>
                                        <p class="bdfont80 text-muted mb-1">118 reviews</p><!--Ratings Counts-->
                                    </div>
                                    <h5 class="text-white h4 mb-1">|</h5>
                                    <div class="mt-4">
                                        <p class="text-muted mb-1 bdfont80">8 nights, 1 adult</p><!-- General Offers -->
                                        <h5 class="h4 mb-1">BDT 44,912</h5><!-- Price -->
                                        <p class="text-muted bdfont80 ">+BDT 7,410 taxes and charges</p></div><!-- Tax and charges -->
                                </div>
                            </div>
                        </div><!-- end row -->


                        <div class=" text-muted">

                            <div class="d-print-none">
                                <div class="float-right">
                                    <a href="#" class="btn btn-primary w-md">See availability<i class="ml-1 fas fa-chevron-right" style="font-size: 71%;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
    </div>



<?php
// Include the footer
include 'footer.php';
?>

