<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE finance set id='" . $_POST['id'] . "', type='" . $_POST['type'] . "', utilitydes='" . $_POST['utilitydes'] . "', date='" . $_POST['date'] . "', amount='" . $_POST['amount'] . "', adminid='" . $_POST['adminid'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}

$result = mysqli_query($conn,"SELECT * FROM finance WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Utility Details</title>
<link rel="stylesheet" href="Css/ViewUtilityCSS.css">
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
		  <li><a href="AddUtility.php">Add Utility</a></li>
		  <li><a class="active" href="ManageUtility.php">Manage Utility</a></li>
		   <li><a href="Income.php">Income</a></li>
		  <li><a href="Expense.php">Expenses</a></li>
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
		Utility no: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id"  value="<?php echo $row['id']; ?>">
		<br>
		
		Utility type:<br>
		<select id="type" name="type">
			<option value="<?php echo $row['type']; ?>">Water</option>
			<option value="<?php echo $row['type']; ?>">Electricity</option>
			<option value="<?php echo $row['type']; ?>">Telecommunication</option>
			
		</select>
		<br>
		Description:<br>
		<input type="text" name="utilitydes" class="txtField" value="<?php echo $row['utilitydes']; ?>">
		<br>
		Date:<br>
		<input type="date" name="date" class="txtField" value="<?php echo $row['date']; ?>">
		<br>
		Amount:<br>
		<input type="text" name="amount" class="txtField" value="<?php echo $row['amount']; ?>">
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