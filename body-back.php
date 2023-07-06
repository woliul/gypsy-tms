<!-- Banner Content -->
<div class="banner-cn">

    <!-- Tabs Cat Form -->
    <ul class="tabs-cat text-center row">
        <li class="cate-item active col-xs-2">
            <a data-toggle="tab" href="#form-hotel" title="">
                <span>Hotel</span><img width="40px" src="images/icon-hotel.svg" alt=""></a>
        </li>
        <li class="cate-item col-xs-2">
            <a data-toggle="tab" href="#form-flight" title="">
                <span>Flight</span><img width="40px" src="images/icon-flight.svg" alt="">
            </a>
        </li>

        <li class="cate-item col-xs-2">
            <a data-toggle="tab" href="#form-car" title="">
                <span>Car</span><img width="40px" src="images/icon-car.svg" alt=""></a>
        </li>
        <li class="cate-item col-xs-2">
            <a data-toggle="tab" href="#form-bus" title="">
                <span>Bus</span><img width="40px" src="images/icon-bus.svg" alt=""></a>
        </li>
        <li class="cate-item col-xs-2">
            <a data-toggle="tab" href="#form-train" title="">
                <span>Train</span><img width="40px" src="images/icon-train.svg" alt=""></a>
        </li>
        <li class="cate-item col-xs-2">
            <a data-toggle="tab" href="#form-tour" title="">
                <span>Packages</span><img width="40px" src="images/icon-tour.svg" alt=""></a>
        </li>
    </ul>
    <!-- End Tabs Cat -->

    <!-- Tabs Content -->
    <div class="tab-content">

        <!-- Search Hotel -->
        <div class="form-cn form-hotel tab-pane active in" id="form-hotel">
            <h2>Where would you like to go?</h2>
            <div class="form-search clearfix">
                <div class="form-field field-destination">
                    <label for="destination"><span>Destination:</span> Country, City, Airport, Area,
                        Landmark</label>
                    <input type="text" id="destination" class="field-input">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Check in">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Check out">
                </div>
                <div class="form-field field-select">
                    <div class="select">
                        <span>Guest</span>
                        <select>
                            <option>Guest</option>
                            <option>1 Guest</option>
                            <option>2 Guest</option>
                            <option>3 Guest</option>
                        </select>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search Hotel -->

        <!-- Search Car -->
        <div class="form-cn form-car tab-pane" id="form-car">
            <h2>Where would you like to go?</h2>
            <div class="form-search clearfix">
                <div class="form-field field-Picking">
                    <label for="Picking"><span>Picking up:</span> City, airport...</label>
                    <input type="text" id="Picking" class="field-input">
                </div>
                <div class="form-field field-droping">
                    <input type="text" class="field-input" placeholder="Droping off">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Pick up date">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Drop off date">
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search Car -->

        <!-- Search Bus -->
        <div class="form-cn form-car tab-pane" id="form-bus">
            <h2>Where would you like to go?</h2>
            <ul class="form-radio">
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-2" id="radio-5" class="radio">
                        <label for="radio-1">AC</label>
                    </div>
                </li>
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-2" id="radio-6" class="radio">
                        <label for="radio-2">Non-AC</label>
                    </div>
                </li>
            </ul>
            <div class="form-search clearfix" style="margin-top: 1px">
                <div class="form-field field-Picking">
                    <label for="Picking"><span>Picking up:</span> City, airport...</label>
                    <input type="text" id="Picking" class="field-input">
                </div>
                <div class="form-field field-droping">
                    <input type="text" class="field-input" placeholder="Droping off">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Pick up date">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Drop off date">
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search BUS -->

        <!-- Search Train-->
        <div class="form-cn form-car tab-pane" id="form-train">
            <h2>Where would you like to go?</h2>
            <ul class="form-radio">
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-2" id="radio-5" class="radio">
                        <label for="radio-4">AC</label>
                    </div>
                </li>
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-2" id="radio-6" class="radio">
                        <label for="radio-5">First Class</label>
                    </div>
                </li>
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-2" id="radio-5" class="radio">
                        <label for="radio-6">Second Class</label>
                    </div>
                </li>
            </ul>
            <div class="form-search clearfix" style="margin-top: 1px">
                <div class="form-field field-Picking">
                    <label for="Picking"><span>Picking up:</span> City, Station...</label>
                    <input type="text" id="Picking" class="field-input">
                </div>
                <div class="form-field field-droping">
                    <input type="text" class="field-input" placeholder="Droping off">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Pick up date">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Drop off date">
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-lager awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search Train -->

        <!-- Search Flight-->
        <div class="form-cn form-flight tab-pane" id="form-flight">
            <h2>Where would you like to go?</h2>
            <div class="form-search clearfix">
                <div class="form-field field-from">
                    <label for="flight-from"><span>Flight from:</span> Airport</label>
                    <input type="text" name="flightfrom" id="flight-from" class="field-input">
                </div>
                <div class="form-field field-to">
                    <label for="flight-to"><span>To :</span> Country, Airpor</label>
                    <input type="text" id="flight-to" class="field-input">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Departing">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Returning">
                </div>
                <div class="form-field field-select field-adult">
                    <div class="select">
                        <span>Adults</span>
                        <select>
                            <option>Adults</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-field field-select field-children">
                    <div class="select">
                        <span>Children</span>
                        <select>
                            <option>Children</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search Flight -->

        <!-- Search Package -->
        <div class="form-cn form-package tab-pane" id="form-tour">
            <h2>Where would you like to go?</h2>
            <ul class="form-radio">
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-1" id="radio-1" class="radio">
                        <label for="radio-1">Flight + Hotel</label>
                    </div>
                </li>
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-1" id="radio-2" class="radio">
                        <label for="radio-2">Flight + Hotel +Car</label>
                    </div>
                </li>
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-1" id="radio-3" class="radio">
                        <label for="radio-3">Hotel +Car</label>
                    </div>
                </li>
                <li>
                    <div class="radio-checkbox">
                        <input type="radio" name="radio-1" id="radio-4" class="radio">
                        <label for="radio-4">Flight +Car</label>
                    </div>
                </li>

            </ul>
            <div class="form-search clearfix">
                <div class="form-field field-from">
                    <label for="filghtfrom"><span>Flight From:</span> Airport...</label>
                    <input type="text" id="filghtfrom" class="field-input">
                </div>
                <div class="form-field field-to">
                    <label for="flightto"><span>To:</span> Country, Airport</label>
                    <input type="text" id="flightto" class="field-input">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Departing">
                </div>
                <div class="form-field field-date">
                    <input type="text" class="field-input calendar-input" placeholder="Returning">
                </div>
                <div class="form-field field-select field-adults">
                    <div class="select">
                        <span>Adults</span>
                        <select>
                            <option>Adults</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-field field-select field-children">
                    <div class="select">
                        <span>Children</span>
                        <select>
                            <option>Children</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search Package -->

        <!-- Search Tour-->
        <div class="form-cn form-tour tab-pane" id="form-package">
            <h2>Where would you like to go?</h2>
            <div class="form-search clearfix">
                <div class="form-field field-select field-region">
                    <div class="select">
                        <span>Region: <small>Wourldwide, africa..</small></span>
                        <select>
                            <option>Africa</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-field field-select field-country">
                    <div class="select">
                        <span>Country</span>
                        <select>
                            <option>Country</option>
                            <option>Viet Nam</option>
                            <option>Thai Lan</option>
                        </select>
                    </div>
                </div>
                <div class="form-field field-select field-style">
                    <div class="select">
                        <span>Tour Style</span>
                        <select>
                            <option>Style One</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                </div>
                <div class="form-submit">
                    <button type="submit" class="awe-btn awe-btn-medium awe-search">Search</button>
                </div>
            </div>
        </div>
        <!-- End Search Tour -->

    </div>
    <!-- End Tabs Content -->

