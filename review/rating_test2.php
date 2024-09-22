<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

//Rating Test Page

session_start();
include_once '../functions/database.php';
if (isset($_SESSION['user']) != "") {

}
/*$username = $_SESSION['user'];*/
include 'header.php';
include '../gypsy/func.php';
include '../gypsy/functions.php';
?>


<link href="../gypsy/assets/css/library/fontAwesome/all.css" rel="stylesheet">
<link href="../gypsy/assets/css/library/bootstrap.min.css" rel="stylesheet">
<link href="../gypsy/assets/css/style.css" rel="stylesheet">
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

<div class="mt-4 container">
    <div class="row">
        <div class="card col-md-4">
            <div class="mt-3">
                <img alt="Eiffel Tower" class="card card-img-top mb-0" src="../gypsy/assets/img/eiffel_tower.jpg">
                <div class="ml-0 pl-0 pr-0 mr-0 mb-2 card-text">


                    <!--Progressbar-->
                    <div class=" pr-3 pt-3 pl-3 pb-0 row justify-content-center ">
                        <!--Display Average Rating-->
                        <h3 class="mb-0 card-title">User Rating</h3>
                        <!--Display Total Review-->
                        <h2 class="col-12 text-center display-4"><?php echo $avgrating; ?><small class="h1">/5</small>
                        </h2>
                        <?php echo '<i data-star="' . $avgrating . '"></i>'; ?>
                        <p class="col-8 text-center ratings-count"><?php echo $totalrating; ?> ratings</p>

                        <?php
                        //Loop for Total Ratings and Total count of every Star
                        for ($i = 5; $i >= 1; $i--) {
                            ?>
                            <div class="col-12 pl-0 mb-1 d-flex align-items-center">
                                <!--Display Average Rating Stars-->
                                <p class="col-sm-3 mb-0 pl-4">
                                    <span><?php echo $i; ?></span><!--Star Count For Card-->
                                    <i class="fas fa-star"></i>
                                </p>
                                <div class="col-md-7 pr-0 pl-0">
                                    <div class="progress">
                                        <!--Progress Bar size (width)-->
                                        <div class="progress-bar" role="progressbar"
                                             style="width: <?php echo $ratingPercentages[$i]; ?>%;"
                                             aria-valuenow="<?php echo $ratingPercentages[$i]; ?>" aria-valuemin="0"
                                             aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <!--Total Rating Counts-->
                                <p class="text-left col-sm-3 mb-0"><?php echo $totratingCounts[$i]; ?></p>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                </div>

                <hr class="mt-3">
                <p class="mb-2 card-text">The Eiffel Tower is a wrought-iron lattice tower located in Paris, France.
                    It
                    is one of the most recognizable landmarks in the world and offers stunning views of the city.
                    Visitors can ascend to the top of the tower, dine at the restaurants, and enjoy panoramic
                    views.</p>
                <hr class="mt-3">
                <div class="card-body pt-0 pr-3 pl-3">


                    <p class="mb-2 card-text"><i class="fas fa-star"></i> Rating: <?php echo $avgrating; ?></p>
                    <p class="mb-2 card-text"><i class="fas fa-clock"></i> Opening Hours: 9:00 AM - 12:00 AM</p>
                    <p class="mb-2 card-text"><i class="fas fa-dollar-sign"></i> Ticket Price: $25.00</p>
                    <p class="card-text"><i class="fas fa-map-marker-alt"></i> Attraction Type: Landmark</p>


                </div>
            </div>
        </div>
        <div class="col-md-8 order-md-1">
            <div class="card">
                <h1 class="font-weight-bold card-header">Review Submission</h1>

                <form class=" pl-4 pr-4 pt-4 pb-4 needs-validation" action="process_rating.php?destination=<?php echo urlencode($destination); ?>" method="POST">
                    <div class="text-left mb-3">
                        <label class="" for="email">Rate Your Experience <small
                                    class="text-muted">(required)</small></label>
                        <div class="rating">
                            <input required="" type="radio" name="rating" value="5" id="5"><label class="far fa-star"
                                                                                       for="5"></label>
                            <input required="" type="radio" name="rating" value="4" id="4"><label class="far fa-star"
                                                                                       for="4"></label>
                            <input required="" type="radio" name="rating" value="3" id="3"><label class="far fa-star"
                                                                                      for="3"></label>
                            <input required="" type="radio" name="rating" value="2" id="2"><label class="far fa-star"
                                                                                      for="2"></label>
                            <input required="" type="radio" name="rating" value="1" id="1"><label class="far fa-star"
                                                                                      for="1"></label>
                        </div>
                    </div>
                    <hr class="mt-3">
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="review">Leave a review <small class="text-muted">(required)</small></label>
                            <textarea name="review" class="form-control" id="review" required=""
                                      placeholder="Highlight your experience" rows="3"></textarea>
                        </div>
                    </div>
                    <label for="title">Give your review a title <small class="text-muted">(required)</small></label>
                    <div class="mb-3">
                        <div class="form-label-group">

                            <input name="title" class="form-control" id="title" placeholder="Summarize your experience"
                                   required=""><label for="title" class="text-muted">Summarize your experience</label>
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 mb-0">
                            <label for="firstName">First name</label>
                            <div class="form-label-group">
                                <input name="first" autofocus="" class="form-control" id="firstName" placeholder="First name"
                                       required="" type="text">
                                <label for="firstName">Type your First name</label>
                            </div>

                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>

                        <div class="col-md-6 mb-0">
                            <label for="lastName">Last name</label>
                            <div class="form-label-group">
                                <input name="last" autofocus="" class="form-control" id="lastName" placeholder="Last name"
                                       required="" type="text">
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
                            <input name="username" autofocus="" class="form-control" id="username" placeholder="Username" required=""
                                   type="text">
                            <label class="" for="username">Type your Username</label>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your username is required.
                            </div>

                        </div>
                    </div>


                    <div class="mb-3">

                        <label for="email">Email <small class="text-muted">(optional)</small></label>
                        <div class="form-label-group">
                            <input name="email" autofocus="" class="form-control" id="email" placeholder="Email address"
                                   type="email">
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
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
// Include the footer
include 'footer.php';
?>

