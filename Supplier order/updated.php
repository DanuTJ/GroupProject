<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE sorders set id='" . $_POST['id'] . "', orderdate='" . $_POST['orderdate'] . "',suppliername='" . $_POST['suppliername'] . "', numofunits='" . $_POST['numofunits'] . "', arrivingdate='" . $_POST['arrivingdate'] . "', totalprice='" . $_POST['totalprice'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM sorders WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Supplier Order Details</title>
<link rel="stylesheet" href="css/View.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id"  value="<?php echo $row['id']; ?>">
		<br>
		Order Date: <br>
		<input type="date" name="orderdate" max="<?php echo date("Y-m-d"); ?>" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
 			 margin: 8px 0;" class="txtField" value="<?php echo $row['orderdate']; ?>">

		<br>
		Supplier Name: <br>
		<input type="text" name="suppliername" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['suppliername']; ?>">
		<br>
		No. of Units: <br>
		<input type="number" name="numofunits" min="1" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" class="txtField" value="<?php echo $row['numofunits']; ?>">
		<br>
		Arriving Date:<br>
		<input type="date" name="arrivingdate" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['arrivingdate']; ?>">
		<br>
		Total Price:<br>
		<input type="text" name="totalprice"  pattern="[0-9]*[.]?[0-9]+" class="txtField" value="<?php echo $row['totalprice']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>