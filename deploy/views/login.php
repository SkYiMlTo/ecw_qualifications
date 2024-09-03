<?php
session_start();
if(isset($_SESSION['__userSession']['idUser'])){
    header('Location: ./home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Store - Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include "navbar.php" ?>

<!-- Login Form -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <form action="../controllers/db_controller.php?func=login" method="POST">
                <?php
                if($_GET) {
                if (isset($_GET['noConnect'])) {
                echo 'You must be authenticated to access here..';
                }
                }
                ?>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-warning w-100 mb-2">Login</button>
                <?php
                if($_GET) {
                    if (isset($_GET['loginError'])) {
                        echo 'Wrong username or password!';
                    }
                }
                ?>
            </form>
        </div>
    </div>
</div>

<?php include "footer.php" ?>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
