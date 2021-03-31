<?php
require_once 'logger.php';


//start the session
session_start();

// if (isset($_SESSION['name'])){

		$message = base64_encode(urlencode(("Logged Out Successfully")));		
		session_destroy();
		unset($_SESSION['name']);
        unset($_SESSION['usertype']);
        unset($_SESSION['userID']);
		logger("User logged out!! | user id - ".$_SESSION['userID']. " | usertype - ".$_SESSION['usertype']. " | user ".$_SESSION['name']);
		header('Location:login.php?msg='.$message );
		
		// exit();
	// }
?>