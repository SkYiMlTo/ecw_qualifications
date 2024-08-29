<?php
session_start();
?>

<?php include "../controllers/authentication_checker.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter PIN - Honey Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- PIN Container -->
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow" style="max-width: 600px;">
        <h2 class="text-center mb-4">Enter Your 8-Digit PIN</h2>
        <p>You need to enter your personal pin to access your data.</p>
        <form id="pinForm" action="../controllers/db_controller.php?func=enterPin" method="POST" >
            <div class="d-flex justify-content-between mb-3">
                <input type="text" maxlength="1" name="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="2" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="3" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="4" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="5" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="6" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="7" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
                <input type="text" maxlength="1" name="8" oninput="this.value=this.value.replace(/[^0-9]/g,'');" class="form-control text-center mx-2" required autofocus style="width: 40px;height: 40px;">
            </div>
            <?php
            if($_GET) {
                if (isset($_GET['pinError'])) {
                    echo 'Wrong pin!';
                }
                if (isset($_GET['pinNotFound'])) {
                    echo 'You must enter your pin!';
                }
            }
            ?>
            <button type="submit" class="btn btn-primary w-100 mt-2">Submit</button>
        </form>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- PIN Input Script -->
<script>
    const inputs = document.querySelectorAll('.form-control');

    inputs.forEach((input, index) => {
        input.addEventListener('input', (e) => {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && input.value === '' && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });
</script>

</body>
</html>
