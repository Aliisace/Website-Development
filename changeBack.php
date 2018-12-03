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
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        redirect("login.php");
    }
    if(!isset($_SESSION["Admin"]) || $_SESSION["Admin"] != true || $_SESSION["Admin"] != 1){
        //echo "normal user 2";
        redirect("welcome.php");
    }

    // Include config file
    require_once "config.php";
     
    // Define variables and initialize with empty values
    $username = $confirm_username = $id1 = $id = "";
    $username_err = $confirm_username_err = $id_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST["Confirm"])){
            if(empty(trim($_POST["username"]))){
                $username_err = "Please enter a username";
            } else{
                
                $sql = "SELECT id, username, AdminB FROM users WHERE username = ?";

                if ($stmt = mysqli_prepare($link, $sql)){
                
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    $param_username = trim($_POST["username"]);

                    if(mysqli_stmt_execute($stmt)){
                        mysqli_stmt_store_result($stmt);

                        if(mysqli_stmt_num_rows($stmt) == 0){
                            $username_err = "This username is invalid.";
                        } else{
                            $username = trim($_POST["username"]);
                            mysqli_stmt_bind_result($stmt, $id1, $username, $AdminB);
                            if(mysqli_stmt_fetch($stmt)){
                                $AdminB = $AdminB;
                            }
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
                }
                mysqli_stmt_close($stmt);
            }
        }
        
        if(!empty($_POST["Update"]))
        {
            if(empty(trim($_POST["id"]))){
                $id_err = "Please enter a id.";     
            } elseif(strlen(trim($_POST["id"])) < 0){
                $id_err = "Please enter a valid id";
            } else{
                $id = trim($_POST["id"]);
            }
            
            // Validate confirm username
            if(empty(trim($_POST["confirm_username"]))){
                $confirm_username_err = "Please confirm username.";     
            } else{
                $confirm_username = trim($_POST["confirm_username"]);
            }
            
            // Check input errors before inserting in database
            if(empty($id_err) && empty($confirm_username_err)){
                
                $sql = "UPDATE users SET AdminB = 0 WHERE id = ?";
                 
                if($stmt = mysqli_prepare($link, $sql)) 
                {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_id);
                    
                    // Set parameters
                    $param_id = $id;

                   //Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                    // Store result
                        mysqli_stmt_store_result($stmt);
                        
                        // Check if username exists, if yes then verify password
                        if(mysqli_stmt_num_rows($stmt) == 1) 
                        {                    
                            // Bind result variables
                            mysqli_stmt_bind_result($stmt, $id, $username, $AdminB);
                            if(mysqli_stmt_fetch($stmt)){
                                echo "Success! ".$username."is now an admin";
                            }

                        } else {
                            // Display an error message if username doesn't exist
                            $username_err = "The username or password you entered was not valid.";
                        }
                    } else {
                        echo "Something went wrong. Please try again later.";
                    }
                }
                 
                // Close statement
                mysqli_stmt_close($stmt);
            }
        }
        // Close connection
        mysqli_close($link);
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
        <div class="wrapper">
        <h2>Change Users</h2>
        <p>
            Please fill in the details of the account you want to remove admin status from.
        </p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                </div>
                <div class="form-group <?php?>">
                    <input type="submit" class="btn btn-primary" name="Confirm" value="Confirm">
                    <input type="reset" class="btn btn-default" value="Reset">
                </div>
                <?php echo " User: " . $username. ", id: " . $id1. " will be updated<br>"; ?>
            </form>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group <?php echo (!empty($id_err)) ? 'has-error' : '';  echo (!empty($confirm_username_err)) ? 'has-error' : ''; ?>">
                    <div class="form-group <?php?>">    
                        <label>ID</label>
                        <input type="text" name="id" class="form-control" value="<?php echo $id; ?>">
                        <span class="help-block"><?php echo $id_err; ?></span>
                        <label>Confirm Username</label>
                        <input type="text" name="confirm_username" class="form-control" value="<?php echo $confirm_username; ?>">
                        <span class="help-block"><?php echo $confirm_username_err; ?></span>
                    </div>
                    <div class="form-group <?php?>">
                        <input type="submit" class="btn btn-primary" name = "Update" value="Update">
                        <input type="reset" class="btn btn-default" value="Reset">
                    </div>
                </div>
            </form>
            <p>If you are looking to add admin status see: <a href="changeStatus.php" class="btn btn-warning">Change User Status</a></p>
        </div>
        <?php include 'foot.php'; ?>
    </body>
</html>