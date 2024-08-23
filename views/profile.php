<?php
session_start();
?>

<?php include "../controllers/authentication_checker.php" ?>

<?php
if (isset($_SESSION['pinPass']['pin'])){
    unset($_SESSION['pinPass']['pin']);
} else {
    header('Location: ../views/pin.php?pinNotFound=true');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Honey Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .profile-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile-header h2 {
            font-size: 2rem;
            color: #333;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info label {
            font-weight: bold;
            color: #555;
        }

        .profile-info p {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            background-color: #e9ecef;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<?php include "navbar.php" ?>

<?php
    echo'
<!-- Profile Container -->
<div class="profile-container">
    <div class="profile-header">
        <h2>User Profile</h2>
    </div>
    <div class="profile-info">
        <label for="username">Username:</label>
        <p id="username">'.$_SESSION['__userSession']['username'].'</p>
    </div>
    <div class="profile-info">
        <label for="email">Email:</label>
        <p id="email">'.$_SESSION['__userSession']['username'].'@ecw.eu</p>
    </div>
    <div class="profile-info">
        <label for="address">Address:</label>
        <p id="address">435 N Wood Ave Linden New Mexico 07036</p>
    </div>
    <div class="profile-info">
        <label for="phone">Phone Number:</label>
        <p id="phone">+1 (234) 567-8901</p>
    </div>
</div>
    ';
?>

<!-- Footer -->
<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
