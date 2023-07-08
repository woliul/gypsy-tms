<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 4:41 AM
 */

include 'database.php';
include_once 'functions.php';
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
    <section id="popular-destinations">
        <div class="container">
            <h2><small>Popular Destinations in</small> <bold>Paris</bold></h2>
            <!-- Populate with data from the Attractions table -->
            <div class="row">
                <?php
                //Loop for destination data
                for ($i =0 ; $i < $count; $i++) {
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/<?php echo $img[$i]; ?>" class="card-img-top" alt="Image not Foundr">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $location[$i]; ?></h5>
                            <p class="card-text"><?php echo $des[$i]; ?></p>
                            <p class="card-text"><i class="fas fa-clock"></i> Opening Hours: <?php echo $hour[$i]; ?></p>
                            <p class="card-text"><i class="fas fa-dollar-sign"></i> Ticket Price: <?php echo $ticket[$i]; ?></p>
                            <?php /*$destination= "Eiffel Tower"; */?>
                            <a href="details.php?destination=<?php echo urlencode($location[$i]); ?>" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </section>


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
