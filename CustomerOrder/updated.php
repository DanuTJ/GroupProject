<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE cusorder  set id='" . $_POST['id'] . "', date='" . $_POST['date'] . "', customername='" . $_POST['customername'] . "', orderdes='" . $_POST['orderdes'] . "', phoneno='" . $_POST['phoneno'] . "', price='" . $_POST['price'] . "' , customerid='" . $_POST['customerid'] . "' , adminid='" . $_POST['adminid'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
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
	<div class="sidenav">
	<div class="row">
  		<center><p style="font-size: 35px;"><b>IHealth</b></p>
		<hr></center>
  	</div>
  	<div class="row">
  		<center><p style="font-size: 20px;"><b>Dashboard</b></p>
		<hr></center>
  	</div>
	<div class="row">
  		<center><a href="#">Customer</a><hr>
		<a href="#">Stock</a><hr>
		<a href="#">Item</a><hr>
		<a href="#">Supplier</a><hr>
		<a href="#">Supplier Order</a><hr>
		<a href="#">Customer Order</a><hr>
		<a href="#">Employee</a><hr>
		<a href="#">Finance</a></center>
  	</div>
	
	</div>

	<div class="content">
  	<div class="row end">
  		<div class="row">
	  		<br>
	  		<a href=""><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  		<a href=""><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  		<br>Edit Profile &nbsp;&nbsp;&nbsp;&nbsp; Sign Out
  		</div>
  		<br>
  		<hr>
  	</div>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddCusOrder.php">Add Customer Order</a></li>
		  <li><a href="ViewCustomerOrder.php">View Customer Order</a></li>
		  <li><a class="active" href="ManageCustomerOrder.php">Manage Customer Order</a></li>
		  <li><a href="PrintOrderDetails.php">Print Order Details</a></li>
		</ul>
		</div>
  	</div>
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
		<input type="text" name="customername" class="txtField" value="<?php echo $row['customername']; ?>">
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