<?php
if(!isset($_SESSION['__userSession']['idUser'])){
    header('Location: ../views/login.php?noConnect=true');
}