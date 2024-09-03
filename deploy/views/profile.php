<?php
session_start();
include "../controllers/authentication_checker.php";
if (isset($_SESSION['pinPass']['pin'])){
    unset($_SESSION['pinPass']['pin']);
} elseif(isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] !== "USER_HONEY_ACC_1"){
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
if(isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] !== "USER_HONEY_ACC_1"){
    echo'
<!-- Profile Container -->
<div class="profile-container">
    <div class="profile-header">
        <h2>User Profile</h2>
    </div>
    <div class="profile-info">
        <label for="username">Username:</label>
        <p id="username"></p>
    </div>
    <div class="profile-info">
        <label for="email">Email:</label>
        <p id="email"></p>
    </div>
    <div class="profile-info">
        <label for="address">Address:</label>
        <p id="address"></p>
    </div>
    <div class="profile-info">
        <label for="phone">Phone Number:</label>
        <p id="phone"></p>
    </div>
</div>
<script>
    function loadDoc() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                let parser = JSON.parse(this.responseText);
                document.getElementById("username").innerHTML = parser.username;
                document.getElementById("email").innerHTML = parser.password;
                document.getElementById("address").innerHTML = parser.address;
                document.getElementById("phone").innerHTML = parser.phone;
                
            }
        };
        xhttp.open("GET", "../resources/user_infos.json", true);
        xhttp.send();
    }
    setTimeout(function () {
        loadDoc();
    }, 10);
</script>
<script>
function loadDoc() {
        let xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState === 4 && this.status === 200) {
                console.log(this.responseText);  // Log the entire JSON content to the console
            }
        };
        xhttp.open("GET", "../resources/user_infos.json", true);
        xhttp.send();
    }
    loadDoc();
</script>
    ';}else{
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
        <p id="address">12 N Brick Street Mars California</p>
    </div>
    <div class="profile-info">
        <label for="phone">Phone Number:</label>
        <p id="phone">+1 (234) 567-8901</p>
    </div>
</div>';
}
?>

<!-- Footer -->
<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
