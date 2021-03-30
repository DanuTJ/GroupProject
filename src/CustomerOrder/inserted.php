<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
					if(isset($_SESSION['name'])){
                        	
	 
	 $customername = $_POST['customername'];
	 $phoneno = $_POST['phoneno'];
	 $orderdes = $_POST['orderdes'];
	 $quantity = $_POST['quantity'];
	 $price = $_POST['price'];
	 $date = $_POST['date'];
	 $adminid = $_SESSION['userID'];
	
	 $sql = "INSERT INTO cusorder (customername,phoneno,orderdes,quantity,price,date,adminid)
	 VALUES ('$customername','$phoneno','$orderdes','$quantity','$price','$date','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added Successful"));
		header('Location:AddCusOrder.php?msg=' . $message);
		
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	}
}
?>