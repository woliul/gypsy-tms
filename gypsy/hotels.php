<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/5/23
 * Time: 1:30 PM
 */


include 'database.php';


// Execute the SQL query
$sql = "SELECT `location` FROM `hotel` ORDER BY `location`";
$result = $conn->query($sql);

$dest = $_POST['dest'];
// Simulated flight data array
$sql3 = "SELECT * FROM hotel WHERE location = '$dest'";
$result3 = $conn->query($sql3);
$count = 0;
$name = array();
$desc = array();
$rating = array();
$location = array();
$img = array();
$price = array();
// Check if the query was successful
if ($result3) {
    // Fetch the rows from the result set
    while ($row3 = mysqli_fetch_assoc($result3)) {
        // Access the flight data using column names
        $name[$count] = $row3['name'];
        $desc[$count] = $row3['description'];
        $rating[$count] = $row3['rating'];
        $location[$count] = $row3['location'];
        $img[$count] = $row3['image'];
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
        /* Custom styles for the hotel landing page */



        .hero {
            background: url(https://via.placeholder.com/1600x600) no-repeat center center;
            background-size: cover;
            height: 600px;
            position: relative;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        .hero-title {
            font-size: 40px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-subtitle {
            font-size: 20px;
            margin-bottom: 30px;
        }

        .search-box {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 5px;
        }

        .search-form .form-control {
            border-radius: 30px;
        }

        .search-form .input-group-append button {
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
        }

        .search-form .input-group-append button i {
            font-size: 20px;
        }

        .hotel-card {
            /*border: 1px solid #ddd;*/
            /*border-radius: 5px;*/
            padding: 20px;
            margin-bottom: 20px;
        }

        .hotel-card .hotel-name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .hotel-card .hotel-description {
            color: #666;
            margin-bottom: 15px;
        }

        .hotel-card .hotel-rating {
            color: #ffc107;
            margin-bottom: 10px;
        }

        .hotel-card .hotel-amenities {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .hotel-card .hotel-amenities li {
            display: inline-block;
            margin-right: 10px;
            color: #777;
        }

        .hotel-card .hotel-amenities li i {
            margin-right: 5px;
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
            font-
    </style>

    <div class="jumbotron hlbg">
        <div class="container">
            <h1>Search for Hotels</h1>
            <p>Start planning your stay by searching for the best Hotels.</p>
            <form class="search-bar" action="" method="POST">
                <div class="form-group">

                        <input class="form-control" name="dest" list="datalistOptions" id="exampleDataList"
                               placeholder="Type your city name">
                        <datalist id="datalistOptions">
                            <?php // Check if any results were found
                            if ($result->num_rows > 0) {
                            // Output the results
                            while ($row = $result->fetch_assoc()) {
                            ?>

                            <option value="<?php echo $row['location']; ?>">

                                <?php
                                }
                                } else {
                                    echo "No results found.";
                                } ?>
                        </datalist>

                    <div class="invalid-feedback">
                        Please enter a destination.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search Hotels</button>
            </form>

        </div>
    </div>
    <section class="container mt-5">
        <h2 class="text-center mb-4">Best Hotels in <?php echo $dest; ?> </h2>

    </section>

<?php
//Loop for destination data
for ($i = 0;
     $i < $count;
     $i++) {
    ?>

    <div class="container">
        <div class="row mb-4 mt-4">
            <div class="col-lg-12">
                <div class="card pt-1 pr-2 pl-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <img alt="image not found" class="card card-img-top mb-0" src="assets/img/<?php echo $img[$i]; ?>">
                            </div>
                            <div class="bdfont80 col-sm-5">
                                <div class="mb-2">
                                    <h2 class="mb-1"><?php echo $name[$i]; ?></h2><!-- Hotel Name -->
                                    <p class="mb-0"><i data-star="<?php echo $rating[$i]; ?>" style="font-size: 100%;"></i></p><!-- Hotel Star -->
                                    <p class="mb-0"><strong> <?php echo $location[$i]; ?></strong> 2.3 km from center</p><!-- Location Distance -->
                                </div>
                                <h5 class="font-size-16 mb-0">Superior King Room</h5><!-- Main Features -->
                                <p class="font-size-15 mb-4">1 queen bed</p><!-- Special Features -->
                                <div class="bdfont80 text-success">
                                    <p class="mb-1">FREE cancellation</p><!-- Offer -->
                                    <p class="mb-1"><strong>No prepayment needed</strong> – pay at the property</p><!-- Attractions -->
                                </div>
                            </div><!-- end col -->
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
                                        <h5 class="h4 mb-1"><?php echo $price[$i]; ?></h5><!-- Price -->
                                        <p class="text-muted bdfont80 ">+BDT 7,410 taxes and charges</p></div><!-- Tax and charges -->
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->
                        <div class=" text-muted">
                            <!-- end table responsive -->
                            <div class="d-print-none">
                                <div class="float-right">
                                    <a href="hoteldetails.php?destination=<?php echo urlencode($name[$i]); ?>" class="btn btn-primary w-md">See availability<i class="ml-1 fas fa-chevron-right" style="font-size: 71%;"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end body -->

                </div>
            </div>
        </div>
    </div>
    <?php
//Loop for destination data
}
?>
    <section class="container mt-5">
        <h2 class="text-center mb-4">Featured Hotels</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card hotel-card">
                    <img src="assets/img/hotel-le-meurice.jpg" alt="Hotel Image" class="card img-fluid mb-3">
                    <h3 class="hotel-name">Hotel Le Meurice</h3>
                    <p class="hotel-description">Located in the heart of Paris, Hotel Le Meurice offers luxurious accommodations with stunning views of the city.</p>
                    <div class="hotel-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-alt"></span>
                        <span class="ml-2">4.5/5</span>
                    </div>
                    <ul class="hotel-amenities">
                        <li><i class="fas fa-wifi"></i> Free Wi-Fi</li>
                        <li><i class="fas fa-utensils"></i> Restaurant</li>
                        <!-- Add more amenities as needed -->

                    </ul>
                    <a href="#" class="mt-3 btn btn-primary">See More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hotel-card">
                    <img src="assets/img/hotel-plaza-athenee.jpg" alt="Hotel Image" class="card img-fluid mb-3">
                    <h3 class="hotel-name">Hotel Plaza Athénée</h3>
                    <p class="hotel-description">Experience luxury at its finest at Hotel Plaza Athénée, situated on Avenue Montaigne near the Champs-Elysées.</p>
                    <div class="hotel-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="ml-2">5/5</span>
                    </div>
                    <ul class="hotel-amenities">
                        <li><i class="fas fa-wifi"></i> Free Wi-Fi</li>
                        <li><i class="fas fa-utensils"></i> Restaurant</li>
                        <li><i class="fas fa-swimming-pool"></i> Pool</li>
                        <!-- Add more amenities as needed -->
                    </ul>
                    <a href="#" class="mt-3 btn btn-primary">See More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card hotel-card">
                    <img src="assets/img/novotel.jpg" alt="Hotel Image" class="card img-fluid mb-3">
                    <h3 class="hotel-name">Hotel Novotel Paris Centre Tour Eiffel</h3>
                    <p class="hotel-description">Enjoy a comfortable stay at Hotel Novotel Paris Centre Tour Eiffel, located just steps away from the iconic Eiffel Tower.</p>
                    <div class="hotel-rating">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star-half-alt"></span>
                        <span class="fa fa-star-o"></span>
                        <span class="ml-2">3.5/5</span>
                    </div>
                    <ul class="hotel-amenities">
                        <li><i class="fas fa-wifi"></i> Free Wi-Fi</li>
                        <li><i class="fas fa-parking"></i> Parking</li>
                        <!-- Add more amenities as needed -->
                    </ul>
                    <a href="#" class="mt-3 btn btn-primary">See More</a>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h2>Popular Cities</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/paris.jpg" class="card-img-top" alt="Destination 1">
                    <div class="card-body">
                        <h5 class="card-title">Paris, France</h5>
                        <p class="card-text">Experience the romance and charm of the City of Light.</p>
                        <a href="dest.php" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/tokyo.jpg" class="card-img-top" alt="Destination 2">
                    <div class="card-body">
                        <h5 class="card-title">Tokyo, Japan</h5>
                        <p class="card-text">Discover the bustling streets and ancient traditions of Tokyo.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/img/newyork.jpg" class="card-img-top" alt="Destination 3">
                    <div class="card-body">
                        <h5 class="card-title">New York City, USA</h5>
                        <p class="card-text">Immerse yourself in the vibrant energy of the Big Apple.</p>
                        <a href="#" class="btn btn-primary">Explore</a>
                    </div>
                </div>
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