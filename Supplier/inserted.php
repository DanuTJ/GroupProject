<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $suppliername = $_POST['suppliername'];
	 $companyname = $_POST['companyname'];
	 $companyaddress = $_POST['companyaddress'];
	 $phoneno = $_POST['phoneno'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO suppliers (suppliername,companyname,companyaddress,phoneno,email)
	 VALUES ('$suppliername','$companyname','$companyaddress','$phoneno','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>