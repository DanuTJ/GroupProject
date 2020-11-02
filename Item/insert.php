<?php
include_once 'connection.php';
if(isset($_POST['submit']))
{	 
	 $itemid = $_POST['itemid'];
	 $itemname = $_POST['itemname'];
	 $category = $_POST['category'];
	 $manufacturer = $_POST['manufacturer'];
	 $ides = $_POST['ides'];
	 $iquantity = $_POST['iquantity'];
	 $sql = "INSERT INTO details (itemid,itemname,category,manufacturer,ides,iquantity)
	 VALUES ('$itemid','$itemname','$category','$manufacturer','$ides','$iquantity')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>