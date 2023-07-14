<?php
//Rating Test Page

session_start();
include_once 'database.php';
if (isset($_SESSION['user']) != "") {

}

if (isset($_GET['destination'])) {
    $id = $_GET['destination'];
}

//booking info start
$first = $_POST['first'];
$last = $_POST['last'];
$email = $_POST['email'];
$username = $_POST['username'];
$address = $_POST['address'];
$adults = $_POST['adults'];
$children = $_POST['children'];
$paymentMethod = $_POST['paymentMethod'];
$ccname = $_POST['ccname'];
$ccnumber = $_POST['ccnumber'];
$ccexpiration = $_POST['ccexpiration'];
$ccv = $_POST['ccv'];
$cell = $_POST['cell'];
$time = date('Y-m-d');
//booking info end

$queryfl = "SELECT * FROM flights WHERE id  = '" . $id . "'";
$resultfl = $conn->query($queryfl);
if ($resultfl->num_rows > 0) {
    while ($rowfl = $resultfl->fetch_assoc()) {
        $from = $rowfl['dep'];
        $to = $rowfl['dest'];
        $departureDate = $rowfl['departure_date'];
        $departureTime = $rowfl['departure_time'];
        $arrivalDate = $rowfl['arrival_date'];
        $arrivalTime = $rowfl['arrival_time'];
        $airline = $rowfl['airline'];
        $duration = $rowfl['duration'];
        $price = $rowfl['price'];

    }
}
//Total Calculation
$amount = (($price * $adults) + (($price / 2) * $children));//Total amount
$sertax = $amount * (20 / 100); //Service Tax Calculation
$total = ($sertax + $amount); //Total price
$rand = rand(100, 500);
$gor = $rand + $id;
$orderid = ("ORDTMS" . $gor); //Order ID Generation
$gin = $gor . $id;
$invid = ("TMSINV" . $gin); //Invoice ID Generation

// Query for Flight Booking start
$fbquery = "INSERT INTO `flightbook` (`dep`, `dest`, `departure_date`, `departure_time`, `airline`, `fare`, `sertax`, `total`, `orderid`, `invoiceid`, `invoicedate`, `first`, `last`, `username`, `address`, `email`, `cell`, `adultno`, `childno`, `paytype`, `ccname`, `ccnumber`, `ccexpiration`, `ccv`)
                            VALUES ('$from','$to','$departureDate','$departureTime', '$airline', '$price', '$sertax', '$total', '$orderid', '$invid', '$time', '$first', '$last', '$username', '$address', '$email', '$cell', '$adults', '$children', '$paymentMethod', '$ccname', '$ccnumber', '$ccexpiration', '$ccv')";

