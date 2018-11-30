<?php
    // Initialize the session
    session_start();
    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

 
    function redirect($url)
    {
        header("location: ".$url);
        exit();
    }

    // Check if the user is already logged in, if yes then redirect him to welcome page
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true){
        if(isset($_SESSION["Admin"]) || $_SESSION["Admin"] == true || $_SESSION["Admin"] == 1){
            redirect("aMember.php");
        }
        else{
            redirect("welcome.php");
        }
    }

    // Include config file
    require_once "config.php";
     
    // Define variables and initialize with empty values
    $username = $password = "";
    $username_err = $password_err = "";
     
    // Processing form data when form is submitted
    if($_SERVER["REQUEST_METHOD"] == "POST"){
     
        // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Please enter username.";
        } else{
            $username = trim($_POST["username"]);
        }
        
        // Check if password is empty
        if(empty(trim($_POST["password"]))){
            $password_err = "Please enter your password.";
        } else{
            $password = trim($_POST["password"]);
        }
        
        // Validate credentials
        if(empty($username_err) && empty($password_err)){
            // Prepare a select statement
            $sql = "SELECT id, username, password, AdminB FROM users WHERE username = ?";
            
            if($stmt = mysqli_prepare($link, $sql)){
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                
                // Set parameters
                $param_username = $username;
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Store result
                    mysqli_stmt_store_result($stmt);
                    
                    // Check if username exists, if yes then verify password
                    if(mysqli_stmt_num_rows($stmt) == 1) {                    
                        // Bind result variables
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $AdminB);
                        if(mysqli_stmt_fetch($stmt)) {
                            if(password_verify($password, $hashed_password)){
                                // Password is correct, so start a new session
                                session_start();
                                
                                // Store data in session variables
                                $_SESSION["loggedin"] = true;
                                $_SESSION["id"] = $id;
                                $_SESSION["username"] = $username;
                                $_SESSION["Admin"] = $AdminB;

                                if(isset($_SESSION["Admin"]) || $_SESSION["Admin"] == true || $_SESSION["Admin"] == 1){
                                    redirect("aMember.php");
                                }
                                else{
                                    redirect("https://mayar.abertay.ac.uk/~1700315/coursework/welcome.php");
                                }
                            } else{
                                // Display an error message if password is not valid
                                $password_err = "The username or password you entered was not valid.";
                            }
                        }
                    } else{
                        // Display an error message if username doesn't exist
                        $username_err = "The username or password you entered was not valid.";
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }
            }
            
            // Close statement
            mysqli_stmt_close($stmt);
        }
        
        // Close connection
        mysqli_close($link);
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
		<div class="wrapper">
			<h2 >Login</h2>
			<p >Please fill in your credentials to login.</p>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : '';  echo (!empty($password_err)) ? 'has-error' : ''; ?>">
					<label >Username</label>
					<input  type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
					<label >Password</label>
					<input type="password" name="password" placeholder="password" class="form-control">
					<span class="help-block"><?php echo $password_err; echo $username_err; ?></span>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Login">
				</div>
				<p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
			</form>
		</div> 
        <?php include 'foot.php'; ?>
    </body>
</html>