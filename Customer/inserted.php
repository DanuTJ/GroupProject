<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $customername = $_POST['customername'];
	 $type = $_POST['type'];
	 $phoneno = $_POST['phoneno'];
	 $email = $_POST['email'];
	
	 $sql = "INSERT INTO details (customername,type,phoneno,email)
	 VALUES ('$customername','$type','$phoneno','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>