$fbresult = mysqli_query($conn, $fbquery);


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
<?php if ($fbresult) {
    // User data inserted successfully
    ?>
    <div class="container">
        <div class="mt-4 d-flex justify-content-center align-items-center">
            <div class="col-md-8">
                <div class="border border-3 border-primary"></div>
                <div class="card  bg-white shadow p-5">
                    <div class="mb-4 text-center"><i class="text-success display-3 far fa-check-circle"></i>
                    </div>
                    <div class="text-center">
                        <h1>Thank You !</h1>
                        <p>Thanks for booking with us, Here is your invoice..</p>
                        <a href="flightinvoice.php?invid=<?php echo urlencode($invid); ?>" class="btn btn-primary">Show
                            Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
// Error occurred during insertion

// Loop through the ratings and generate the HTML code
    ?>
    <div class="mt-4 container">
        <div class="row">
            <div class="container pl-0">
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
                                <p><i class="fas fa-plane"></i> <?php echo $airline; ?></p>
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
                </div>
            </div>

            <div class="card col-md-4">
                <div class="mt-3">
                    <img alt="Eiffel Tower" class="card card-img-top mb-0" src="assets/img/flightbh.jpg">
                    <div class="ml-0 pl-0 pr-0 mr-0 mb-2 card-text">


                        <!--Progressbar-->
                        <div class="pt-3 pl-3 pr-3 mt-3 mb-3 card">
                            <p><strong><i class="fas fa-plane"></i> Airline:</strong> <?php echo $airline; ?>
                            </p>
                            <p><strong><i class="fas fa-plane"></i> Flight:</strong> <?php echo $from; ?>
                                | <?php echo $to; ?></p>
                        </div>
                        <div class="pl-3 pr-3 pt-3 card mt-3 mb-3">
                            <p><strong><i class="fas fa-star"></i> Class:</strong> Economy</p>
                            <p><strong><i class="far fa-clock"></i> Duration:</strong> <?php echo $duration; ?>
                            </p>
                        </div>
                        <div class="pl-3 pr-3 pt-3 card mt-3 mb-3">
                            <p class="mb-0"><strong><i class="fas fa-suitcase"></i> Baggage Allowance:</strong>
                            </p>
                            <ul>
                                <li><strong><i class="fas fa-plane"></i> Flight:</strong> 7 kg</li>
                                <li><strong><i class="fas fa-suitcase"></i> Cabin:</strong> 20 kg</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <div class="card">

                    <div class=" pl-4 pr-4 pt-4 pb-4">


                        <div class="row">
                            <div class="col order-md-1">
                                <h4 class="mb-3">Billing address</h4>
                                <hr class="mt-3">

                                <form class="needs-validation" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" id="firstName" name="first"
                                                   placeholder="" value=""
                                                   required>
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Last name</label>
                                            <input type="text" class="form-control" id="lastName" name="last"
                                                   placeholder="" value=""
                                                   required>
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
                                            <input type="text" class="form-control" id="username" name="username"
                                                   placeholder="Username"
                                                   required>
                                            <div class="invalid-feedback" style="width: 100%;">
                                                Your username is required.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                               placeholder="you@example.com">
                                        <div class="invalid-feedback">
                                            Please enter a valid email.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="cell">Phone Number</label>
                                        <input type="text" name="cell" class="form-control" id="cell"
                                               placeholder="Type your phone number">
                                        <div class="invalid-feedback">
                                            Please enter a valid Phone number.
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                               placeholder="1234 Main St"
                                               required>
                                        <div class="invalid-feedback">
                                            Please enter your address.
                                        </div>
                                    </div>

                                    <hr class="mb-4">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="adults">Adults</label>
                                            <select class="custom-select d-block w-100" name="adults" id="adults"
                                                    required="">
                                                <option value="">Choose...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid Number.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="country">Children</label>
                                            <select class="custom-select d-block w-100" name="children" id="country">
                                                <option value="">Choose...</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid Number.
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="mb-4">
                                    <h4 class="mb-3">Payment</h4>

                                    <div class="d-block my-3">
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="paymentMethod" type="radio"
                                                   class="custom-control-input" value="Credit card" checked required>
                                            <label class="custom-control-label" for="credit">Credit card</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="debit" name="paymentMethod" type="radio" value="Debit card"
                                                   class="custom-control-input"
                                                   required>
                                            <label class="custom-control-label" for="debit">Debit card</label>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Name on card</label>
                                            <input type="text" class="form-control" id="cc-name" name="ccname"
                                                   placeholder=""
                                                   required>
                                            <small class="text-muted">Full name as displayed on card</small>
                                            <div class="invalid-feedback">
                                                Name on card is required
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Credit card number</label>
                                            <input type="text" class="form-control" id="cc-number" name="ccnumber"
                                                   placeholder=""
                                                   required>
                                            <div class="invalid-feedback">
                                                Credit card number is required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration">Expiration</label>
                                            <input type="text" class="form-control" id="cc-expiration"
                                                   name="ccexpiration" placeholder=""
                                                   required>
                                            <div class="invalid-feedback">
                                                Expiration date required
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="ccv">CVV</label>
                                            <input type="text" class="form-control" id="ccv" name="ccv" placeholder=""
                                                   required>
                                            <div class="invalid-feedback">
                                                Security code required
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4 custom-control custom-checkbox">
                                        <input class="custom-control-input" id="agree" required="" type="checkbox">
                                        <label class="custom-control-label" for="agree">I agree to Terms and
                                            Conditions.</label>
                                    </div>
                                    <hr class="mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                                </form>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
} ?>

<?php
// Include the footer
include 'footer.php';
?>