</div>
<!-- End Banner Content -->

</div>

</section>
<!--End Banner-->

<!-- Sales -->
<section class="sales">
    <!-- Title -->
    <div class="title-wrap">
        <div class="container">
            <div class="travel-title float-left">
                <h2>Hot Sale Today: <span>Paris, Amsterdam, Saint Petersburg & more</span></h2>
            </div>
            <a href="#" title="" class="awe-btn awe-btn-5 awe-btn-lager arrow-right text-uppercase float-right">See
                all</a>
        </div>
    </div>
    <!-- End Title -->
    <!-- Hot Sales Content -->

    <div class="container">
        <div class="sales-cn">
            <div class="row">
                <!-- HostSales Item -->
                <?php
                $query2 = "SELECT * FROM hotel WHERE id=1";
                $result2 = mysql_query($query2) or die("Query Failed : " . mysql_error());
                while ($row = mysql_fetch_array($result2)) {

                ?>
                <div class="col-xs-6 col-md-3">
                    <div class="sales-item">
                        <figure class="home-sales-img">
                            <a href="" title="">
                                <img src="images/deal/<? echo $row['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                Save <span>20</span>%
                            </figcaption>
                        </figure>
                        <div class="home-sales-text">
                            <div class="home-sales-name-places">
                                <div class="home-sales-name">
                                    <a href="#" title=""><? echo $row['name']; ?></a>
                                </div>
                                <div class="home-sales-places">
                                    <a href="#" title=""><? echo $row['location']; ?></a>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="price-box">
                                <span class="price old-price">From  <del>$269</del></span>
                                <span class="price special-price">$<? echo $row['price'];
                                    } ?><small>/night</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End HostSales Item -->
                <!-- HostSales Item -->
                <?php
                $query2 = "SELECT * FROM hotel WHERE id=2";
                $result2 = mysql_query($query2) or die("Query Failed : " . mysql_error());
                while ($row = mysql_fetch_array($result2)) {

                ?>
                <div class="col-xs-6 col-md-3">
                    <div class="sales-item">
                        <figure class="home-sales-img">
                            <a href="" title="">
                                <img src="images/deal/<? echo $row['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                Save <span>50</span>%
                            </figcaption>
                        </figure>

                        <div class="home-sales-text">
                            <div class="home-sales-name-places">
                                <div class="home-sales-name">
                                    <a href="#" title=""><? echo $row['name']; ?></a>
                                </div>
                                <div class="home-sales-places">
                                    <a href="" title=""><? echo $row['location']; ?></a>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="price-box">
                                <span class="price old-price">From  <del>$632</del></span>
                                <span class="price special-price">$<? echo $row['price'];
                                    } ?><small>/night</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End HostSales Item -->
                <!-- HostSales Item -->
                <?php
                $query2 = "SELECT * FROM hotel WHERE id=3";
                $result2 = mysql_query($query2) or die("Query Failed : " . mysql_error());
                while ($row = mysql_fetch_array($result2)) {

                ?>
                <div class="col-md-6">
                    <div class="sales-item ">
                        <figure class="home-sales-img">
                            <a href="" title="">
                                <img src="images/deal/<? echo $row['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                Save <span>30</span>%
                            </figcaption>
                        </figure>
                        <div class="home-sales-text">
                            <div class="home-sales-name-places">
                                <div class="home-sales-name">
                                    <a href="#" title=""><? echo $row['name']; ?></a>
                                </div>
                                <div class="home-sales-places">
                                    <a href="" title=""><? echo $row['location']; ?></a>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="price-box">
                                <span class="price old-price">From  <del>$582</del></span>
                                <span class="price special-price">$<? echo $row['price'];
                                    } ?><small>/night</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End HostSales Item -->
                <!-- HostSales Item -->
                <?php
                $query2 = "SELECT * FROM hotel WHERE id=4";
                $result2 = mysql_query($query2) or die("Query Failed : " . mysql_error());
                while ($row = mysql_fetch_array($result2)) {

                ?>
                <div class="col-md-6">
                    <div class="sales-item">
                        <figure class="home-sales-img">
                            <a href="" title="">
                                <img src="images/deal/<? echo $row['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                Save <span>30</span>%
                            </figcaption>
                        </figure>
                        <div class="home-sales-text">
                            <div class="home-sales-name-places">
                                <div class="home-sales-name">
                                    <a href="#" title=""><? echo $row['name']; ?></a>
                                </div>
                                <div class="home-sales-places">
                                    <a href="" title=""><? echo $row['location']; ?></a>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="price-box">
                                <span class="price old-price">From  <del>$457</del></span>
                                <span class="price special-price">$<? echo $row['price'];
                                    } ?><small>/night</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End HostSales Item -->
                <!-- HostSales Item -->
                <?php
                $query2 = "SELECT * FROM hotel WHERE id=5";
                $result2 = mysql_query($query2) or die("Query Failed : " . mysql_error());
                while ($row = mysql_fetch_array($result2)) {

                ?>
                <div class="col-xs-6 col-md-3">
                    <div class="sales-item">
                        <figure class="home-sales-img">
                            <a href="" title="">
                                <img src="images/deal/<? echo $row['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                Save <span>50</span>%
                            </figcaption>
                        </figure>
                        <div class="home-sales-text">
                            <div class="home-sales-name-places">
                                <div class="home-sales-name">
                                    <a href="#" title=""><? echo $row['name']; ?></a>
                                </div>
                                <div class="home-sales-places">
                                    <a href="" title=""><? echo $row['location']; ?></a>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="price-box">
                                <span class="price old-price">From  <del>$269</del></span>
                                <span class="price special-price">$<? echo $row['price'];
                                    } ?><small>/night</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End HostSales Item -->
                <!-- HostSales Item -->
                <?php
                $query2 = "SELECT * FROM hotel WHERE id=6";
                $result2 = mysql_query($query2) or die("Query Failed : " . mysql_error());
                while ($row = mysql_fetch_array($result2)) {

                ?>
                <div class="col-xs-6 col-md-3">
                    <div class="sales-item">
                        <figure class="home-sales-img">
                            <a href="" title="">
                                <img src="images/deal/<? echo $row['image']; ?>" alt="">
                            </a>
                            <figcaption>
                                Save <span>50</span>%
                            </figcaption>
                        </figure>
                        <div class="home-sales-text">
                            <div class="home-sales-name-places">
                                <div class="home-sales-name">
                                    <a href="#" title=""><? echo $row['name']; ?></a>
                                </div>
                                <div class="home-sales-places">
                                    <a href="" title=""><? echo $row['location']; ?></a>
                                </div>
                            </div>
                            <hr class="hr">
                            <div class="price-box">
                                <span class="price old-price">From  <del>$354</del></span>
                                <span class="price special-price">$<? echo $row['price'];
                                    } ?><small>/night</small></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End HostSales Item -->
            </div>
        </div>
    </div>
    <!-- End Hot Sales Content -->
