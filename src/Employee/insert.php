<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
	if(isset($_SESSION['name'])){

     $Date = $_POST['Date'];
	 $Emp_ID = $_POST['Emp_ID'];
     $Name = $_POST ['Name'];
	 $Status = $_POST['Status'];
	 $Work_type = $_POST['Work_type'];
	 
		$sql= "INSERT INTO `attendance`(`Date`,`Emp_ID`, `Name`,  `Status`, `Work_type`) 
		VALUES ('$Date','$Emp_ID','$Name','$Status','$Work_type')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:MarkAttendance.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>