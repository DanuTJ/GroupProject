<?php
include_once '../connection.php';
include_once '../session.php';
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
	 if (mysqli_query($conn, $sql)) {
		header('Location:AddCusDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}
}
?>