</section>
<!-- End Sales -->


<!-- Confidence and Subscribe  -->
<section class="confidence-subscribe">
    <!-- Background -->
    <div class="bg-parallax bg-3"></div>
    <!-- End Background -->
    <div class="container">
        <div class="row cs-sb-cn">

            <!-- Confidence -->
            <div class="col-md-6">
                <div class="confidence">
                    <h3>Book with confidence</h3>
                    <ul>
                        <li>
                            <span class="label-nb">01</span>
                            <h5>No booking charges</h5>
                            <p>We don't charge you an extra fee for booking a hotel room with us</p>
                        </li>
                        <li>
                            <span class="label-nb">02</span>
                            <h5>No cancellation fees</h5>
                            <p>We don't charge you a cancellation or modification fee in case plans change</p>
                        </li>
                        <li>
                            <span class="label-nb">03</span>
                            <h5>Instant confirmation</h5>
                            <p>Instant booking confirmation whether booking online or via the telephone</p>
                        </li>
                        <li>
                            <span class="label-nb">04</span>
                            <h5>Flexible booking</h5>
                            <p>You can book up to a whole year in advance until the moment of your stay</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Confidence -->
            <!-- Subscribe -->
            <div class="col-md-6">
                <div class="subscribe">
                    <h3>Subscribe to our newsletter</h3>
                    <p>Enter your email address and we’ll send you our regular promotional emails, packed with
                        special offers, great deals, and huge discounts</p>
                    <!-- Subscribe Form -->
                    <div class="subscribe-form">
                        <form action="#" method="get">
                            <input type="text" name="" value="" placeholder="Your email" class="subscribe-input">
                            <button type="submit"
                                    class="awe-btn awe-btn-5 arrow-right text-uppercase awe-btn-lager">subcrible
                            </button>
                        </form>
                    </div>
                    <!-- End Subscribe Form -->
                    <!-- Follow us -->
                    <div class="follow-us">
                        <h4>Follow us</h4>
                        <div class="follow-group">
                            <a href="" title=""><i class="fa fa-facebook"></i></a>
                            <a href="" title=""><i class="fa fa-twitter"></i></a>
                            <a href="" title=""><i class="fa fa-pinterest"></i></a>
                            <a href="" title=""><i class="fa fa-linkedin"></i></a>
                            <a href="" title=""><i class="fa fa-instagram"></i></a>
                            <a href="" title=""><i class="fa fa-google-plus"></i></a>
                            <a href="" title=""><i class="fa fa-digg"></i></a>
                        </div>
                    </div>
                    <!-- Follow us -->
                </div>
            </div>
            <!-- End Subscribe -->

        </div>
    </div>
</section>
<!-- End Confidence and Subscribe  -->