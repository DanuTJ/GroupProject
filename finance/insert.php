<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $id = $_POST['id'];
	 $type = $_POST['type'];
	 $utilitydes = $_POST['utilitydes'];
	 $date = $_POST['date'];
	 $amount = $_POST['amount'];
	 $adminid = $_POST['adminid'];

	 
	 $sql = "INSERT INTO finance (id,type,utilitydes,date,amount,adminid)
	 VALUES ('$id','$type','$utilitydes','$date','$amount','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>