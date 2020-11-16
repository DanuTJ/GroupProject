<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $employeeid = $_POST['Employee_ID'];
	 $name = $_POST['name'];
	 $nic = $_POST['nic'];
	 $address = $_POST['address'];
	 $gender = $_POST['status'];
	 $telephoneno= $_POST['Telephone_No'];
	 $email = $_POST['Email'];
	 $adminid = $_POST['Admin_ID'];
	 
	 $sql = "INSERT INTO details (Employee_ID,Employee_Name,NIC,Address,Gender,Telephone_No,Email,Admin_ID) VALUES ('$employeeid','$name','$nic','$address','$gender','$telephoneno','$email','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>