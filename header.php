<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Pizza Time</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo/fav.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/animate-3.7.0.css">
    <link rel="stylesheet" href="css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="css/owl-carousel.min.css">
    <link rel="stylesheet" href="css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/regestration.css">
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="js/vendor/owl-carousel.min.js"></script>
    <script src="js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="js/vendor/jquery.nice-select.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vendor/jquery.validate.min.js"></script>
    <script src="js/vendor/additional-methods.min.js"></script>
    <script src="js/vendor/jquery.growl.js" type="text/javascript"></script>
    <link href="css/jquery.growl.css" rel="stylesheet" type="text/css" />
</head>
<body>


<!-- Header Area Starts -->
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo-area">
                    <a href="index.html"><img src="images/logo/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="custom-navbar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="main-menu">
                    <ul>
                        <li class="active"><a href="index.php">home</a></li>
                        <?php
                        if (isset($_SESSION) && $_SESSION['active'] == 'true') {
                            echo '<li><a href="dashboard.php">Dashboard</a></li>';
                            echo '<li><a href="logout.php">Logout</a></li>';
                        } else {
                            echo '<li><a href="regestration.php">Signup</a></li>
                                   <li><a href="login.php">Login</a></li>';
                        }
                        ?>
                        <li><a href="contact-us.php">Contact Us</a></li>
                        <li><a href="">Cart</a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->