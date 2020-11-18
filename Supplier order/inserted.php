<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $id = $_POST['id'];
	 $orderdate = $_POST['orderdate'];
	 $suppliername = $_POST['suppliername'];
	 $numofunits = $_POST['numofunits'];
	 $arrivingdate = $_POST['arrivingdate'];
	 $totalprice = $_POST['totalprice'];
	 $sql = "INSERT INTO sorders (id,orderdate,suppliername,numofunits,arrivingdate,totalprice)
	 VALUES ('$id','$orderdate','$suppliername','$numofunits','$arrivingdate','$totalprice')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>