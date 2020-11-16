<?php
include_once 'connection.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE details set id='" . $_POST['id'] . "', Eid='" . $_POST['employeeid'] . "', Ename='" . $_POST['employeename'] . "', Enic='" . $_POST['mployeenic'] . "',Eaddress='" . $_POST['employeeaddress'] . "', Egender='" . $_POST['gender'] .  "', Tphone='" . $_POST['phoneno'] . "', Email='" . $_POST['email'] . "', Adminid='" . $_POST['Adminid'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM details WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Details</title>
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
	<div class = "navbar">
  		<ul>
		  <li><a href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a class="active" href="ManageEmployee.php">Manage Employee</a></li>
		  <li><a href="MarkAttendence.php">Mark Attendence</a></li>
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
		Employee ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id"  value="<?php echo $row['id']; ?>">
		<br>
		Employee Name: <br>
		<input type="text" name="employeename" class="txtField" value="<?php echo $row['employeename']; ?>">
		<br>
		NIC: <br>
		<input type="text" name="employeenic" class="txtField" value="<?php echo $row['employeenic']; ?>">
		<br>
		Gender: <br>
		<input type="radio" name="male" value="Male" class="radio" value="<?php echo $row['gender']; ?>">
		<input type="radio" name="female" value="Female" class="radio" value="<?php echo $row['gender']; ?>">
		<br>
		Address: <br>
		<input type="text" name="employeeaddress" class="txtField" value="<?php echo $row['employeeaddress']; ?>">
		<br>
		Telephone No:<br>
		<input type="text" name="phoneno" class="txtField" value="<?php echo $row['phoneno']; ?>">
		<br>
		Email:<br>
		<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>