<?php
session_start();

if($_SESSION['__userSession']['idUser']){
    if($_GET['page'] == 'profile' && isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] !== "USER_HONEY_ACC_1")
        header('Location: ../views/pin.php');
    if($_GET['page'] == 'profile' && isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] === "USER_HONEY_ACC_1")
        header('Location: ../views/profile.php');
    if($_GET['page'] == 'cart')
        header('Location: ../views/cart.php');
    if($_GET['page'] == 'support')
        header('Location: ../views/support.php');
}else{
    header('Location: ../views/login.php?noConnect=true');
}