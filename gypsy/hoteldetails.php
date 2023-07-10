<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/9/23
 * Time: 10:21 AM
 */

include 'database.php';
include_once 'functions.php';
include 'header.php';
?>
<div class="row">
    <div class="card mt-5">
        <img src="hotel-image.jpg" class="card-img-top" alt="Hotel Image">
        <div class="card-body">
            <h2 class="card-title">The Bowery Hotel</h2>
            <p class="card-text">335 Bowery, New York City, NY 10003-7138</p>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <h2>About</h2>
                    <h4 class="display-4"><i class="fas fa-star"></i> 4.5</h4>
                    <p class="card-text">899 reviews</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="card-text">Location: 4.6</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 94%" aria-valuenow="94"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="card-text">Cleanliness: 4.7</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="96"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="card-text">Service: 4.6</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 92%" aria-valuenow="92"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="card-text">Value: 4.1</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 82%" aria-valuenow="82"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <hr>
                    <p class="card-text">2023 Travelers' Choice Best of the Best</p>
                    <p class="card-text">The Bowery Hotel, a delightfully atmospheric luxury hotel in downtown
                        Manhattan, has opened its doors on the historic Bowery, ushering in a new era of
                        hospitality in one of New York's most exciting and desirable areas. Room types range from
                        standard rooms to one-bedroom terrace suites, all of which boast hardwood floors,
                        floor-to-ceiling factory windows, and sweeping views of NYC.</p>
                    <p class="card-text">Suggest edits to improve what we show.</p>
                    <p class="card-text">Improve this listing</p>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Property Amenities</h5>
                            <ul>
                                <li>Paid private parking nearby <i class="fas fa-parking"></i></li>
                                <li>Free High-Speed Internet (WiFi) <i class="fas fa-wifi"></i></li>
                                <li>Fitness Center with Gym / Workout Room <i class="fas fa-dumbbell"></i></li>
                                <li>Bar / lounge <i class="fas fa-glass-martini-alt"></i></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li>Bicycles available <i class="fas fa-bicycle"></i></li>
                                <li>Board games / puzzles <i class="fas fa-chess"></i></li>
                                <li>Books, DVDs, music for children <i class="fas fa-book"></i></li>
                                <li>Highchairs available <i class="fas fa-chair"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Room Features</h5>
                            <ul>
                                <li>Allergy-free room <i class="fas fa-seedling"></i></li>
                                <li>Blackout curtains <i class="fas fa-curtain"></i></li>
                                <li>Air conditioning <i class="fas fa-wind"></i></li>
                                <li>Desk <i class="fas fa-desktop"></i></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li>Housekeeping <i class="fas fa-broom"></i></li>
                                <li>Minibar <i class="fas fa-glass-cheers"></i></li>
                                <li>Flatscreen TV <i class="fas fa-tv"></i></li>
                                <li>Bath / shower <i class="fas fa-bath"></i></li>
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <h5>Room Types</h5>
                            <ul>
                                <li>City view <i class="fas fa-city"></i></li>
                                <li>Suites <i class="fas fa-door-closed"></i></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul>
                                <li>Non-smoking rooms <i class="fas fa-smoking-ban"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-body">
            <h2 class="card-title">You May Also Like</h2>
            <div id="hotelCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Hotel Indigo Lower East Side New York, an IHG Hotel</h5>
                                        <p class="card-text">1,497 reviews</p>
                                        <p class="card-text">7 min</p>
                                        <p class="card-text">BDT 29,917</p>
                                        <a href="#" class="btn btn-primary">View Deal</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">PUBLIC Hotel</h5>
                                        <p class="card-text">1,534 reviews</p>
                                        <p class="card-text">5 min</p>
                                        <p class="card-text">BDT 33,451</p>
                                        <a href="#" class="btn btn-primary">View Deal</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">The Ludlow New York City</h5>
                                        <p class="card-text">1,082 reviews</p>
                                        <p class="card-text">8 min</p>
                                        <p class="card-text">BDT 45,400</p>
                                        <a href="#" class="btn btn-primary">View Deal</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#hotelCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#hotelCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="card mt-5">
        <div class="card-body">
            <h2 class="card-title">Reviews</h2>
            <div class="media">
                <img src="megan.jpg" class="mr-3 rounded-circle" alt="Megan Hansen">
                <div class="media-body">
                    <h5 class="mt-0">Megan Hansen</h5>
                    <p class="text-muted">Sonoma, California</p>
                    <p class="text-muted">4 contributions</p>
                    <p class="text-muted">3 helpful votes</p>
                    <p><i class="fas fa-calendar-alt"></i> Megan Hansen wrote a review Jun 2023</p>
                    <p><i class="fas fa-map-marker-alt"></i> Sonoma, California</p>
                    <p><i class="fas fa-bullhorn"></i> 4 contributions</p>
                    <p><i class="fas fa-thumbs-up"></i> 3 helpful votes</p>
                    <p>Classy, elegant and quintessential New York! We stayed at The Bowery Hotel in May/June 2022 for a
                        long weekend, and we are already thinking about when we can visit again. We had a basic room, and
                        even at that, it was ideal. The staff at the hotel were professional and extremely helpful.
                        Nowadays when we travel, we find the hotel staff can be hit and miss, and many times it is
                        apparent when a location is understaffed. However, The Bowery Hotel must treat their employees
                        well, because there was plenty of assistance, and you never had to wait to talk to someone. I
                        stayed in a regular room, and it was very comfortable and for NY, I felt like we had a lot of
                        space. I did get the opportunity to check out other various rooms/suites, like those with a
                        balcony and sitting room, which…</p>
                    <p>Date of stay: June 2023</p>
                    <p>This review is the subjective opinion of a Tripadvisor member and not of Tripadvisor LLC.
                        Tripadvisor performs checks on reviews as part of our industry-leading trust & safety standards.
                        Read our transparency report to learn more.</p>
                    <p><i class="fas fa-thumbs-up"></i> Helpful</p>
                    <p><i class="fas fa-share"></i> Share</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
// Include the footer
include 'footer.php';
?>
