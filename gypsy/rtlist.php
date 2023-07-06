<?php
//Review List page

session_start();
include_once '../database.php';
if (isset($_SESSION['user']) != "") {

}
$username = $_SESSION['user'];
include 'header.php';
?>

<div class="container"><div class="mt-3 pl-3 pr-3 pt-3 pb-3 card"><div class="col-12"><div class="row">
                <!-- customer reviews -->
                <div class="col-lg-5">
                    <div class="mb-6">
                        <h4 class="mb-3">Customer reviews</h4>
                        <span class="font-14"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></span>
                        <span class="h5">4.6 out of 5</span>
                        <p class="font-14">2,693 customer ratings</p>
                        <div class="row align-items-center mb-1 ">
                            <div class="col-md-2 col-2 pr-0">
                                <div class="font-12 text-dark">5 Star</div>
                            </div>
                            <div class="col-md-8 col-8 pr-2">
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <div class="font-12 text-primary">78%</div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-1">
                            <div class="col-md-2 col-2 pr-0">
                                <div class="font-12 text-dark">4 Star</div>
                            </div>
                            <div class="col-md-8 col-8 pr-2">
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <div class="font-12 text-primary">12%</div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-1">
                            <div class="col-md-2 col-2 pr-0">
                                <div class="font-12 text-dark">3 Star</div>
                            </div>
                            <div class="col-md-8 col-8 pr-2">
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <div class="font-12 text-primary">5%</div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-1">
                            <div class="col-md-2 col-2 pr-0">
                                <div class="font-12 text-dark">2 Star</div>
                            </div>
                            <div class="col-md-8 col-8 pr-2">
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:2%" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <div class="font-12 text-primary">2%</div>
                            </div>
                        </div>
                        <div class="row align-items-center mb-2">
                            <div class="col-md-2 col-2 pr-0">
                                <div class="font-12 text-dark">1 Star</div>
                            </div>
                            <div class="col-md-8 col-8 pr-2">
                                <div class="progress" style="height: 8px;">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width:1%" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="col-md-2 col-2">
                                <div class="font-12 text-primary">1%</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="mb-1">Review this book</h4>
                        <p class="font-12 ">Share your thoughts with other customers</p>
                        <a href="#!" class="btn btn-primary btn-block">Write A Review</a>
                    </div>
                </div>
                <!-- customer reviews list -->
                <div class="pl-4 col-lg-7 col-md-5 col-10">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div>
                            <h4 class="mb-0">Ratings &amp; Reviews</h4>
                        </div>
                        <div>
                            <select class="custom-select">
                                <option selected="">Sort on</option>
                                <option value="Most Recent">Most Recent</option>
                                <option value="Relevant">Relevant</option>
                                <option value="Newest">Newest</option>
                            </select>
                        </div>
                    </div>
                    <!-- reviews -->
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex mb-3 align-items-center">
                            <img src="assets/img/av.jpg" alt="" class="rounded-circle avatar-lg" style="width: 50px;">
                            <div class="ml-2">
                                <h5 class="mb-1">
                                    Sohail Rahman
                                    <i class="text-primary fas fa-check-circle" style="font-size: 12px; vertical-align: middle;"></i></h5>
                                <p class="font-12 mb-0">
                                    <span>Kolkata</span> <span>October 03,2020</span>
                                </p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <span class="font-14 mr-2"><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></span>
                            <span class="h5">Highly recommended</span>
                        </div>
                        <p>
                            Nice book explained in simplified method surely it will bring meaningful changes in your lifestyle which you always dream off Beat of luck coach you are great continue bringing great stuffs
                        </p>
                        <a href="#!" class="btn btn-light btn-sm mr-2">Helpful</a>
                        <a href="#!" class="text-inherit font-14">Report abuse</a>
                    </div>
                    <!-- reviews -->
                    <div class="mb-4 pb-4 border-bottom">
                        <div class="d-flex mb-3 align-items-center">
                            <img src="assets/img/av.jpg" alt="" class="rounded-circle avatar-lg" style="width: 50px;">
                            <div class="ml-2">
                                <h5 class="mb-1">
                                    Riya Poojary
                                    <i class="text-primary fas fa-check-circle" style="font-size: 12px;vertical-align: middle;">
                                    </i>
                                </h5>
                                <p class="font-12 mb-0">
                                    <span>Ahmedabad</span> <span>4 Month ago</span>
                                </p>
                            </div>
                        </div>
                        <div class="mb-2">
                            <span class="font-14 mr-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="far fa-star text-warning"></i></span>
                            <span class="h5">Beware!! This Book can change your Life :)</span>
                        </div>
                        <p>
                            And I absolutely mean it what I said in Headline of my comment.
                            I have been following coach.com from very long. His one article
                            has absolutely changed my life, imagine what this book can offer
                            to you. If you are looking to form a new habit you have to read
                            this Book.
                        </p>
                        <a href="#!" class="btn btn-light btn-sm mr-2">Helpful</a>
                        <a href="#!" class="text-inherit font-14">Report abuse</a>
                    </div>
                    <!-- reviews -->

                    <a href="#!" class="btn btn-primary">Read More Reviews</a>
                </div>
            </div></div></div>
</div>
<?php
// Include the footer
include 'footer.php';
?>

