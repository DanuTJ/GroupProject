<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(isset($_POST['submit']))
{	 
	checkSession();
					if(isset($_SESSION['name'])){
     $id = $_POST['id'];
	 $itemname = $_POST['itemname'];
	 $category = $_POST['category'];
	 $manufacturer = $_POST['manufacturer'];
	 $ides = $_POST['ides'];
	 $price = $_POST['price'];
     $iquantity = $_POST['iquantity'];
	 $total = $_POST['total'];
	 $invoice = $_POST['invoice'];
	 $adminid = $_SESSION['userID']; 
	

	 
	 $sql = "INSERT INTO items (id,itemname,category,manufacturer,ides,price,iquantity,total,invoice,adminid)
	 VALUES ('$id','$itemname','$category','$manufacturer','$ides','$price','$iquantity','$total','$invoice','$adminid')";
	 if (mysqli_query($conn, $sql)) {
		$message = base64_encode(urlencode("Record Added  Successfully"));
		header('Location:AddItemDetails.php?msg=' . $message);
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
}
?>