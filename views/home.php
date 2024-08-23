<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php" ?>

<!-- Hero Section -->
<div class="container-fluid p-5 bg-warning text-center text-white">
    <h1>Welcome to the Honey Store</h1>
    <p class="lead">Discover the best honey and bee-related products, straight from nature.</p>
    <a href="products.php" class="btn btn-dark btn-lg">Shop Now</a>
</div>

<!-- About Section -->
<div class="container my-5">
    <div class="row">
        <div class="col-md-6">
            <img src="https://picsum.photos/600/300?random=1" class="img-fluid rounded" alt="Beekeeping">
        </div>
        <div class="col-md-6">
            <h2>About Us</h2>
            <p>At Bee & Honey Store, we are passionate about bees and the sweet products they create. Our mission is to bring you the finest honey and bee-related products, sourced directly from the best beekeepers. Whether you're looking for pure honey, beeswax products, or beekeeping equipment, we've got you covered.</p>
            <a href="products.php" class="btn btn-warning">Explore Our Products</a>
        </div>
    </div>
</div>

<!-- Featured Products Section -->
<div class="container my-5">
    <h2 class="text-center">Featured Products</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=1" class="card-img-top" alt="Honeycomb">
                <div class="card-body">
                    <h5 class="card-title">Organic Honeycomb</h5>
                    <p class="card-text">Pure, raw honeycomb straight from the hive.</p>
                    <a href="products.php#products" class="btn btn-warning">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=2" class="card-img-top" alt="Honey Jar">
                <div class="card-body">
                    <h5 class="card-title">Wildflower Honey</h5>
                    <p class="card-text">Delicious honey made from wildflowers.</p>
                    <a href="products.php#products" class="btn btn-warning">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/300?random=3" class="card-img-top" alt="Beeswax">
                <div class="card-body">
                    <h5 class="card-title">Pure Beeswax</h5>
                    <p class="card-text">Natural beeswax for crafts and skincare.</p>
                    <a href="products.php#products" class="btn btn-warning">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
