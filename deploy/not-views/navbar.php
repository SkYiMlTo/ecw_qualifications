<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <?php
        if(isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] === "USER_HONEY_ACC_0"){
            echo '
                    <a class="navbar-brand" href="../views/home-honeytoken.php">Honey Store</a>
                    ';
        }else{
            echo'
                    <a class="navbar-brand" href="../views/home.php">Honey Store</a>';
        }
        ?>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <?php
                    if(isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] === "USER_HONEY_ACC_0"){
                        echo '
                    <a class="nav-link" href="../views/home-honeytoken.php">Home</a>
                    ';
                    }else{
                        echo'
                    <a class="nav-link" href="../views/home.php">Home</a>';
                    }
                    ?>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../views/products.php">Products</a>
                </li>

                <!-- Dropdown -->
                <?php
                if(isset($_SESSION['__userSession']['accType']) && ($_SESSION['__userSession']['accType'] == 'ADMIN_ACC' || $_SESSION['__userSession']['accType'] === "ADMIN_HONEY_ACC_0")){
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="../views/admin.php">Admin pannel</a>
                    </li>
                    ';
                }
                if(isset($_SESSION['__userSession']['accType']) && isset ($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] == 'ADMIN_HONEY_ACC_1'){
                    echo '
                    <li class="nav-item">
                        <a class="nav-link" href="../views/admin.php">Admin pannel</a>
                    </li>
                    ';
                }
                if(isset($_SESSION['__userSession']['idUser']) && isset ($_SESSION['__userSession']['username']) && isset ($_SESSION['__userSession']['accType'])){
                    echo'                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        '.$_SESSION['__userSession']['username']. '
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="../controllers/authentication_redirect.php?page=profile">Profile</a></li>
                        <li><a class="dropdown-item" href="../controllers/authentication_redirect.php?page=cart">Cart</a></li>';
                    if(!(isset($_SESSION['__userSession']['accType']) && $_SESSION['__userSession']['accType'] == 'ADMIN_ACC')) {
                        echo '
                        <li><a class="dropdown-item" href="../controllers/authentication_redirect.php?page=support">Support</a></li>';
                    }
                    echo '
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="../controllers/disconnect.php">Logout</a></li>
                    </ul>
                </li>';
                } else {
                    echo '<li class="nav-item"><a class="nav-link" href="../views/login.php">Login</a></li>';
                }
                ?>

            </ul>
        </div>
    </div>
</nav>

<!---->
<!-- Navbar -->
<!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">-->
<!--    <div class="container-fluid">-->
<!--        <a class="navbar-brand" href="home.php">Honey Store</a>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="collapse navbar-collapse" id="navbarNav">-->
<!--            <ul class="navbar-nav ms-auto">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="home.php">Home</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="products.php">Products</a>-->
<!--                </li>-->
<!--                --><?php
//                if(isset($_SESSION['__userSession']['idUser']) && isset ($_SESSION['__userSession']['username'])){
//                    echo '<li class="nav-item dropdown">
//    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">'.$_SESSION['__userSession']['username'].'</a>
//    <div class="dropdown-menu">
//      <a class="dropdown-item" href="#">My profile</a>
//      <a class="dropdown-item" href="#">Support</a>
//      <div class="dropdown-divider"></div>
//      <a class="dropdown-item" href="../controllers/disconnect.php">Logout</a>
//      </div>
//      </li>';
//                } else {
//                    echo '<li class="nav-item">
//                    <a class="nav-link" href="login.php">Login</a>
//                </li>';
//                }
//                ?>
<!---->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->