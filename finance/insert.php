<?php
include_once '../connection.php';
include_once '../session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
					if(isset($_SESSION['name'])){
	 $id = $_POST['id'];
	 $type = $_POST['type'];
	 $utilitydes = $_POST['utilitydes'];
	 $date = $_POST['date'];
	 $amount = $_POST['amount'];
	 $adminid = $_SESSION['userID']; 

	 
	 $sql = "INSERT INTO finance (id,type,utilitydes,date,amount,adminid)
	 VALUES ('$id','$type','$utilitydes','$date','$amount','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:AddUtility.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>