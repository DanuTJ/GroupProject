<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
	if(isset($_SESSION['name'])){

	//  $employeeid = $_POST['Employee_ID'];
	 $name = $_POST['name'];
	 $nic = $_POST['nic'];
	 $address = $_POST['address'];
	 $gender = $_POST['status'];
	 $telephoneno= $_POST['Telephone_No'];
	 $email = $_POST['Email'];
	 $adminid = $_SESSION['userID'];

	
	 
	
	 
// 	 $sql = "INSERT INTO emp ('Employee_ID','Employee_Name','NIC','Address','Gender','Telephone_No','Email','adminid') VALUES ('$employeeid','$name','$nic','$address','$gender','$telephoneno','$email','$adminid')";
		$sql= "INSERT INTO `emp`(`Employee_Name`, `NIC`, `Address`, `Gender`, `Telephone_No`, `Email`, `adminid`) 
		VALUES ('$name','$nic','$address','$gender','$telephoneno','$email','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:AddEmpDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>