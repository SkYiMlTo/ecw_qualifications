<?php
if(!isset($_SESSION))
{
    session_start();
}

function is_account_authorized(): void
{
    if($_SESSION['__userSession']['accType'] === "ADMIN_ACC" || $_SESSION['__userSession']['accType'] === "ADMIN_HONEY_ACC_0") {
        return;
    }

    if ($_SESSION['__userSession']['accType'] === "ADMIN_HONEY_ACC_1") {
        header('Location: ../not-views/admin.php');
        return;
    }

    header('Location: ../views/403.php');
}

is_account_authorized();