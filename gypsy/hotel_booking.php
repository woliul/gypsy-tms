<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/9/23
 * Time: 7:46 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hotel Booking - Travel Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h3 class="mb-4">Hotel Booking</h3>

    <form method="POST" action="confirmation.php">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="check_in">Check-in Date</label>
            <input type="date" class="form-control" id="check_in" name="check_in" required>
        </div>
        <div class="form-group">
            <label for="check_out">Check-out Date</label>
            <input type="date" class="form-control" id="check_out" name="check_out" required>
        </div>
        <!-- Room selection, guest details, and payment options can be added here -->
        <button type="submit" class="btn btn-primary">Confirm Booking</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

