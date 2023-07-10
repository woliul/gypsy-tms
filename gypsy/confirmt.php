<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/9/23
 * Time: 7:44 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Booking Confirmation - Travel Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php include 'navigation.php'; ?>

<section class="py-5">
    <div class="container">
        <h3 class="mb-4">Booking Confirmation</h3>

        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i> Your booking has been confirmed!
        </div>

        <h5>Booking Details:</h5>
        <p><strong>Flight:</strong> Flight 1</p>
        <p><strong>Airline:</strong> Airline A</p>
        <p><strong>Price:</strong> $200</p>

        <p>Thank you for booking with us. You will receive a confirmation email shortly.</p>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

