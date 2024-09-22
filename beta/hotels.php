<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/5/23
 * Time: 1:30 PM
 */
include 'header.php';
?>

    <style>
        /* Custom styles for the hotel landing page */

        body {
            font-family: Arial, sans-serif;
        }

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

        .footer {
            background-color: #333;
            color: #fff;
            padding: 30px 0;
            text-align: center;
        }
    </style>
    <div class="jumbotron hlbg">
        <div class="container">
            <h1>Search for Hotels</h1>
            <p>Start planning your stay by searching for the best Hotels.</p>
            <form class="search-bar" action="flightresult.php" method="GET">
                <div class="form-group">
                    <label for="destination">Destination: Country, City, Airport, Area, Landmark</label>
                    <input type="text" class="form-control" id="destination" required="">
                    <div class="invalid-feedback">
                        Please enter a destination.
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="checkin">Check-in</label><input type="date" class="form-control" id="inputDeparture">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="checkout">Check-out</label><input type="date" class="form-control" id="inputReturn">
                    </div>
                </div>
                <div class="form-group">
                    <label for="guests">Guests</label>
                    <select class="form-control" id="guests" required="">
                        <option value="">Choose...</option>
                        <option>1 guest</option>
                        <option>2 guests</option>
                        <option>3 guests</option>
                        <!-- Add more options as needed -->
                    </select>
                    <div class="invalid-feedback">
                        Please select the number of guests.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search Hotels</button>
            </form>

        </div>
    </div>

    <section class="container mt-5">
        <h2 class="text-center mb-4">Featured Hotels</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card hotel-card">
                    <img src="assets/img/le-meurice.jpg" alt="Hotel Image" class="card img-fluid mb-3">
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
                        <li><i class="fas fa-car"></i> Parking</li>
                        <!-- Add more amenities as needed -->
                    </ul>
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