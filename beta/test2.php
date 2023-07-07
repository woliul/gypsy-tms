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
</style>

</head>

<body>
<div class="container">
    <h1>Eiffel Tower - See More</h1>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/eiffel_tower.jpg" class="d-block w-100" alt="Eiffel Tower 1">
            </div>
            <div class="carousel-item">
                <img src="assets/img/paris.jpg" class="d-block w-100" alt="Eiffel Tower 2">
            </div>
            <div class="carousel-item">
                <img src="assets/img/europe.jpg" class="d-block w-100" alt="Eiffel Tower 3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row mt-4">
        <h2>Eiffel Tower</h2>
        <p>The Eiffel Tower is a wrought-iron lattice tower located in Paris, France. It is one of the most recognizable landmarks in the world and offers stunning views of the city. Visitors can ascend to the top of the tower, dine at the restaurants, and enjoy panoramic views.</p>

        <div class="col-md-6">
            <h4>Highlights</h4>
            <ul>
                <li>Enjoy breathtaking views of Paris from the top observation decks</li>
                <li>Experience fine dining at the Eiffel Tower's renowned restaurants</li>
                <li>Learn about the tower's history and architecture through guided tours</li>
                <li>Capture memorable photos against the iconic backdrop of the Eiffel Tower</li>
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Data</h4>
            <ul class="no-bullets">
                <li><i class="fas fa-map-marker-alt"></i> Location: Paris, France</li>
                <li><i class="fas fa-ruler-vertical"></i> Height: 330 meters</li>
                <li><i class="fas fa-pencil-alt"></i> Architect: Gustave Eiffel</li>
                <li><i class="fas fa-calendar-alt"></i> Year Built: 1889</li>
                <li><i class="fas fa-landmark"></i> Attraction Type: Landmark</li>
            </ul>
        </div>
    </div>

    <div class="row mt-4">
        <div class="container" >
            <div class="row justify-content-center">
                <div class="card" style="width: 400px;">
                    <div class="card-body">
                        <h4 class="card-title">Rating Overview</h4>
                        <h1 class="display-4">4.3<small>/5</small></h1>
                        <div class="rating-stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="ratings-count">2,145 ratings</p>

                        <!--Progressbar-->
                        <div>
                            <!--5 Star-->
                            <div class="row d-flex align-items-center mt-4" style="">
                                <p class="col-sm-2 mb-0">
                                    <span>5</span>
                                    <i class="fas fa-star"></i>
                                </p>
                                <div class="col-md-8 pr-0 pl-0">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 79%;" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <p class="text-left col-sm-2 mb-0 pr-0">1985</p>
                            </div>
                            <!--4 Star-->
                            <div class="row d-flex align-items-center mt-4" style="">
                                <p class="col-sm-2 mb-0">
                                    <span>4</span>
                                    <i class="fas fa-star"></i>
                                </p>
                                <div class="col-md-8 pr-0 pl-0">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <p class="text-left col-sm-2 mb-0 pr-0">356</p>
                            </div>

                            <!--3 Star-->
                            <div class="row d-flex align-items-center mt-4" style="">
                                <p class="col-sm-2 mb-0">
                                    <span>3</span>
                                    <i class="fas fa-star"></i>
                                </p>
                                <div class="col-md-8 pr-0 pl-0">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 13%;" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <p class="text-left col-sm-2 mb-0 pr-0">130</p>
                            </div>

                            <!--2 Star-->
                            <div class="row d-flex align-items-center mt-4" style="">
                                <p class="col-sm-2 mb-0">
                                    <span>2</span>
                                    <i class="fas fa-star"></i>
                                </p>
                                <div class="col-md-8 pr-0 pl-0">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 9%;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <p class="text-left col-sm-2 mb-0 pr-0">90</p>
                            </div>

                            <!--1 Star-->
                            <div class="row d-flex align-items-center mt-4" style="">
                                <p class="col-sm-2 mb-0">
                                    <span>1</span>
                                    <i class="fas fa-star"></i>
                                </p>
                                <div class="col-md-8 pr-0 pl-0">
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 3%;" aria-valuenow="3" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <p class="text-left col-sm-2 mb-0 pr-0">33</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <section style="color: #000; background-color: #f3f2f2;">
                            <div class="container py-5">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-10 col-xl-8 text-center">
                                        <h3 class="fw-bold mb-4">Testimonials</h3>
                                        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                                            numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                                            quisquam eum porro a pariatur veniam.
                                        </p>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-md-4 mb-4 mb-md-0">
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
                                                    <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                                                    ad velit ab hic tenetur.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">

                                                <h5 class="font-weight-bold">Maggie McLoan</h5>
                                                <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
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
                                                        <i class="fas fa-star fa-sm text-info"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                                                    sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                                                    labore laboriosam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">
                                                <h5 class="font-weight-bold">Alexa Horwitz</h5>
                                                <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
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
                                                        <i class="far fa-star fa-sm text-info"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                                                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                                                    vestibulum in tempus viverra turpis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section style="color: #000; background-color: #f3f2f2;">
                            <div class="container py-5">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-10 col-xl-8 text-center">
                                        <h3 class="fw-bold mb-4">Testimonials</h3>
                                        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                                            numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                                            quisquam eum porro a pariatur veniam.
                                        </p>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">
                                                <h5 class="font-weight-bold">Teresa 2May</h5>
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
                                                    <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                                                    ad velit ab hic tenetur.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">

                                                <h5 class="font-weight-bold">Maggie 2McLoan</h5>
                                                <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
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
                                                        <i class="fas fa-star fa-sm text-info"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                                                    sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                                                    labore laboriosam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">
                                                <h5 class="font-weight-bold">Alexa 2Horwitz</h5>
                                                <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
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
                                                        <i class="far fa-star fa-sm text-info"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                                                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
                                                    vestibulum in tempus viverra turpis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="carousel-item">
                        <section style="color: #000; background-color: #f3f2f2;">
                            <div class="container py-5">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-10 col-xl-8 text-center">
                                        <h3 class="fw-bold mb-4">Testimonials</h3>
                                        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
                                            numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
                                            quisquam eum porro a pariatur veniam.
                                        </p>
                                    </div>
                                </div>

                                <div class="row text-center">
                                    <div class="col-md-4 mb-4 mb-md-0">
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
                                                    <i class="fas fa-quote-left pe-2"></i>Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat
                                                    ad velit ab hic tenetur.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4 mb-md-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">

                                                <h5 class="font-weight-bold">Maggie McLoan</h5>
                                                <h6 class="font-weight-bold my-3">Photographer at Studio LA</h6>
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
                                                        <i class="fas fa-star fa-sm text-info"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>Autem, totam debitis suscipit saepe
                                                    sapiente magnam officiis quaerat necessitatibus odio assumenda perferendis
                                                    labore laboriosam.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-0">
                                        <div class="card">
                                            <div class="card-body py-4 mt-2">
                                                <h5 class="font-weight-bold">Alexa Horwitz</h5>
                                                <h6 class="font-weight-bold my-3">Front-end Developer in NY</h6>
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
                                                        <i class="far fa-star fa-sm text-info"></i>
                                                    </li>
                                                </ul>
                                                <p class="mb-2">
                                                    <i class="fas fa-quote-left pe-2"></i>Cras sit amet nibh libero, in gravida
                                                    nulla metus scelerisque ante sollicitudin commodo cras purus odio,
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
                <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>




    </div>


    <div class="row mt-4">
        <div class="col-md-6">
            <h3>Related Attractions and Recommendations</h3>
            <div class="card-deck">
                <div class="card">
                    <h5 class="card-title position-absolute bottom-0 end-0 p-3">
                        <a href="details-page.html" style="color: #fff; text-decoration: none;">Louvre Museum</a>
                    </h5>
                    <img src="assets/img/louvre_museum.jpg" class="card-img-top" alt="Louvre Museum">
                </div>
                <div class="card">
                    <h5 class="card-title position-absolute bottom-0 end-0 p-3">
                        <a href="details-page.html" style="color: #fff; text-decoration: none;">Notre-Dame Cathedral</a>
                    </h5>
                    <img src="assets/img/notre_dame_cathedral.jpg" class="card-img-top" alt="Louvre Museum">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Location and Map</h3>
            <div><img src="assets/img/map.jpg" class="d-block w-100" alt="Eiffel Tower 1"></div>
        </div>
    </div>
</div>
<?php
// Include the footer
include 'footer.php';
?>
