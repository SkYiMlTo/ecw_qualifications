<?php
session_start();
$_SESSION['__userSession']= null;
session_destroy();
header('Location: ../views/home.php');
