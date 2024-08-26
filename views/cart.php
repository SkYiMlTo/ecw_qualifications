<?php
session_start();
?>

<?php include "../controllers/authentication_checker.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .wip-container {
                background-color: #f8f9fa;
            }

            .wip-box {
                padding: 50px;
                border: 1px solid #ddd;
                border-radius: 10px;
                background-color: #ffffff;
                box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            }

            .wip-box h1 {
                font-size: 2.5rem;
                color: #ff6347; /* Tomato color */
                margin-bottom: 20px;
            }

            .wip-box p {
                font-size: 1.25rem;
                color: #555555;
            }
        </style>
</head>
<body>

<?php include "navbar.php" ?>

<!-- Work in Progress Container -->
<div class="wip-container position-absolute top-50 start-50 translate-middle">
    <div class="wip-box">
        <h1 class="text-center">🚧 Work in Progress 🚧</h1>
        <p>Our cart feature is currently under construction. Please check back later!</p>
    </div>
</div>

<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
