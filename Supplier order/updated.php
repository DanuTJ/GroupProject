<?php
include_once '../connection.php';
include_once '../session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['ID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE sorders set id='" . $_POST['id'] . "', orderdate='" . $_POST['orderdate'] . "',suppliername='" . $_POST['suppliername'] . "', numofunits='" . $_POST['numofunits'] . "', arrivingdate='" . $_POST['arrivingdate'] . "', totalprice='" . $_POST['totalprice'] . "', adminid='" . $_POST['ID'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
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
<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddSupOrder.php">Add Supplier Order</a></li>
		  <li><a href="ViewSupOrder.php">View Supplier Order</a></li>
		  <li><a class="active" href="ManageSupOrder.php">Manage Supplier Order</a></li>
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
		<input type="text" name="id" style="width:635px" disabled value="<?php echo $row['id']; ?>">
		<br>
		Order Date: <br>
		<input type="date" name="orderdate" max="<?php echo date("Y-m-d"); ?>" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
 			 margin: 8px 0;" class="txtField" value="<?php echo $row['orderdate']; ?>">

		<br>
		Supplier Name: <br>
		<input type="text" name="suppliername" style="width:635px" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['suppliername']; ?>">
		<br>
		No. of Units: <br>
		<input type="number" name="numofunits" min="1" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" class="txtField" value="<?php echo $row['numofunits']; ?>">
		<br>
		Arriving Date:<br>
		<input type="date" name="arrivingdate" class="txtField" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['arrivingdate']; ?>">
		<br>
		Total Price:<br>
		<input type="text" name="totalprice" style="width:635px" pattern="[0-9]*[.]?[0-9]+" class="txtField" value="<?php echo $row['totalprice']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>