<?php
	// Initialize the session
	session_start();
	
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	
	
	// Unset all of the session variables
	$_SESSION = array();
	session_destroy();

	// Redirect to homepage
	header("location: index.php");
	exit;
?>