<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';

if(isset($_POST['submit']))
{	 
	
					checkSession();
					if(isset($_SESSION['name'])){
                        	
						
							
							
	 $customername = $_POST['customername'];
	 $type = $_POST['type'];
	 $phoneno = $_POST['phoneno'];
	 $email = $_POST['email'];
	 $adminid = $_SESSION['userID'];
	
	 $sql = "INSERT INTO details (customername,type,phoneno,email,adminid)
	 VALUES ('$customername','$type','$phoneno','$email','$adminid')";
	 if (mysqli_query($conn, $sql) ) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		logger("Customer added successfully!| Customer Name - ".$_POST['customername']. " | Type - ".$_POST['type']. " | Phone - ".$_POST['phoneno']. " | Email - ".$POST['email']. " | admin ID - ".$_POST['userID']); 
		header('Location:AddCusDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}
}
?>