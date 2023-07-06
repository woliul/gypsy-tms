<?php
//Rating Test Page

session_start();
include_once '../database.php';
if (isset($_SESSION['user']) != "") {

}
$username = $_SESSION['user'];
include 'header.php';
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
<div class="container d-flex justify-content-center mt-5">
    <div class="card text-center mb-5">
        <div class="circle-image">
            <img src="https://i.imgur.com/hczKIze.jpg" width="50">
        </div>
        <span class="dot"></span>
        <span class="name mb-1 fw-500">Bryan Williams</span>
        <small class="text-black-50">Tata Ace</small>
        <small class="text-black-50 font-weight-bold">QP09AA9090</small>
        <div class="location mt-4">
            <span class="d-block"><i class="fa fa-map-marker start"></i> <small class="text-truncate ml-2">Ganesha Road, preet vihar new delhi</small> </span>
            <span><i class="fa fa-map-marker stop mt-2"></i> <small class="text-truncate ml-2">Mandir Road, Mayur vihar, new delhi</small> </span>
        </div>
        <form action="process_rating.php" method="POST">
            <div class="rate bg-success py-3 text-white mt-3">
                <h6 class="mb-0">Rate your driver</h6>
                <div class="rating">
                    <input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                    <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
                    <input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
                    <input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
                    <input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>
                </div>
                <div class="buttons px-4 mt-0">
                    <button type="submit" class="btn btn-warning btn-block rating-submit">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
</body>
</html>
<?php
// Include the footer
include 'footer.php';
?>

