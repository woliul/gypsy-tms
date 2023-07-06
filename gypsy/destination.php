<?php
/**
 * Created in PhpStorm.
 * Project Name: alpha
 * User: woliul
 * Date: 7/1/23
 * Time: 8:49 AM
 */

include 'header.php';

// Placeholder data for destinations (replace with actual data retrieval logic)
$destinations = array(
  array(
    'id' => 1,
    'name' => 'Paris',
    'image' => 'paris.jpg',
    'description' => 'Paris is known for its iconic landmarks, art, fashion, and cuisine.',
  ),
  array(
    'id' => 2,
    'name' => 'Rome',
    'image' => 'rome.jpg',
    'description' => 'Rome is famous for its ancient ruins, historic sites, and delicious Italian food.',
  ),
  // Add more destinations...
);
?>

<section class="jumbotron">
  <div class="container">
    <h1>Explore Destinations</h1>
    <p>Discover amazing destinations around the world</p>
  </div>
</section>

<section class="container">
  <div class="row">
    <?php foreach ($destinations as $destination): ?>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="assets/images/<?php echo $destination['image']; ?>" class="card-img-top" alt="<?php echo $destination['name']; ?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $destination['name']; ?></h5>
            <p class="card-text"><?php echo $destination['description']; ?></p>
            <a href="destination.php?id=<?php echo $destination['id']; ?>" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'footer.php'; ?>
