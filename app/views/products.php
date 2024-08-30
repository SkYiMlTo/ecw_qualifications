<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - Products</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php" ?>
<?php
if (!(isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] === "OBVIOUS_HONEY_ACC_1")) {
    echo '
<!-- Hero Section -->
<div class="container-fluid p-5 bg-warning text-center text-white">
    <h1>Welcome to the Honey Store!</h1>
    <p class="lead">The best fake products at the best honey prices.</p>
    <a href="#products" class="btn btn-dark btn-lg">Shop Now</a>
</div>

<!-- Products Section -->
<div class="container my-5" id="products">
    <h2 class="text-center">Our Products</h2>
    <div class="row text-center">
        <!-- Product 1 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=1" class="card-img-top" alt="Honeycomb">
                <div class="card-body">
                    <h5 class="card-title">Organic Honeycomb</h5>
                    <p class="card-text">$19.99 - Pure, raw honeycomb straight from the hive.</p>
                    <a href="#" class="btn btn-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=2" class="card-img-top" alt="Honey Jar">
                <div class="card-body">
                    <h5 class="card-title">Wildflower Honey</h5>
                    <p class="card-text">$29.99 - Delicious honey made from wildflowers.</p>
                    <a href="#" class="btn btn-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=3" class="card-img-top" alt="Beeswax">
                <div class="card-body">
                    <h5 class="card-title">Pure Beeswax</h5>
                    <p class="card-text">$39.99 - Natural beeswax for crafts and skincare.</p>
                    <a href="#" class="btn btn-warning">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row text-center mt-4">
        <!-- Product 4 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=4" class="card-img-top" alt="Honey Spoon">
                <div class="card-body">
                    <h5 class="card-title">Honey Dipper</h5>
                    <p class="card-text">$9.99 - Wooden honey dipper for easy honey drizzling.</p>
                    <a href="#" class="btn btn-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 5 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=5" class="card-img-top" alt="Bee Pollen">
                <div class="card-body">
                    <h5 class="card-title">Bee Pollen</h5>
                    <p class="card-text">$24.99 - Nutrient-rich bee pollen for health and wellness.</p>
                    <a href="#" class="btn btn-warning">Add to Cart</a>
                </div>
            </div>
        </div>
        <!-- Product 6 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=6" class="card-img-top" alt="Honey Tea">
                <div class="card-body">
                    <h5 class="card-title">Honey & Tea Set</h5>
                    <p class="card-text">$49.99 - A delightful set of honey and premium tea blends.</p>
                    <a href="#" class="btn btn-warning">Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>';
}
?>

<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
