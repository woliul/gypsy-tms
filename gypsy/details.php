<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/1/23
 * Time: 4:41 AM
 */

session_start(); // Start the session
if (isset($_GET['destination'])) {
    $atname = $_GET['destination'];
    $destination = $_GET['destination'];
}
include_once 'func.php';
include_once 'functions.php';
include 'header.php';
?>
<style>
    .colp {
        padding-right: 0px;
        padding-left: 0px;
    }

    .colm {
        margin-bottom: 0px;
    }

    /* Old styles */
    .card-body {
        text-align: center;
    }

    .card-title {
        font-size: 1.5rem;
        margin-bottom: 0.5rem;
    }

    .card-deck .card {
        margin-bottom: 20px;
    }

    .card-deck .card .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    #map {
        width: 100%;
    }

    .carousel-item img {
        height: 400px;
        object-fit: cover;
    }

    .no-bullets {
        list-style-type: none;
        padding-left: 0;
    }

    /* New */
    [data-star] {
        text-align: left;
        font-style: normal;
        display: inline-block;
        position: relative;
        unicode-bidi: bidi-override;
        font-size: xx-large;
    }

    [data-star]::before {
        display: block;
        content: '\f005\f005\f005\f005\f005'; /* Font Awesome star icons */
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        color: #7eb4ef;
    }

    [data-star]::after {
        white-space: nowrap;
        position: absolute;
        top: 0;
        left: 0;
        content: '\f005\f005\f005\f005\f005'; /* Font Awesome star icons */
        font-family: 'Font Awesome 5 Free';
        font-style: normal;
        font-weight: 900;
        width: 0;
        color: #027bff;
        overflow: hidden;
        height: 100%;
    }

    [data-star^="0.1"]::after {
        width: 2%
    }

    [data-star^="0.2"]::after {
        width: 4%
    }

    [data-star^="0.3"]::after {
        width: 6%
    }

    [data-star^="0.4"]::after {
        width: 8%
    }

    [data-star^="0.5"]::after {
        width: 10%
    }

    [data-star^="0.6"]::after {
        width: 12%
    }

    [data-star^="0.7"]::after {
        width: 14%
    }

    [data-star^="0.8"]::after {
        width: 16%
    }

    [data-star^="0.9"]::after {
        width: 18%
    }

    [data-star^="1"]::after {
        width: 20%
    }

    [data-star^="1.1"]::after {
        width: 22%
    }

    [data-star^="1.2"]::after {
        width: 24%
    }

    [data-star^="1.3"]::after {
        width: 26%
    }

    [data-star^="1.4"]::after {
        width: 28%
    }

    [data-star^="1.5"]::after {
        width: 30%
    }

    [data-star^="1.6"]::after {
        width: 32%
    }

    [data-star^="1.7"]::after {
        width: 34%
    }

    [data-star^="1.8"]::after {
        width: 36%
    }

    [data-star^="1.9"]::after {
        width: 38%
    }

    [data-star^="2"]::after {
        width: 40%
    }

    [data-star^="2.1"]::after {
        width: 42%
    }

    [data-star^="2.2"]::after {
        width: 44%
    }

    [data-star^="2.3"]::after {
        width: 46%
    }

    [data-star^="2.4"]::after {
        width: 48%
    }

    [data-star^="2.5"]::after {
        width: 50%
    }

    [data-star^="2.6"]::after {
        width: 52%
    }

    [data-star^="2.7"]::after {
        width: 54%
    }

    [data-star^="2.8"]::after {
        width: 56%
    }

    [data-star^="2.9"]::after {
        width: 58%
    }

    [data-star^="3"]::after {
        width: 60%
    }

    [data-star^="3.1"]::after {
        width: 62%
    }

    [data-star^="3.2"]::after {
        width: 64%
    }

    [data-star^="3.3"]::after {
        width: 66%
    }

    [data-star^="3.4"]::after {
        width: 68%
    }

    [data-star^="3.5"]::after {
        width: 70%
    }

    [data-star^="3.6"]::after {
        width: 72%
    }

    [data-star^="3.7"]::after {
        width: 74%
    }

    [data-star^="3.8"]::after {
        width: 76%
    }

    [data-star^="3.9"]::after {
        width: 78%
    }

    [data-star^="4"]::after {
        width: 80%
    }

    [data-star^="4.1"]::after {
        width: 82%
    }

    [data-star^="4.2"]::after {
        width: 84%
    }

    [data-star^="4.3"]::after {
        width: 86%
    }

    [data-star^="4.4"]::after {
        width: 88%
    }

    [data-star^="4.5"]::after {
        width: 90%
    }

    [data-star^="4.6"]::after {
        width: 92%
    }

    [data-star^="4.7"]::after {
        width: 94%
    }

    [data-star^="4.8"]::after {
        width: 96%
    }

    [data-star^="4.9"]::after {
        width: 98%
    }

    [data-star^="5"]::after {
        width: 100%
    }
</style>

