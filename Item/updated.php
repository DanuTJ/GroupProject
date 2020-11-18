<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE details set id='" . $_POST['id'] . "', itemname='" . $_POST['itemname'] . "', category='" . $_POST['category'] . "', manufacturer='" . $_POST['manufacturer'] . "', ides='" . $_POST['ides'] . "', price='" . $_POST['price'] ."' ,iquantity='" . $_POST['iquantity'] . "', total='" .$_POST['total'] ."' ,invoice='" . $_POST['invoice'] . "' ,adminid='" . $_POST['adminid'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM details WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Item Details</title>
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
		  <li><a href="AddItemDetails.php">Add Item</a></li>
		  <li><a href="ViewItem.php">View Item</a></li>
		  <li><a class="active" href="ManageItem.php">Manage Item</a></li>
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
		Item ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id"  value="<?php echo $row['id']; ?>"> 
		<br>
		Item Name: <br>
		<input type="text" name="itemname" class="txtField" value="<?php echo $row['itemname']; ?>">
		<br>
		Item Category:<br>
		<select id="category" name="category">
			<option value="<?php echo $row['category']; ?>">Medicine</option>
			<option value="<?php echo $row['category']; ?>">Personal hygiene</option>
			<option value="<?php echo $row['category']; ?>">Skincare</option>
			<option value="<?php echo $row['category']; ?>">Diet and Nutrition</option>
			<option value="<?php echo $row['category']; ?>">Food and Beverages</option>
		</select>
		<br>
		Manufacturer:<br>
		<input type="text" name="manufacturer" class="txtField" value="<?php echo $row['manufacturer']; ?>">
		<br>
		Item description:<br>
		<input type="text" name="ides" class="txtField" value="<?php echo $row['ides']; ?>">
		<br>
		Unit Price:<br>
		<input type="float" name="price" pattern="[0-9]*[.]?[0-9]+" class="txtField" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['price']; ?>">
		<br>
		Item quantity:<br>
		<input type="number" name="iquantity" min="1" class="txtField" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['iquantity']; ?>">
		<br>
		Total:<br>
		<input type="float" name="total" pattern="[0-9]*[.]?[0-9]+" class="txtField" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['total']; ?>">
		<br>
		Order Invoice no:<br>
		<input type="text" name="invoice" class="txtField" value="<?php echo $row['invoice']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>