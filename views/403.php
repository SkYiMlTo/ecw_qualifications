<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - 403 Forbidden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 56px); /* Adjust for navbar height */
            margin: 0;
        }
        .error-code {
            font-size: 10rem;
            font-weight: bold;
            color: #dc3545;
        }
        .error-message {
            font-size: 1.5rem;
            color: #6c757d;
        }
        .btn-primary {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<?php include "navbar.php" ?>

<!-- Main Content -->
<div class="main-content text-center">
    <div class="error-code">403</div>
    <div class="error-message">
        <h1>Forbidden</h1>
        <p>You don't have permission to access this page.</p>
        <a href="home.php" class="btn btn-primary">Go Back to Home</a>
    </div>
</div>

<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
