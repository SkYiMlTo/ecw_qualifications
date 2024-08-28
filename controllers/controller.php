<?php
session_start();
include 'credentials.php';

function db_connect(): false|mysqli
{
    $hostname = DB_HOSTNAME;
    $username = DB_USERNAME;
    $password = DB_PASSWORD;
    $db = DB_DBNAME;

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
        $arraySession = array(
            "username" => $username,
            "idUser" => $result[0][3],
            "accType" => $result[0][2],
        );
        $_SESSION['__userSession'] = $arraySession;
        if( $result[0][2] === "OBVIOUS_HONEY_ACC_0" ){
            $_SESSION['__userSession']= null;
            session_destroy();
            header('Location: ../views/403.php');
        }
        elseif($result[0][2] === "OBVIOUS_HONEY_ACC_2" ){
            sleep(10);
            header('Location: ../views/home.php');
        }
        else{
            header('Location: ../views/home.php');
        }
    } else {
        header('Location: ../views/login.php?loginError=true');
    }
//    $sql = "INSERT INTO users (username, password) values ('".$_POST['username']."', '".$_POST['password']."');";
}

function enterPin()
{
    if (!isset($_SESSION['__userSession'])) {
        return;
    }
    $pin = $_POST["1"] . $_POST["2"] . $_POST["3"] . $_POST["4"] . $_POST["5"] . $_POST["6"] . $_POST["7"] . $_POST["8"];
    if($_SESSION['__userSession']['username'] == 'jasmith' and $pin == 'HIR*0dVS!MygZ'){
        $_SESSION['pinPass']['pin'] = true;
        header('Location: ../views/profile.php');
    } else {
        header('Location: ../views/pin.php?pinError=true');
    }
}

if ($_GET['func'] == 'login'){
    login();
}

if ($_GET['func'] == 'enterPin'){
    enterPin();
}
