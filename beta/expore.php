<!-- explorer.php -->

<?php include 'header.php'; ?>

<section class="jumbotron">
    <div class="container">
        <h1>Welcome to the Explorer Page!</h1>
        <p>Start your adventure and explore new destinations.</p>
        <a href="explore.php" class="btn btn-primary">Get Started</a>
    </div>
</section>

<section class="container">
    <h2>Popular Destinations</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/400x300/?beach" class="card-img-top" alt="Beach">
                <div class="card-body">
                    <h5 class="card-title">Beach Paradise</h5>
                    <p class="card-text">Experience the beauty of pristine beaches.</p>
                    <p class="card-text"><strong>Location:</strong> Beach Town, ABC Island</p>
                    <p class="card-text"><strong>Activities:</strong> Sunbathing, Snorkeling, Water Sports</p>
                    <a href="destination.php?id=1" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/400x300/?mountain" class="card-img-top" alt="Mountain">
                <div class="card-body">
                    <h5 class="card-title">Mountain Expedition</h5>
                    <p class="card-text">Embark on a thrilling mountain adventure.</p>
                    <p class="card-text"><strong>Location:</strong> Mountain Range, XYZ Country</p>
                    <p class="card-text"><strong>Activities:</strong> Hiking, Climbing, Wildlife Spotting</p>
                    <a href="destination.php?id=2" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://source.unsplash.com/400x300/?city" class="card-img-top" alt="City">
                <div class="card-body">
                    <h5 class="card-title">City Exploration</h5>
                    <p class="card-text">Discover vibrant cities and their rich cultures.</p>
                    <p class="card-text"><strong>Location:</strong> City Center, PQR City</p>
                    <p class="card-text"><strong>Highlights:</strong> Historical Sites, Museums, Local Cuisine</p>
                    <a href="destination.php?id=3" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
