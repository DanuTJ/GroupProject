<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['ID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE suppliers set id='" . $_POST['id'] . "', suppliername='" . $_POST['suppliername'] . "', companyname='" . $_POST['companyname'] . "',companyaddress='" . $_POST['companyaddress'] . "', phoneno='" . $_POST['phoneno'] . "', email='" . $_POST['email'] . "', adminid='" .$_POST['ID'] ."' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
}
$result = mysqli_query($conn,"SELECT * FROM suppliers WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Supplier Details</title>
<link rel="stylesheet" href="../../public/css/View.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/Manage.css">
</head>
<body>

<?php include('../../public/includes/header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddSupDetails.php">Add Supplier</a></li>
		  <li><a href="ViewSupplier.php">View Supplier</a></li>
		  <li><a class="active" href="ManageSupplier.php">Manage Supplier</a></li>
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
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id"style="width:635px"  disabled value="<?php echo $row['id']; ?>">
		<br>
		Supplier Name: <br>
		<input type="text" name="suppliername" style="width:635px" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['suppliername']; ?>">
		<br>
		Company Name: <br>
		<input type="text" name="companyname" style="width:635px" class="txtField" value="<?php echo $row['companyname']; ?>">
		<br>
		Company Address: <br>
		<input type="text" name="companyaddress" style="width:635px" class="txtField" value="<?php echo $row['companyaddress']; ?>">
		<br>
		Telephone Number:<br>
		<input type="text" name="phoneno" style="width:635px" pattern="[0-9]{10}" class="txtField" value="<?php echo $row['phoneno']; ?>">
		<br>
		Email:<br>
		<input type="email" name="email" class="txtField" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['email']; ?>">
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>