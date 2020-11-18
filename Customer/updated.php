<?php
include_once '../connection.php';
include_once '../session.php';
if(count($_POST)>0) {
	checkSession();
					if(isset($_SESSION['name'])){
						$_POST['ID'] = $_SESSION['userID'];
	
						
mysqli_query($conn,"UPDATE details set id='" . $_POST['id'] . "', customername='" . $_POST['customername'] . "', type='" . $_POST['type'] . "', phoneno='" . $_POST['phoneno'] . "', email='" . $_POST['email'] . "' ,adminid='" . $_POST['ID'] . "' WHERE id='" . $_POST['id']  . "'");
$message = "Record Modified Successfully";
					}
}
$result = mysqli_query($conn,"SELECT * FROM details WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Customer Details</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/View.css">
</head>
<body>
<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddCusDetails.php">Add Customer</a></li>
		  <li><a href="ViewCustomer.php">View Customer</a></li>
		  <li><a class="active" href="ManageCustomer.php">Manage Customer</a></li>
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
		ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>" disabled>
		<input type="text" name="id" disabled value="<?php echo $row['id']; ?>">
		<br>
		Customer Name: <br>
		<input type="text" name="customername" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['customername']; ?>">
		<br>
		Customer Type:<br>
		<select id="type" name="type">
			<option value="<?php echo $row['type']; ?>">Regular</option>
			<option value="<?php echo $row['type']; ?>">Luxury</option>
			<option value="<?php echo $row['type']; ?>">Medium</option>
		</select>
		<br>
		Telephone Number:<br>
		<input type="text" name="phoneno" class="txtField" pattern="[0-9]{10}"  value="<?php echo $row['phoneno']; ?>">
		<br>
		Email:<br>
		<input type="email" name="email" class="txtField" value="<?php echo $row['email']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>