<!-- Landing page -->
<div class="jumbotron"
     style="background-image: <?php echo "url(assets/img/" . $atimg . ")"; ?>;background-size: cover; background-blend-mode: multiply;">
    <div class="container">
        <h1><?php echo $atname; ?></h1>
        <p><?php echo $atdes; ?></p>

    </div>
</div>
<!-- Landing page End-->

<div class="container">

    <!-- Slider-->
    <div id="carouselExampleIndicators" class="card carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
        </ol>
        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/<?php echo $atimg; ?>" class="d-block w-100" alt="Eiffel Tower 1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/paris.jpg" class="d-block w-100" alt="Eiffel Tower 2">
            </div>
            <div class="carousel-item">
                <img src="assets/img/europe.jpg" class="d-block w-100" alt="Eiffel Tower 3">
            </div>
        </div>
        <!-- Slide Buttons -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Slider End-->


    <div class="mt-4 container">
        <div class="row">
            <div class="card col-md-4">
                <div class="mt-3">
                    <p class="p-2 "><?php echo $atdes; ?></p>
                    <hr class="mt-3">
                    <div class="card-text pt-0 pr-3 pl-3">

                        <!-- About Card -->
                        <div>
                            <ul class="no-bullets">
                                <li><p class="row align-items-center mb-1">
                                        <i class="col-1 mb-0 fas fa-map-marker-alt"></i>
                                        <span class="col-9 pl-2">Location: <?php echo $atlocation; ?></span>
                                    </p>
                                </li>
                                <li><p class="row align-items-center mb-1">
                                        <i class="col-1 mb-0 fas fa-clock"></i>
                                        <span class="col-9 pl-2">Hours: <?php echo $athour; ?></span>
                                    </p>
                                </li>
                                <li><p class="row align-items-center mb-1">
                                        <i class="col-1 mb-0 fas fa-dollar-sign"></i>
                                        <span class="col-9 pl-2">Ticket Price: <?php echo $atticket; ?></span>
                                    </p>
                                </li>
                                <li><p class="row align-items-center mb-1">
                                        <i class="col-1 mb-0 fas fa-landmark"></i>
                                        <span class="col-9 pl-2">Type: <?php echo $attype; ?></span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <!-- About Card End-->
                    </div>
                </div>
            </div>
            <div class="col-md-8 order-md-1">
                <div>
                    <!-- Review Slider-->
                    <div class="card" style=" background-color: #007bff47;">
                        <div id="carouselExampleIndicators2" class="justify-content-right carousel slide"
                             data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                            </ol>
                            <!-- Testimonials-->
                            <div class="carousel-inner">
                                <div class="pl-3 pr-3 mt-4 justify-content-center text-center">
                                    <h3 class="fw-bold mb-4">Testimonials</h3>
                                    <p class="mb-4 pb-2 pb-md-0">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                                        numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                                        quisquam eum porro a pariatur veniam.
                                    </p>
                                </div>
                                <!-- Review Slide-->
                                <!-- Slide1-->
                                <div class="carousel-item">
                                    <section>
                                        <div class="container pb-4">
                                            <div class="row justify-content-center text-center">
                                                <div class="col-8 mb-5 mb-md-0">
                                                    <div class="card">
                                                        <div class="card-body py-4 mt-2">
                                                            <h5 class="font-weight-bold">Teresa May</h5>
                                                            <h6 class="font-weight-bold my-3">Founder at ET Company</h6>
                                                            <ul class="list-unstyled d-flex justify-content-center">
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                                                </li>
                                                            </ul>
                                                            <p class="mb-2">
                                                                <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor
                                                                sit
                                                                amet,
                                                                consectetur adipisicing elit. Quod eos id officiis hic
                                                                tenetur quae quaerat
                                                                ad velit ab hic tenetur.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- Slide 2-->
                                <div class="carousel-item active">
                                    <section>
                                        <div class="container pb-4">
                                            <div class="row justify-content-center text-center">
                                                <div class="col-8 mb-5 mb-md-0">
                                                    <div class="card">
                                                        <div class="card-body py-4 mt-2">
                                                            <h5 class="font-weight-bold">Maggie McLoan</h5>
                                                            <h6 class="font-weight-bold my-3">Photographer at Studio
                                                                LA</h6>
                                                            <ul class="list-unstyled d-flex justify-content-center">
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                                                </li>
                                                            </ul>
                                                            <p class="mb-2">
                                                                <i class="fas fa-quote-left pe-2"></i>utem, totam
                                                                debitis
                                                                suscipit saepe
                                                                sapiente magnam officiis quaerat necessitatibus odio
                                                                assumenda perferendis
                                                                labore laboriosam.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- Slide 3-->
                                <div class="carousel-item">
                                    <section>
                                        <div class="container pb-4">
                                            <div class="row justify-content-center text-center">
                                                <div class="col-8 mb-5 mb-md-0">
                                                    <div class="card">
                                                        <div class="card-body py-4 mt-2">
                                                            <h5 class="font-weight-bold">Alexa Horwitz</h5>
                                                            <h6 class="font-weight-bold my-3">Front-end Developer in
                                                                NY</h6>
                                                            <ul class="list-unstyled d-flex justify-content-center">
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star fa-sm text-info"></i>
                                                                </li>
                                                                <li>
                                                                    <i class="fas fa-star-half-alt fa-sm text-info"></i>
                                                                </li>
                                                            </ul>
                                                            <p class="mb-2">
                                                                <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh
                                                                libero, in gravida
                                                                nulla metus scelerisque ante sollicitudin commodo cras
                                                                purus
                                                                odio,
                                                                vestibulum in tempus viverra turpis.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <!-- Slide End-->

                            <!-- Slide Buttons-->
                            <!-- Previous-->
                            <a class="mt-5 pt-5 carousel-control-prev" href="#carouselExampleIndicators2" role="button"
                               data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <!-- Next-->
                            <a class="mt-5 pt-5 carousel-control-next" href="#carouselExampleIndicators2" role="button"
                               data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>

                        </div>
                    </div>
                    <!-- Review Slider End-->
                    <!-- Rating Show-->
                    <div class="card" style="">
                        <div class="card-body">
                            <h4 class="card-title">Rating Overview</h4>
                            <!--Display Average Rating-->
                            <h1 class="display-4"><?php echo $avgrating; ?><small class="h1">/5</small></h1>

                            <!--Display Average Rating Stars-->
                            <?php echo '<i data-star="' . $avgrating . '"></i>'; ?>
                            <!--Display Total Review-->
                            <p class="ratings-count"><?php echo $totalrating; ?> ratings</p>

                            <!--Progressbar-->
                            <div>
                                <?php
                                //Loop for Total Ratings and Total count of every Star
                                for ($i = 5; $i >= 1; $i--) {
                                    ?>
                                    <div class="row d-flex align-items-center mt-4" style="">
                                        <p class="col-sm-2 mb-0">
                                            <span><?php echo $i; ?></span><!--Star Count For Card-->
                                            <i class="fas fa-star"></i>
                                        </p>
                                        <div class="col-md-8 pr-0 pl-0">
                                            <div class="progress">
                                                <!--Progress Bar size (width)-->
                                                <div class="progress-bar" role="progressbar"
                                                     style="width: <?php echo $ratingPercentages[$i]; ?>%;"
                                                     aria-valuenow="<?php echo $ratingPercentages[$i]; ?>"
                                                     aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <!--Total Rating Counts-->
                                        <p class="text-left col-sm-2 mb-0 pr-0"><?php echo $totratingCounts[$i]; ?></p>
                                    </div>
                                    <?php
                                }
                                ?>
                                <a href="../review/rating.php?destination=<?php echo urlencode($atname); ?>"
                                   class="mt-4 btn btn-primary btn-block">Write A Review</a>
                            </div>
                        </div>
                    </div>
                    <!-- Rating Show End-->
                </div>
            </div>
        </div>
    </div>


    <!-- Recommendations-->
    <div class="row justify-content-center mt-4">
        <div class="col-12">
            <h3>Related Attractions and Recommendations</h3>
            <div class="card-deck">
                <div class="card">
                    <h5 class="card-title position-absolute bottom-0 end-0 p-3">
                        <?php $destination = "Louvre Museum"; ?>
                        <a href="details.php?destination=<?php echo urlencode($destination); ?>"
                           style="color: #fff; text-decoration: none;">Louvre Museum</a>
                    </h5>
                    <img src="assets/img/louvre_museum.jpg" class="card-img-top" alt="Louvre Museum">
                </div>
                <div class="card">
                    <h5 class="card-title position-absolute bottom-0 end-0 p-3">
                        <?php $destination = "Champs-Élysées"; ?>
                        <a href="details.php?destination=<?php echo urlencode($destination); ?>" style="color: #fff; text-decoration: none;">Champs-Élysées</a>
                    </h5>
                    <img src="assets/img/champs_elysees.jpg" class="card-img-top" alt="Champs-Élysées">
                </div>
                <div class="card">
                    <h5 class="card-title position-absolute bottom-0 end-0 p-3">
                        <?php $destination = "Montmartre"; ?>
                        <a href="details.php?destination=<?php echo urlencode($destination); ?>" style="color: #fff; text-decoration: none;">Montmartre</a>
                    </h5>
                    <img src="assets/img/montmartre.jpg" class="card-img-top" alt="Louvre Museum">
                </div>
                <div class="card">
                    <h5 class="card-title position-absolute bottom-0 end-0 p-3">
                        <?php $destination = "Notre-Dame Cathedral"; ?>
                        <a href="details.php?destination=<?php echo urlencode($destination); ?>" style="color: #fff; text-decoration: none;">Notre-Dame Cathedral</a>
                    </h5>
                    <img src="assets/img/notre_dame_cathedral.jpg" class="card-img-top" alt="Louvre Museum">
                </div>
            </div>
        </div>
        <!-- Location map-->
        <div class="col-10">
            <h3>Location and Map</h3>
            <div class="card"><img src="assets/img/map.jpg" class="d-block w-100" alt="Eiffel Tower 1"></div>
        </div>

    </div>
    <!-- Recommendations-->
</div>

<?php
// Include the footer
include 'footer.php';
?>
