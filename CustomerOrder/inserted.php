<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $date = $_POST['date'];
	 $customername = $_POST['customername'];
	 $phoneno = $_POST['phoneno'];
	 $orderdes = $_POST['orderdes'];
	 $price = $_POST['price'];
	 $customerid = $_POST['customerid'];
	 $adminid = $_POST['adminid'];
	 $sql = "INSERT INTO cusorder (date,customername,phoneno,orderdes,price,customerid,adminid)
	 VALUES ('$date','$customername','$phoneno','$orderdes','$price','$customerid','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>