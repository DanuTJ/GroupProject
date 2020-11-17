<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $scode = $_POST['Stock_Code'];
	 $quantity = $_POST['Quantity'];
	 $mdate = $_POST['Manufacturer_Date'];
	 $edate = $_POST['Expiry_Date'];
	 $rdate = $_POST['Received_Date'];
	 $sprice= $_POST['Stock_Price'];
	 $iprice = $_POST['Item_Price'];
	 $iid = $_POST['Item_ID'];
	 $supplier = $_POST['Supplier'];
	 $sorderid = $_POST['Supplier_Order_ID'];
	 $adminid = $_POST['Admin_ID'];
	 
	 $sql = "INSERT INTO stock (Stock_Code,Quantity,Manufacturer_Date,Expiry_Date,Received_Date,Stock_Price,Item_Price,Item_ID,Supplier,Supplier_Order_ID,Admin_ID) VALUES ('$scode','$quantity','$mdate','$edate','$rdate','$sprice','$iprice','$iid','$supplier',' $sorderid',' $adminid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>