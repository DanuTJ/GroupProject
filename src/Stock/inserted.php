<?php
include_once '../connection.php';
include_once '../session.php';
if(isset($_POST['submit']))
{	 

	checkSession();
	if(isset($_SESSION['name'])){

	 $id = $_POST['id'];
	 $name = $_POST['name'];
	 $quantity = $_POST['quantity'];
	 $unit_price= $_POST['unit_price'];
	 $supplier = $_POST['supplier'];
	 $manufdate = $_POST['manufdate'];
	 $expdate = $_POST['expdate'];
	 $receivedate = $_POST['receivedate'];
<<<<<<< HEAD:Stock/inserted.php
	 $price= $_POST['unit_price'];
	 $supplier = $_POST['supplier'];
	 $adminid = $_SESSION['userID'];
	 
	 
	 $sql = "INSERT INTO stock (id,quantity,manufdate,expdate,receivedate,unit_price,supplier,adminid) 
	 VALUES ('$id','$quantity','$manufdate','$expdate','$receivedate','$unit_price','$supplier','$adminid')";
=======
	 $adminid = $_SESSION['userID'];
	 
	 
	 $sql = "INSERT INTO stock (id,name,quantity,unit_price,supplier,manufdate,expdate,receivedate,adminid) 
	 VALUES ('$id','$name','$quantity','$unit_price','$supplier','$manufdate','$expdate','$receivedate','$adminid')";
>>>>>>> d518cef17a2282c9c2b95d8c45173feee8c054a8:src/Stock/inserted.php
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