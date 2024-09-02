<?php 
    require 'config/constants.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website</title>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <!--Google font montserrat-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
</head>

<body>

<section class="form__section">
    <div class="container form__section-container">
        <h2 style="color: black;">Sign Up</h2>
        <div class="aler__message error">
            <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data">
            <input type="text" name="firstname" placeholder="First Name">
            <input type="text" name="lastname" placeholder="Last Name">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="createpassword" placeholder="Create Password">
            <input type="password" name="confirmpassword" placeholder="Confirm Password">
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input style="background-color: white;" name="avatar" type="file" id="avatar">
            </div>
            <button class="btn" name="submit" type="submit">Sign Up</button>
            <small>Already have an account? <a href="signin.php">Sign in</a></small>
        </form>
    </div>
</section>


</body>
</html>