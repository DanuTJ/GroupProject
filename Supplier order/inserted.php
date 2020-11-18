<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $orderid = $_POST['orderid'];
	 $orderdate = $_POST['orderdate'];
	 $suppliername = $_POST['suppliername'];
	 $numofunits = $_POST['numofunits'];
	 $arrivingdate = $_POST['arrivingdate'];
	 $totalprice = $_POST['totalprice'];
	 $sql = "INSERT INTO sorders (orderid,orderdate,suppliername,numofunits,arrivingdate,totalprice)
	 VALUES ('$orderid','$orderdate','$suppliername','$numofunits','$arrivingdate','$totalprice')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>