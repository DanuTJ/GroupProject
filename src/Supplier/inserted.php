<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
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
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:AddSupDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>