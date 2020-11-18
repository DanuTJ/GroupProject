<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $id = $_POST['id'];
	 $quantity = $_POST['quantity'];
	 $manufdate = $_POST['manufdate'];
	 $expdate = $_POST['expdate'];
	 $receivedate = $_POST['receivedate'];
	 $price= $_POST['price'];
	 $supplier = $_POST['supplier'];
	 
	 
	 $sql = "INSERT INTO stock (id,quantity,manufdate,expdate,receivedate,price,supplier) 
	 VALUES ('$id','$quantity','$manufdate','$expdate','$receivedate','$price','$supplier')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>