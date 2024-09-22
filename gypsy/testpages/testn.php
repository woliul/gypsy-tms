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

<div class="jumbotron headbg2">
  <div class="container">
    <h1>Destination Unlimited</h1>
    <p>Discover new destinations, plan your trips, and explore the world with us.</p>
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
    <div class="mt-4 vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-8">
            <div class="border border-3 border-primary"></div>
            <div class="card  bg-white shadow p-5">
                <div class="mb-4 text-center"> <i class="text-primary display-3 fa fa-check-circle"></i>

                </div>
                <div class="text-center">
                    <h1>Thank You !</h1>
                    <p>We've send the link to your inbox. Lorem ipsum dolor sit,lorem lorem </p>
                    <button class="btn btn-outline-primary">Back Home</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include the footer
include 'footer.php';
?>
