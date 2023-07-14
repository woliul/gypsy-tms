<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 4:41 AM
 */

include 'database.php';


// Execute the SQL query
$sql = "SELECT `dep` FROM `flights` ORDER BY `dep`";
$result = $conn->query($sql);
$sql2 = "SELECT `dest` FROM `flights` ORDER BY `dest`";
$result2 = $conn->query($sql2);
$departureLocation = $_POST['departure'];
$destinationLocation = $_POST['destination'];
// Simulated flight data array
$sql3 = "SELECT * FROM flights WHERE dep = '$departureLocation' AND dest = '$destinationLocation' ";
$result3 = $conn->query($sql3);
$count = 0;
// Check if the query was successful
if ($result3) {
    // Fetch the rows from the result set
    while ($row3 = mysqli_fetch_assoc($result3)) {
        // Access the flight data using column names
        $from = $row3['dep'];
        $to = $row3['dest'];
        $departureDate = $row3['departure_date'];
        $departureTime = $row3['departure_time'];
        $arrivalDate = $row3['arrival_date'];
        $arrivalTime = $row3['arrival_time'];
        $airline = $row3['airline'];
        $duration = $row3['duration'];
        $price = $row3['price'];
        $count++;
        echo "Flight: " . $row3['dep'] . " to " . $row3['dest'] . "<br>";
        echo "Departure Date: " . $row3['departure_date'] . "<br>";
        echo "Departure Time: " . $row3['departure_time'] . "<br>";
        echo "Arrival Date: " . $row3['arrival_date'] . "<br>";
        echo "Arrival Time: " . $row3['arrival_time'] . "<br>";
        echo "Airline: " . $row3['airline'] . "<br>";
        echo "Duration: " . $row3['duration'] . "<br>";
        echo "Price: " . $row3['price'] . "<br>";
        echo "<hr>";
    }


} else {
    // Handle the case when the query fails
    echo "Error executing query: " . mysqli_error($conn);
}
include 'header.php';
?>

<div class="jumbotron flbg">
  <div class="container">
    <h1>Search for Flights</h1>
    <p>Start planning your trip by searching for the best flight options.</p>
      <form class="search-bar" action="../flight_results.php" method="POST">
          <div class="form-row">
              <div class="form-group col-md-6">
                  <input class="form-control" name="departure" list="datalistOptions" id="exampleDataList" placeholder="Departure City">
                  <datalist id="datalistOptions">
                     <?php // Check if any results were found
                      if ($result->num_rows > 0) {
                          // Output the results
                          while ($row = $result->fetch_assoc()) {
                             ?>

                      <option value="<?php echo $row['dep']; ?>">

<?php
                          }
                      } else {
                          echo "No results found.";
                      } ?>
                  </datalist>
              </div>
              <div class="form-group col-md-6">
                  <input class="form-control" name="destination" list="datalistOptions2" id="exampleDataList2" placeholder="Destination City">
                  <datalist id="datalistOptions2">
                      <?php
                      // Check if any results were found
                      if ($result2->num_rows > 0) {
                      // Output the results
                      while ($row2 = $result2->fetch_assoc()) {
                      ?>

                      <option value="<?php echo $row2['dest']; ?>">

                          <?php
                          }
                          } else {
                              echo "No results found.";
                          } ?>
                  </datalist>
              </div>
          </div>
          <div class="form-row">
              <div class="form-group col-md-6">
                  <input type="date" class="form-control" id="inputDeparture">
              </div>
              <div class="form-group col-md-6">
                  <input type="date" class="form-control" id="inputReturn">
              </div>
          </div>
          <button type="submit" class="btn btn-primary">Search Flights</button>
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
