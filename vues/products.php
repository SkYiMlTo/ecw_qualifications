<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Honey Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="container-fluid p-5 bg-warning text-center text-white">
    <h1>Welcome to the Honey Store!</h1>
    <p class="lead">The best fake products at the best honey prices.</p>
    <a href="products.html" class="btn btn-dark btn-lg">Shop Now</a>
</div>

<!-- Products Section -->
<div class="container my-5">
    <div class="col">
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/300?random=1" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Honey Product 1</h5>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/300?random=2" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Honey Product 2</h5>
                        <p class="card-text">$29.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/300?random=3" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Honey Product 3</h5>
                        <p class="card-text">$39.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <!-- Product 4 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/300?random=4" class="card-img-top" alt="Product 1">
                    <div class="card-body">
                        <h5 class="card-title">Honey Product 4</h5>
                        <p class="card-text">$49.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/300?random=5" class="card-img-top" alt="Product 2">
                    <div class="card-body">
                        <h5 class="card-title">Honey Product 5</h5>
                        <p class="card-text">$59.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
            <!-- Product 6 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="https://picsum.photos/300?random=6" class="card-img-top" alt="Product 3">
                    <div class="card-body">
                        <h5 class="card-title">Honey Product 6</h5>
                        <p class="card-text">$69.99</p>
                        <a href="#" class="btn btn-primary">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-light text-center p-3">
    <p>&copy; 2024 Honey Store. All rights reserved.</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
