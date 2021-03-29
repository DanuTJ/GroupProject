<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
					if(isset($_SESSION['name'])){
	 $id = $_POST['id'];
	 $orderdate = $_POST['orderdate'];
	 $suppliername = $_POST['suppliername'];
	 $numofunits = $_POST['numofunits'];
	 $arrivingdate = $_POST['arrivingdate'];
	 $totalprice = $_POST['totalprice'];
	 $adminid = $_SESSION['userID']; 
	 $sql = "INSERT INTO sorders (id,orderdate,suppliername,numofunits,arrivingdate,totalprice,adminid)
	 VALUES ('$id','$orderdate','$suppliername','$numofunits','$arrivingdate','$totalprice','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:AddSupOrder.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>