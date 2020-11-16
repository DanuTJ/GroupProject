<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE sorders set orderid='" . $_POST['orderid'] . "', orderdate='" . $_POST['orderdate'] . "',supplierid='" . $_POST['supplierid'] . "',suppliername='" . $_POST['suppliername'] . "',numofunits='" . $_POST['numofunits'] . "', arrivingdate='" . $_POST['arrivingdate'] . "', totalprice='" . $_POST['totalprice'] . "', adminid='" . $_POST['adminid'] . "' WHERE orderid='" . $_POST['orderid'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM sorders WHERE orderid='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Supplier Order Details</title>
<link rel="stylesheet" href="css/View.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
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
		  <li><a href="AddSupOrder.php">Add Orders</a></li>
		  <li><a href="ViewSupOrder.php">View Orders</a></li>
		  <li><a class="active" href="ManageSupOrder.php">Manage Orders</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
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

		Order ID: <br>
		<input type="hidden" name="orderid" class="txtField" value="<?php echo $row['orderid']; ?>">
		<input type="text" name="orderid"  value="<?php echo $row['orderid']; ?>">
		<br>
		Order Date: <br>
		<input type="date" name="orderdate" class="txtField" value="<?php echo $row['orderdate']; ?>">

		<br>

		Supplier ID:<br>
		<input type="text" name="supplierid" class="txtField" value="<?php echo $row['supplierid']; ?>">
		<br>
		Supplier Name: <br>
		<input type="text" name="suppliername" class="txtField" value="<?php echo $row['suppliername']; ?>">
		<br>
		No. of Units: <br>
		<input type="text" name="numofunits" class="txtField" value="<?php echo $row['numofunits']; ?>">
		<br>
		Arriving Date:<br>
		<input type="date" name="arrivingdate" class="txtField" value="<?php echo $row['arrivingdate']; ?>">
		<br>
		Total Price:<br>
		<input type="text" name="totalprice" class="txtField" value="<?php echo $row['totalprice']; ?>">
		<br>
		Admin ID:<br>
		<input type="text" name="adminid" class="txtField" value="<?php echo $row['adminid']; ?>">
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>