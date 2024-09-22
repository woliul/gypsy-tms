<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/9/23
 * Time: 7:35 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Flights - Travel Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="../index.php">
                <img src="../assets/img/logo/gypsy-white.svg" alt="Travel Explorer Logo" class="logo-img" style="width: 125px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php" style="color: white"><i class="fas fa-search"></i> Explore</a>
                    </li>
                    <li class="nav-item active">
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

    <!-- Flight Search Form -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title text-center mb-4">Search Flights</h3>
                            <form action="../flight_results.php" method="GET">
                                <div class="form-group">
                                    <label for="origin">Origin</label>
                                    <input type="text" class="form-control" id="origin" name="origin" placeholder="Enter origin">
                                </div>
                                <div class="form-group">
                                    <label for="destination">Destination</label>
                                    <input type="text" id="airport-input" name="airport" placeholder="Enter airport name or code">
                                </div>
                                <div class="form-group">
                                    <label for="departure">Departure Date</label>
                                    <input type="date" class="form-control" id="departure" name="departure">
                                </div>
                                <div class="form-group">
                                    <label for="return">Return Date</label>
                                    <input type="date" class="form-control" id="return" name="return">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Search Flights</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
