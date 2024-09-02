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
    <!-- <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Egator</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li>
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
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
    </nav> --> 
    <!--=====================================================END OF NAV=========================================-->

<section class="form__section">
    <div class="container form__section-container">
        <h2 style="color: black;">Sign In</h2>
        <div class="aler__message success">
            <p>This is a success message</p>
        </div>
        <form action="">
            <input type="text" placeholder="Username or Email">
            <input type="password" placeholder="Password">
            <button class="btn" type="submit">Sign In</button>
            <small>Don't have an account? <a href="signup.php">Sign Up</a></small>
        </form>
    </div>
</section>


</body>
</html>