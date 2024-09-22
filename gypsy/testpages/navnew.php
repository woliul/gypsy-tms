<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 5:12 AM
 */
?>
<!-- nav.php -->

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="../index.php">
            <img src="../assets/img/logo/gypsy-white.svg" alt="Travel Explorer Logo" class="logo-img"
                 style="width: 125px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php" style="color: white"><i class="fas fa-search"></i> Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="exploreDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-globe"></i> Explore
                    </a>
                    <div class="dropdown-menu" aria-labelledby="exploreDropdown">
                        <a class="dropdown-item" href="../destinations.php">Destinations</a>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Continent</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="country.php">Country</a>
                                <div class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle" href="#">City</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="city.php">City</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="dropdown-item" href="top-attractions.php">Top attractions</a>
                        <a class="dropdown-item" href="beach-destinations.php">Beach destinations</a>
                        <a class="dropdown-item" href="mountain-destinations.php">Mountain destinations</a>
                        <a class="dropdown-item" href="cultural-experiences.php">Cultural experiences</a>
                        <a class="dropdown-item" href="adventure-travel.php">Adventure travel</a>
                        <a class="dropdown-item" href="food-and-drink.php">Food and drink</a>
                        <a class="dropdown-item" href="events-and-festivals.php">Events and festivals</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="planDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-map"></i> Plan
                    </a>
                    <div class="dropdown-menu" aria-labelledby="planDropdown">
                        <a class="dropdown-item" href="trip-planner.php">Trip planner</a>
                        <a class="dropdown-item" href="travel-tips.php">Travel tips and advice</a>

                        <a class="dropdown-item" href="visa-passport.php">Visa and passport information</a>
                        <a class="dropdown-item" href="travel-insurance.php">Travel insurance</a>
                        <a class="dropdown-item" href="packing-checklist.php">Packing checklist</a>
                        <a class="dropdown-item" href="currency-converter.php">Currency converter</a>
                        <a class="dropdown-item" href="weather-forecasts.php">Weather forecasts</a>
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Transportation options</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="../flights.php">Flights</a>
                                <a class="dropdown-item" href="trains.php">Trains</a>
                                <a class="dropdown-item" href="buses.php">Buses</a>
                                <a class="dropdown-item" href="rental-cars.php">Rental cars</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accommodationDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hotel"></i> Accommodation
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accommodationDropdown">
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Hotels</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="search-location.php">Search by location</a>
                                <a class="dropdown-item" href="search-price.php">Search by price range</a>
                                <a class="dropdown-item" href="search-amenities.php">Search by amenities</a>
                            </div>
                        </div>
                        <a class="dropdown-item" href="vacation-rentals.php">Vacation rentals</a>
                        <a class="dropdown-item" href="hostels-guesthouses.php">Hostels and guesthouses</a>
                        <a class="dropdown-item" href="resorts-spas.php">Resorts and spas</a>
                        <a class="dropdown-item" href="luxury-accommodations.php">Luxury accommodations</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="thingsToDoDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-map-signs"></i> Things to Do
                    </a>
                    <div class="dropdown-menu" aria-labelledby="thingsToDoDropdown">
                        <div class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Tours and activities</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="city-tours.php">City tours</a>
                                <a class="dropdown-item" href="outdoor-activities.php">Outdoor activities</a>
                                <a class="dropdown-item" href="cultural-experiences.php">Cultural experiences</a>
                                <a class="dropdown-item" href="food-drink-tours.php">Food and drink tours</a>
                                <a class="dropdown-item" href="sightseeing-cruises.php">Sightseeing cruises</a>
                            </div>
                        </div>

                        <a class="dropdown-item" href="attractions-landmarks.php">Attractions and landmarks</a>
                        <a class="dropdown-item" href="museums-galleries.php">Museums and art galleries</a>
                        <a class="dropdown-item" href="shopping-markets.php">Shopping and markets</a>
                        <a class="dropdown-item" href="nightlife-entertainment.php">Nightlife and entertainment</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-book"></i> Travel Resources
                    </a>
                    <div class="dropdown-menu" aria-labelledby="resourcesDropdown">
                        <a class="dropdown-item" href="travel-blogs-articles.php">Travel blogs and articles</a>
                        <a class="dropdown-item" href="travel-forums-communities.php">Travel forums and communities</a>
                        <a class="dropdown-item" href="travel-apps-tools.php">Travel apps and tools</a>
                        <a class="dropdown-item" href="travel-photography-inspiration.php">Travel photography and
                            inspiration</a>
                        <a class="dropdown-item" href="travel-safety-tips.php">Travel safety tips</a>
                        <a class="dropdown-item" href="travel-health-wellness.php">Travel health and wellness</a>
                        <a class="dropdown-item" href="traveling-with-pets.php">Traveling with pets</a>
                        <a class="dropdown-item" href="sustainable-travel.php">Sustainable travel</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-info-circle"></i> About Us
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutUsDropdown">
                        <a class="dropdown-item" href="company-info.php">Company information</a>
                        <a class="dropdown-item" href="mission-values.php">Mission and values</a>
                        <a class="dropdown-item" href="meet-the-team.php">Meet the team</a>
                        <a class="dropdown-item" href="contact-us.php">Contact us</a>
                        <a class="dropdown-item" href="faqs.php">FAQs</a>
                        <a class="dropdown-item" href="terms-conditions.php">Terms and conditions</a>
                        <a class="dropdown-item" href="privacy-policy.php">Privacy policy</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

