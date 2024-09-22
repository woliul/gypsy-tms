<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

//Rating Test Page

session_start();
include_once 'database.php';
if (isset($_SESSION['user']) != "") {

}
if (isset($_GET['invid'])) {// Destination or City Places
    $invid = $_GET['invid'];
}

$queryfl = "SELECT * FROM flightbook WHERE invoiceid  = '" . $invid . "'";
$resultfl = $conn->query($queryfl);
if ($resultfl->num_rows > 0) {
    while ($rowfl = $resultfl->fetch_assoc()) {
        $from = $rowfl['dep'];
        $to = $rowfl['dest'];
        $departureDate = $rowfl['departure_date'];
        $departureTime = $rowfl['departure_time'];
        $airline = $rowfl['airline'];
        $price = $rowfl['fare'];
        $sertax = $rowfl['sertax'];
        $total = $rowfl['total'];
        $orderid = $rowfl['orderid'];
        $invdate = $rowfl['invoicedate'];
        $first = $rowfl['first'];
        $last = $rowfl['last'];
        $address = $rowfl['address'];
        $email = $rowfl['email'];
        $cell = $rowfl['cell'];
        $adultno = $rowfl['adultno'];
        $childno = $rowfl['childno'];
        $paytype = $rowfl['paytype'];
        $ccname = $rowfl['ccname'];
        $ccnumber = $rowfl['ccnumber'];
        $ccexpiration = $rowfl['ccexpiration'];
        $ccv = $rowfl['ccv'];
    }
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

    body {
        background-color: #eee;
    }


    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 1rem;
    }
</style>
</head>
<body>

