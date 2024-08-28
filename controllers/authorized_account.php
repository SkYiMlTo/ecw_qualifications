<?php
if(!isset($_SESSION))
{
    session_start();
}
include 'credentials.php';

function db_connect(): false|mysqli
{
    $hostname = DB_HOSTNAME;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    $db = DB_DBNAME;

    return mysqli_connect($hostname,$username,$password,$db);
}

function is_account_authorized(): void
{
//    $dbconnect = db_connect();
//    if ($dbconnect->connect_error) {
//        die("Database connection failed: " . $dbconnect->connect_error);
//    }
//    $sql = "SELECT acc_type FROM users WHERE id = '" . $_SESSION['__userSession']['idUser'] . "'";
//    $result = $dbconnect->query($sql)->fetch_all()[0];
    if($_SESSION['__userSession']['accType'] !== "ADMIN_ACC"){
        header('Location: ../views/403.php');
    }
}

is_account_authorized();