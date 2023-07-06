<?php
/**
 * Created in PhpStorm.
 * Project Name: alpha
 * User: woliul
 * Date: 7/5/23
 * Time: 11:08 PM
 */
// Rating For Review Folder
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the value from the form
    $rating = $_POST["rating"];
    echo $rating;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Review & Rating</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="css/assets/css/library/bootstrap.min.css">
    <link rel="stylesheet" href="css/assets/css/library/fontAwesome/all.css">
    <link rel="stylesheet" href="css/assets/css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.css"/>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {

            background-color: #f7f6f6;
        }

        .card {

            width: 350px;
            border: none;
            box-shadow: 5px 6px 6px 2px #e9ecef;
            border-radius: 12px;
        }

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
            justify-content: center
        }

        .rating > input {
            display: none
        }

        .rating > label {
            position: relative;
            width: 1em;
            font-size: 30px;
            font-weight: 300;
            color: #FFD600;
            cursor: pointer
        }

        .rating > label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
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
    </style>
</head>
<body>
<div class="rate bg-success py-3 text-white mt-3">
    <h6 class="mb-0">Rate your driver</h6>
    <div class="rating">
        <?php
        // Assuming $rating is the variable containing the rating value
//        $rating = 4; // Example rating value

        // Loop through the ratings and generate the HTML code
        for ($i = 5; $i >= 1; $i--) {
            $checked = ($i == $rating) ? "checked" : "";
            echo '<input type="radio" name="rating" value="' . $i . '" id="' . $i . '" ' . $checked . '><label for="' . $i . '">☆</label>';
        }
        ?>
    </div>
    <div class="buttons px-4 mt-0">
        <button type="submit" class="btn btn-warning btn-block rating-submit">Submit</button>
    </div>
</div>

