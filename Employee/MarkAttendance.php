<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/Addcss.css">

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
		  <li><a  href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a class="active" href="MarkAttendance.php">Mark Attendance</a></li>
		    <li><a href="MarkLeave.php">Mark Leave</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
          	<label for="Eid">Employee Name:</label>
		    <input type="text" id="Eid" name="Employee ID" placeholder="Employee Name.." required>
			<br>
			<br>
		    <label for="Date">Date:</label>
		    <input type="date" id="Date" name="Date" required>

            <label for="Time">Time:</label>
		    <input type="time" id="Time" name="Time" required> 
			<br> 
			<br>
			<form action="/action_page.php">
				<p> Status: </p>
			  <input type="radio" id="present" name="status" value="present">
			  <label for="present">Present</label>
			  <br>
			  <input type="radio" id="absent" name="status" value="absent">
			  <label for="absent">Absent</label>
			  <br>
			  <br>
			
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">
			
			

		 </form>
  	</div>
</div>

</body>
</html>