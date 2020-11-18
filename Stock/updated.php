<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE stock set id='" . $_POST['id'] . "', scode='" . $_POST['Stock_Code'] . "', quantity='" . $_POST['Quantity'] . "', mdate='" . $_POST['Manufacturer_Date'] . "',edate='" . $_POST['Expiry_Date'] . "', rdate='" . $_POST['Received_Date'] .  "', sprice='" . $_POST['Stock_Price'] . "', iprice='" . $_POST['Item_Price'] . "', iid='" . $_POST['Item_ID'] . "', supplier='" . $_POST['Supplier'] . "',sorderid='" . $_POST['Supplier_Order_ID'] . "', Adminid='" . $_POST['Adminid'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM stock WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Stock Details</title>
<link rel="stylesheet" href="Css/Viewcss.css">
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
	  <ul>
		  <li><a class="active" href="AddStockDetails.php">Add Stock</a></li>
		   <li><a href="ManageStock.php">View Stock</a></li>
		   <li><a href="ViewStock.php">Manage Stock</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form name="frmUser" method="post" action="">
		<div><?php if(isset($message)) { echo $message; } ?>
		</div>
		<div style="padding-bottom:5px;">
		</div>
		Stock Code: <br>
		<input type="hidden" name="scode" class="txtField" value="<?php echo $row['scode']; ?>">
		<input type="text" name="scode"  value="<?php echo $row['scode']; ?>">
		<br>
		Quantity: <br>
		<input type="text" name="quantity" class="txtField" value="<?php echo $row['quantity']; ?>">
		<br>
		Manufacturer Date: <br>
		<input type="text" name="mdate" class="txtField" value="<?php echo $row['mdate']; ?>">
		<br>
		Expiry Date: <br>
		<input type="text" name="edate" class="txtField" value="<?php echo $row['edate']; ?>">
		<br>
		Received Date:<br>
		<input type="text" name="rdate" class="txtField" value="<?php echo $row['rdate']; ?>">
		<br>
		Stock Price:<br>
		<input type="text" name="sprice" class="txtField" value="<?php echo $row['sprice']; ?>">
		<br>
		Item Price: <br>
		<input type="text" name="iprice" class="txtField" value="<?php echo $row['iprice']; ?>">
		<br>
		Item ID: <br>
		<input type="text" name="iid" class="txtField" value="<?php echo $row['iid']; ?>">
		<br>
		Supplier: <br>
		<input type="text" name="supplier" class="txtField" value="<?php echo $row['supplier']; ?>">
		<br>
		Supplier Order ID: <br>
		<input type="text" name="sorderid" class="txtField" value="<?php echo $row['sorderid']; ?>">
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>