

<?php
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
            <img src="../assets/img/logo/tms-white-tr.svg" alt="Travel Explorer Logo" class="logo-img" style="width: 220px;">
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
                <li class="nav-item">
                    <a class="nav-link" href="../flights.php" style="color: white"><i class="fas fa-plane"></i> Flights</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../hotels.php" style="color: white"><i class="fas fa-hotel"></i> Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../offer.php" style="color: white"><i class="fas fa-tag"></i> Deals</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="text-white nav-link dropdown-toggle" href="#" id="aboutUsDropdown" role="button"
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



