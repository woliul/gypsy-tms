<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 4:41 AM
 */

include 'header.php';
?>

<div class="jumbotron headbg1">
  <div class="container">
    <h1>Welcome to Travel Explorer</h1>
    <p>Discover new cities, plan your trips, and explore the world with us.</p>
    <form class="search-bar">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for flights, hotels, or destinations">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button"><i class="fa fa-search"></i> Search</button>
        </div>
      </div>
    </form>
  </div>
</div>

<div class="container">
  <h2>Popular Cities</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="../assets/img/paris.jpg" class="card-img-top" alt="Destination 1">
        <div class="card-body">
          <h5 class="card-title">Paris, France</h5>
          <p class="card-text">Experience the romance and charm of the City of Light.</p>
          <a href="../dest.php" class="btn btn-primary">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="../assets/img/tokyo.jpg" class="card-img-top" alt="Destination 2">
        <div class="card-body">
          <h5 class="card-title">Tokyo, Japan</h5>
          <p class="card-text">Discover the bustling streets and ancient traditions of Tokyo.</p>
          <a href="#" class="btn btn-primary">Explore</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="../assets/img/newyork.jpg" class="card-img-top" alt="Destination 3">
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
        <img src="../assets/img/bali.jpg" class="card-img-top" alt="Deal 1">
        <div class="card-body">
          <h5 class="card-title">Flight + Hotel to Bali</h5>
          <p class="card-text">Experience the beauty and tranquility of Bali with our special package.</p>
          <a href="#" class="btn btn-primary">View Deal</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="../assets/img/cancun.jpg" class="card-img-top" alt="Deal 2">
        <div class="card-body">
          <h5 class="card-title">All-Inclusive Resort in Cancun</h5>
          <p class="card-text">Enjoy a luxurious and worry-free vacation in Cancun.</p>
          <a href="#" class="btn btn-primary">View Deal</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="../assets/img/europe.jpg" class="card-img-top" alt="Deal 3">
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
