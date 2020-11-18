<?php
include_once '../connection.php';
include_once '../session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['ID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE stock set id='" . $_POST['id'] . "', quantity='" . $_POST['quantity'] . "', manufdate='" . $_POST['manufdate'] . "',expdate='" . $_POST['expdate'] . "', receivedate='" . $_POST['receivedate'] .  "', price='" . $_POST['price'] . "', supplier='" . $_POST['supplier'] . "' , adminid='" . $_POST['ID'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
}

$result = mysqli_query($conn,"SELECT * FROM stock WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Stock Details</title>
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

		Stock ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id" disabled value="<?php echo $row['id']; ?>">
		<br>

		Quantity: <br>
		<input type="number" name="quantity" min="1" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  			margin: 8px 0;" value="<?php echo $row['quantity']; ?>">
		<br>

		Price:<br>
		<input type="float" name="price" pattern="[0-9]*[.]?[0-9]+" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  			margin: 8px 0;" value="<?php echo $row['price']; ?>">
		<br>

		Supplier: <br>
		<input type="text" name="supplier" class="txtField" value="<?php echo $row['supplier']; ?>">
		<br>

		Manufacture Date: <br>
		<input type="date" name="manufdate" max="<?php echo date("Y-m-d"); ?>" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
 			 margin: 8px 0;" class="txtField" value="<?php echo $row['manufdate']; ?>">
		<br>

		Expiry Date: <br>
		<input type="date" name="expdate" max="<?php echo date("Y-m-d"); ?>" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
 			 margin: 8px 0;" class="txtField" value="<?php echo $row['expdate']; ?>">
		<br>

		Received Date:<br>
		<input type="date" name="receivedate" max="<?php echo date("Y-m-d"); ?>" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
 			 margin: 8px 0;" class="txtField" value="<?php echo $row['receivedate']; ?>">
		<br>


		<br>
		
		<input type="submit" name="submit" value="Submit" class="buttom">

		</form>
  	</div>
</div>
	
</body>
</html>