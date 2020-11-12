<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $orderid = $_POST['orderid'];
	 $orderdate = $_POST['orderdate'];
	 $supplierid = $_POST['supplierid'];
	 $suppliername = $_POST['suppliername'];
	 $numofunits = $_POST['numofunits'];
	 $arrivingdate = $_POST['arrivingdate'];
	 $totalprice = $_POST['totalprice'];
	 $adminid = $_POST['adminid'];
	 $sql = "INSERT INTO sorders (orderid,orderdate,supplierid,suppliername,numofunits,arrivingdate,totalprice,adminid)
	 VALUES ('$orderid','$orderdate','$supplierid','$suppliername','$numofunits','$arrivingdate','$totalprice','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>