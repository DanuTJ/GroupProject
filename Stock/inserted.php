<?php
include_once '../connection.php';
include_once '../session.php';
if(isset($_POST['submit']))
{	 

	checkSession();
	if(isset($_SESSION['name'])){

	 $id = $_POST['id'];
	 $quantity = $_POST['quantity'];
	 $manufdate = $_POST['manufdate'];
	 $expdate = $_POST['expdate'];
	 $receivedate = $_POST['receivedate'];
	 $price= $_POST['price'];
	 $supplier = $_POST['supplier'];
	 $adminid = $_SESSION['userID'];
	 
	 
	 $sql = "INSERT INTO stock (id,quantity,manufdate,expdate,receivedate,price,supplier,adminid) 
	 VALUES ('$id','$quantity','$manufdate','$expdate','$receivedate','$price','$supplier','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:AddStockDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>