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
        <!-- i hate js-->
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
        <link rel="stylesheet" type="text/css" href="./slick/slick.css">
        <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="testSlide.css">
        <script src="ajax.js" type="text/javascript"></script>
        <script type="text/javascript" src="idk.js"></script>
        <script src="jquery.hello-world.js"></script>        
    </head>
    <body class="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <?php include 'nav.php'; ?>
        <div class="container mt-3">
            <h2>PHOTOS</h2>
        </div>
        <section class="variable slider">
            <div>
                <img src="photos/1.jpg" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/2.jpg" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/3.jpg" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/4.jpg" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/5.jpg" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/6.jpg" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/7.png" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/8.png" height="auto" width="1500px">
            </div>
            <div>
                <img src="photos/9.png" height="auto" width="1500px">
            </div>
        </section>
        <div class="container mt-3">
            <br>
            <button id="more" class="btn btn-dark">Load More Content</button>
            <p><small>Warning: badly formated text will appear</small><br><small>Warning: I mean badly formated</small></p>
            <p id="moreText"></p>
        </div>
        <!-- Footer -->
        <?php include 'foot.php'; ?>
        <script src="jquery.hello-world.js"></script>
        <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="test.js" type="text/javascript"></script>
    </body>
</html>