<?php
include_once '../connection.php';
include_once '../session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['ID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE cusorder  set id='" . $_POST['id'] . "', date='" . $_POST['date'] . "', customername='" . $_POST['customername'] . "', orderdes='" . $_POST['orderdes'] . "', phoneno='" . $_POST['phoneno'] . "', price='" . $_POST['price'] . "' , customerid='" . $_POST['customerid'] . "' , adminid='" . $_POST['ID']. "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
}
$result = mysqli_query($conn,"SELECT * FROM cusorder WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Customer Order Details</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/View.css">
</head>
<body>
<?php include('../header.php') ?>
  	<br>
  	<div class="row form1">
  		<br>
  		<form name="frmUser" method="post" action="">
		<div><?php if(isset($message)) { echo $message; } ?>
		</div>
		<div style="padding-bottom:5px;">
		</div>
		ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id"  value="<?php echo $row['id']; ?>">
		<br>
		

		Customer Name: <br>
		<input type="text" name="customername" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['customername']; ?>">
		<br>
	
		Telephone Number:<br>
		<input type="text" name="phoneno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="txtField" value="<?php echo $row['phoneno']; ?>">
		<br>
		Order Description:<br>
		<input type="text" name="orderdes" class="txtField" value="<?php echo $row['orderdes']; ?>">
		<br>
		Price:<br>
		<input type="text" name="price" class="txtField" pattern="[0-9]+" value="<?php echo $row['price']; ?>">
		<br>
		Date: <br>
		<input type="date" name="date" class="txtField" max="<?php echo date("Y-m-d"); ?>" value="<?php echo $row['date']; ?>">
	
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>