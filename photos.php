<?php
    // Initialize the session
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Theme Made By www.w3schools.com - No Copyright -->
        <title>Alestorm</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="index.png" />
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="stylish.css"> 
        <link rel="stylesheet" type="text/css" href="style0.css"> 
    </head>
    <body class="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <?php include 'nav.php'; ?>
        <div class="container mt-3">
            <h2>PHOTOS</h2>
            <div id="myCarousel" class="carousel slide">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li class="item1 active"></li>
                    <li class="item2"></li>
                    <li class="item3"></li>
                    <li class="item4"></li>
                    <li class="item5"></li>
                    <li class="item6"></li>
                    <li class="item7"></li>
                    <li class="item8"></li>
                    <li class="item9"></li>
                </ul>
                
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="photos/1.jpg" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/2.jpg" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/3.jpg" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/4.jpg" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/5.jpg" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/6.jpg" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/7.png" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/8.png" width="auto" height="auto">
                    </div>
                    <div class="carousel-item">
                        <img src="photos/9.png" width="auto" height="auto">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#myCarousel">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        <!-- Footer -->
        <?php include 'foot.php'; ?>
        <script type="text/javascript" src="carousel.js"></script>
    </body>
</html>