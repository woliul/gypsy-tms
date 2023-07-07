<?php
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
    <section id="popular-destinations">
        <div class="container">
            <h2><small>Popular Destinations in</small> <bold>Paris</bold></h2>
            <!-- Populate with data from the Attractions table -->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/eiffel_tower.jpg" class="card-img-top" alt="Eiffel Tower">
                        <div class="card-body">
                            <h5 class="card-title">Eiffel Tower</h5>
                            <p class="card-text">The Eiffel Tower is a wrought-iron lattice tower located in Paris, France. It is one of the most recognizable landmarks in the world and offers stunning views of the city. Visitors can ascend to the top of the tower, dine at the restaurants, and enjoy panoramic views.</p>
                            <p class="card-text"><i class="fas fa-star"></i> Rating: 4.9</p>
                            <p class="card-text"><i class="fas fa-clock"></i> Opening Hours: 9:00 AM - 12:00 AM</p>
                            <p class="card-text"><i class="fas fa-dollar-sign"></i> Ticket Price: $25.00</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> Attraction Type: Landmark</p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/louvre_museum.jpg" class="card-img-top" alt="Louvre Museum">
                        <div class="card-body">
                            <h5 class="card-title">Louvre Museum</h5>
                            <p class="card-text">The Louvre Museum is the world's largest art museum and a historic monument in Paris, France. It is home to thousands of works of art, including the famous painting, Mona Lisa. Visitors can explore the museum's vast collection and admire masterpieces from various periods.</p>
                            <p class="card-text"><i class="fas fa-star"></i> Rating: 4.8</p>
                            <p class="card-text"><i class="fas fa-clock"></i> Opening Hours: 9:00 AM - 6:00 PM</p>
                            <p class="card-text"><i class="fas fa-dollar-sign"></i> Ticket Price: $20.00</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> Attraction Type: Museum</p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="assets/img/notre_dame_cathedral.jpg" class="card-img-top" alt="Notre-Dame Cathedral">
                        <div class="card-body">
                            <h5 class="card-title">Notre-Dame Cathedral</h5>
                            <p class="card-text">Notre-Dame Cathedral is a medieval Catholic cathedral located in Paris, France. It is a masterpiece of Gothic architecture and one of the most famous cathedrals in the world. Visitors can admire the intricate details of the cathedral and climb to the top for a panoramic view.</p>
                            <p class="card-text"><i class="fas fa-star"></i> Rating: 4.7</p>
                            <p class="card-text"><i class="fas fa-clock"></i> Opening Hours: 8:00 AM - 6:45 PM</p>
                            <p class="card-text"><i class="fas fa-dollar-sign"></i> Ticket Price: Free</p>
                            <p class="card-text"><i class="fas fa-map-marker-alt"></i> Attraction Type: Religious Site</p>
                            <a href="#" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
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
