<?php
    // Initialize the session
    session_start();
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
     
    function redirect($url) {
        header("location: ".$url);
        exit();
    }

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        redirect("login.php");
    }
    if(!isset($_SESSION["Admin"]) || $_SESSION["Admin"] != true || $_SESSION["Admin"] != 1) {
        redirect("https://mayar.abertay.ac.uk/~1700315/coursework/welcome.php");
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
        <!-- i hate js--> 
    </head>
    <body class="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
        <?php include 'nav.php'; ?>
        <div class="text-center"><br>
            <?php include "button.php" ?>                  
            <div class="page-header">
                <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>: <br><?php include "logo.php" ?><br> Welcomes you to our site.</h1>
            </div>
            <p>
                Account Options:<br>
                <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
                <a href="deleteAc.php" class="btn btn-danger">Delete Your Account</a>
            </p>
            <p>
                Admin Privilages:<br>
                <a href="delete.php" class="btn btn-danger">Delete other accounts</a>
                <a href="changeStatus.php" class="btn btn-warning">Change User Status</a>
            </p>
            <p>
                Exclusive member content:<br>
                <a href="photos.php" class="btn btn-info">Photos!!!</a>
            </p>
        </div>
        <?php include 'foot.php'; ?>
    </body>
</html>