<div class="container">
    <div class="row mb-4 mt-4">
        <div class="col-lg-12">
            <div class="card pt-1 pr-2 pl-2">
                <div class="card-body">
                    <div class="invoice-title">
                        <div class=""><h4 class="float-right"><span class="badge bg-success text-white"
                                                                    style="margin-top: 0.35rem;">Paid</span></h4><h4
                                    class="float-right text-muted font-size-15 mb-0 pr-2" style="margin-top: 0.3rem;">
                                Invoice #<?php echo $invid; ?> </h4></div>
                        <div class="mb-4">
                            <h2 class="mb-1 text-muted">Travel Management System</h2>
                        </div>
                        <div class="text-muted">
                            <p class="mb-1">11 Dhanmondi, Dhaka 1203</p>
                            <p class="mb-1"><i class="uil uil-envelope-alt me-1"></i>info@tms.com</p>
                            <p><i class="uil uil-phone me-1"></i> 012-345-6789</p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="text-muted">
                                <h5 class="font-size-16 mb-3">Billed To:</h5>
                                <h5 class="font-size-15 mb-2"><?php echo $first; ?><?php echo $last; ?></h5>
                                <p class="mb-1"><?php echo $address; ?></p>
                                <p class="mb-1"><?php echo $email; ?></p>
                                <p><?php echo $cell; ?></p>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="rightend col-sm-6">
                            <div class="text-muted text-sm-end">
                                <div>
                                    <h5 class=" mb-1">Invoice No:</h5>
                                    <p>#<?php echo $invid; ?></p>
                                </div>
                                <div class="mt-4">
                                    <h5 class="font-size-15 mb-1">Invoice Date:</h5>
                                    <p><?php echo $invdate; ?></p>
                                </div>
                                <div class="mt-4">
                                    <h5 class="font-size-15 mb-1">Order No:</h5>
                                    <p>#<?php echo $orderid; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="py-2 text-muted">
                        <h5 class="font-size-15">Order Summary</h5>

                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap table-centered text-muted mb-0">
                                <thead>
                                <tr>
                                    <th style="width: 70px;">Sl.</th>
                                    <th>Item</th>
                                    <th>Base Fare</th>
                                    <th class="align-middle rightend">Service Fee and Taxes</th>
                                    <th class="rightend" style="width: 120px;">Amount</th>
                                </tr>
                                </thead><!-- end thead -->
                                <tbody>
                                <tr>
                                    <th scope="row" class="align-middle">01</th>
                                    <td class="align-middle" style="font-size: 80%;">
                                        <div class="align-middle">
                                            <h5 class="text-truncate font-size-14 mb-1"><?php echo $airline; ?></h5>
                                            <p class="mb-0"><i class="fas fa-plane"
                                                               style="display: inline-block;transform: rotate(-90deg);margin-right: 5px;font-size: 95%;"></i><?php echo $from; ?>
                                            </p>
                                            <p><i class="fas fa-plane"
                                                  style="display: inline-block;transform: rotate(90deg);margin-right: 5px;font-size: 95%;"></i><?php echo $to; ?>
                                            </p>
                                            <p class="mb-0"><i class="far fa-calendar-alt"
                                                               style="display: inline-block; margin-right: 5px;font-size: 95%;"></i><?php echo $departureDate; ?>
                                            </p>
                                            <p><i class="fas fa-clock"
                                                  style="display: inline-block; margin-right: 2px;font-size: 95%;"></i><?php echo $departureTime; ?>
                                            </p>
                                            <p class="mb-0"><i class="fas fa-user"
                                                               style="display: inline-block; margin-right: 2px;font-size: 95%;"></i><?php echo $adultno; ?>
                                            </p>
                                            <p><i class="fas fa-child"
                                                  style="display: inline-block; margin-right: 2px;font-size: 95%;"></i><?php echo $childno; ?>
                                            </p>
                                            <h6 class="mb-0"><i class="fas fa-user"
                                                                style="display: inline-block; margin-right: 5px;font-size: 95%;"></i><?php echo $first; ?> <?php echo $last; ?>
                                            </h6></div>
                                    </td>
                                    <td class="align-middle">$ <?php $childfare = $childno * ($price / 2);
                                        $adultfare = $adultno * $price;
                                        $tot = ($adultfare + $childfare);
                                        echo $tot; ?>
                                        <div style="font-size: 70%;">
                                            <p class="mb-0"><i class="fas fa-user"
                                                               style="display: inline-block; margin-right: 2px;font-size: 95%;"></i><?php echo $adultno; ?>
                                                x <?php echo $price; ?> = <?php echo $adultfare; ?></p>
                                            <p><i class="fas fa-child"
                                                  style="display: inline-block; margin-right: 2px;font-size: 95%;"></i><?php echo $childno; ?>
                                                x <?php echo($price / 2); ?> = <?php echo $childfare; ?></p>
                                        </div>
                                    </td>
                                    <td class="align-middle rightend">$ <?php echo $sertax; ?></td>
                                    <td class="align-middle rightend">$ <?php echo $total; ?></td>
                                </tr>
                                <!-- end tr -->

                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="align-middle rightend">Sub Total :</th>
                                    <td class="align-middle rightend">$ <?php echo $total; ?></td>
                                </tr>
                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="align-middle rightend">
                                        Discount :
                                    </th>
                                    <td class="rightend">- 0%</td>
                                </tr>

                                <!-- end tr -->
                                <tr>
                                    <th scope="row" colspan="4" class="border-0 rightend align-middle">Total :</th>
                                    <td class="border-0 align-middle rightend"><h4 class="m-0 fw-semibold">
                                            $ <?php echo $total; ?></h4>
                                    </td>
                                </tr>
                                <!-- end tr -->
                                </tbody><!-- end tbody -->
                            </table><!-- end table -->
                        </div><!-- end table responsive -->
                        <div class="d-print-none mt-4">
                            <div class="float-right mr-2 pr-1 mb-3">
                                <a href="javascript:window.print()" class="btn btn-success me-1"><i
                                            class="fa fa-print"></i></a>
                                <a href="#" class="btn btn-primary w-md">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- end col -->
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.slim.min.js"></script>
<script src="assets/js/jquery.min.map"></script>
<script src="assets/js/jquery.slim.min.map"></script>
<script src="assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/form-validation.js"></script>


</body>

