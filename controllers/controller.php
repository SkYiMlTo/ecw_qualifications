<?php

function db_connect(){
    $hostname = "localhost";
    $username = "sky";
    $password = "rootroot";
    $db = "sky";

    return mysqli_connect($hostname,$username,$password,$db);
}

function login(): void
{
    $dbconnect = db_connect();

    if ($dbconnect->connect_error) {
        die("Database connection failed: " . $dbconnect->connect_error);
    }

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '" . $username . "'";
    $result = $dbconnect->query($sql)->fetch_all();
    if($result && $password == $result[0][1]) {
        $existUser = true;
        $userId = $result[0][2];
        header('Location: ../views/home.php');
    } else {
        header('Location: ../views/login.php?loginError=true');
    }
//    $sql = "INSERT INTO users (username, password) values ('".$_POST['username']."', '".$_POST['password']."');";
}

if ($_GET['func'] == 'login'){
    login();
}
