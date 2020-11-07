<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $itemid = $_POST['itemid'];
	 $itemname = $_POST['itemname'];
	 $category = $_POST['category'];
	 $manufacturer = $_POST['manufacturer'];
	 $ides = $_POST['ides'];
	 $unit = $_POST['unit'];
	 $price = $_POST['price'];
     $iquantity = $_POST['iquantity'];
	 $total = $_POST['total'];
	 $invoice = $_POST['invoice'];
	 $adminid = $_POST['adminid'];

	 
	 $sql = "INSERT INTO details (itemid,itemname,category,manufacturer,ides,unit,price,iquantity,total,invoice,adminid)
	 VALUES ('$itemid','$itemname','$category','$manufacturer','$ides','$unit','$price','$iquantity','$total','$invoice','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>