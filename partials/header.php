<?php
 require __DIR__ . '/../admin/config/database.php';

 // fetch current user from database
 if(isset($_SESSION['user-id'])){
    $id = filter_var($_SESSION['user-id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT avatar FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $avatar = mysqli_fetch_assoc($result);
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MYSQL App</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--Google font montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <div class="container nav__container">
            <a href="<?= ROOT_URL ?>" class="nav__logo">Egator</a>
            <ul class="nav__items">
                <li><a href="<?= ROOT_URL ?>blog.php">Blog</a></li>
                <li><a href="<?= ROOT_URL ?>about.php">About</a></li>
                <li><a href="<?= ROOT_URL ?>services.php">Services</a></li>
                <li><a href="<?= ROOT_URL ?>contact.php">Contact</a></li>
                <?php if (isset($_SESSION['user-id'])) : ?>
                    <li class="nav__profile">
                        <div class="avatar">
                            <img src="<?= ROOT_URL . 'images/' . $avatar['avatar'] ?>" >
                        </div>
                        <ul>
                            <li><a href="<?= ROOT_URL ?>admin/index.php">Dashboard</a></li>
                            <li><a href="<?= ROOT_URL ?>logout.php">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                <li><a href="signin.php">Signin</a></li>
                <?php endif ?>
            </ul>

            <button id="open__nav-btn"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="menu" width="24"
                    height="24" style="fill: currentColor;">
                    <g>
                        <g>
                            <rect width="24" height="24" opacity="0" transform="rotate(180 12 12)"></rect>
                            <rect width="18" height="2" x="3" y="11" rx=".95" ry=".95"></rect>
                            <rect width="18" height="2" x="3" y="16" rx=".95" ry=".95"></rect>
                            <rect width="18" height="2" x="3" y="6" rx=".95" ry=".95"></rect>
                        </g>
                    </g>
                </svg></button>
            <button id="close__nav-btn"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="close">
                    <path
                        d="M38 12.83 35.17 10 24 21.17 12.83 10 10 12.83 21.17 24 10 35.17 12.83 38 24 26.83 35.17 38 38 35.17 26.83 24z">
                    </path>
                    <path fill="none" d="M0 0h48v48H0z"></path>
                </svg></button>
        </div>
    </nav>
    <!--=====================================================END OF NAV=========================================-->