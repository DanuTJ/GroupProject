<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
     $id = $_POST['id'];
	 $itemname = $_POST['itemname'];
	 $category = $_POST['category'];
	 $manufacturer = $_POST['manufacturer'];
	 $ides = $_POST['ides'];
	 $price = $_POST['price'];
     $iquantity = $_POST['iquantity'];
	 $total = $_POST['total'];
	 $invoice = $_POST['invoice'];
	

	 
	 $sql = "INSERT INTO items (id,itemname,category,manufacturer,ides,price,iquantity,total,invoice)
	 VALUES ('$id','$itemname','$category','$manufacturer','$ides','$price','$iquantity','$total','$invoice')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>