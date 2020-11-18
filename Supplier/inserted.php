<?php
include_once '../connection.php';
include_once '../session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
					if(isset($_SESSION['name'])){

	 $suppliername = $_POST['suppliername'];
	 $companyname = $_POST['companyname'];
	 $companyaddress = $_POST['companyaddress'];
	 $phoneno = $_POST['phoneno'];
	 $email = $_POST['email'];
	 $adminid = $_SESSION['userID']; 

	 $sql = "INSERT INTO suppliers (suppliername,companyname,companyaddress,phoneno,email,adminid)
	 VALUES ('$suppliername','$companyname','$companyaddress','$phoneno','$email','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		header('Location:AddSupDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>