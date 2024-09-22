<?php
/*
 * Copyright (c) 2024. All rights reserved by Woliul Hasan. Fork me on https://github.com/woliul
 */

/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/5/23
 * Time: 11:08 PM
 */
// Rating For Review Folder
include 'header.php';
include_once '../functions/database.php';
session_start(); // Start the session
if (isset($_GET['destination'])) {
$destination = $_GET['destination'];
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the value from the form
    $rating = $_POST["rating"];
    $review = $_POST["review"];
    $title = $_POST["title"];
    $first = $_POST["first"];
    $last = $_POST["last"];
    $email = $_POST["review"];
    $username = $_POST["username"];
    $time = strtotime(date('Y-m-d H:i:s'));

    $query = "INSERT INTO review (user_name, first, last, email, user_rating, user_review, title, datetime,destination) VALUES ('$username', '$first', '$last', '$email', '$rating', '$review', '$title', '$time' ,'$destination')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // User data inserted successfully
        ?>
        <div class="container">
            <div class="mt-4 d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="border border-3 border-primary"></div>
                    <div class="card  bg-white shadow p-5">
                        <div class="mb-4 text-center"> <i class="text-success display-3 far fa-check-circle"></i>

                        </div>
                        <div class="text-center">
                            <h1>Thank You !</h1>
                            <p>Thanks for you valuable, opinion.</p>
                            <a href="../gypsy/index.php" class="btn btn-outline-primary">Back Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    } else {
        // Error occurred during insertion

        // Loop through the ratings and generate the HTML code
        ?>
        <div class="container">
            <div class="mt-4 vh-100 d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="border border-3 border-danger"></div>
                    <div class="card  bg-white shadow p-5">
                        <div class="mb-4 text-center"> <i class="text-danger display-3 far fa-times-circle"></i>

                        </div>
                        <div class="text-center">
                            <h1>Sorry :)</h1>
                            <p>Attempt was not successful, try again. Please go, back. <strong>Thank you</strong></p>
                            <a href="rating_test2.php?destination=<?php echo urlencode($destination); ?>" class="btn btn-outline-primary">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

}
?>
<?php
// Include the footer
include 'footer.php';
?>
