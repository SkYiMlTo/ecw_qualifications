<?php
session_start();
?>

<?php include "../controllers/authentication_checker.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Honey Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .chat-box {
            max-width: 700px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .message {
            margin-bottom: 20px;
        }

        .message .user {
            font-weight: bold;
        }

        .message .admin {
            font-weight: bold;
            color: #007bff;
        }

        .message .text {
            margin-top: 5px;
            padding: 10px;
            border-radius: 10px;
            background-color: #e9ecef;
        }

        .message.user-message .text {
            background-color: #d1e7dd;
        }

        .message.admin-message .text {
            background-color: #cfe2ff;
        }
    </style>
</head>
<body>

<?php include "navbar.php" ?>

<?php
echo '
<!-- Chat Box -->
<div class="chat-box">
    <div class="message user-message">
        <div class="user">'.$_SESSION['__userSession']['username'].':</div>
        <div class="text">Hi, I need help with my order. I can\'t find the order confirmation email.</div>
    </div>
    <div class="message admin-message">
        <div class="admin">Admin:</div>
        <div class="text">Hello! No worries, I can help with that. Can you please provide me with your order number?</div>
    </div>
    <div class="message user-message">
        <div class="user">'.$_SESSION['__userSession']['username'].':</div>
        <div class="text">Sure, the order number is #AB12345.</div>
    </div>
    <div class="message admin-message">
        <div class="admin">Admin:</div>
        <div class="text">Thanks! It looks like there was an issue with the email server. But don\'t worry, your order is confirmed and will be delivered soon.</div>
    </div>
    <div class="message user-message">
        <div class="user">'.$_SESSION['__userSession']['username'].':</div>
        <div class="text">Thank you! I was worried there was a problem.</div>
    </div>
    <div class="message admin-message">
        <div class="admin">Admin:</div>
        <div class="text">You\'re welcome! By the way, remember to check our <a href="products.php">Products page</a> for new arrivals!</div>
    </div>
    <div class="message user-message">
        <div class="user">'.$_SESSION['__userSession']['username'].':</div>
        <div class="text">Will do! Thanks again.</div>
    </div>
</div>
';
?>

<?php include "footer.php" ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
