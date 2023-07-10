<?php
/**
 * Created in PhpStorm.
 * Project Name: gypsy
 * User: woliul
 * Date: 7/9/23
 * Time: 7:43 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Flight Payment - Travel Explorer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php include 'navigation.php'; ?>

<section class="py-5">
    <div class="container">
        <h3 class="mb-4">Payment Details</h3>

        <form>
            <div class="form-group">
                <label for="cardholder">Cardholder Name</label>
                <input type="text" class="form-control" id="cardholder" placeholder="Enter cardholder name">
            </div>
            <div class="form-group">
                <label for="cardnumber">Card Number</label>
                <input type="text" class="form-control" id="cardnumber" placeholder="Enter card number">
            </div>
            <div class="form-group">
                <label for="expiration">Expiration Date</label>
                <input type="text" class="form-control" id="expiration" placeholder="MM/YY">
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" class="form-control" id="cvv" placeholder="Enter CVV">
            </div>
            <button type="submit" class="btn btn-primary"><i class="fas fa-credit-card"></i> Pay Now</button>
        </form>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
