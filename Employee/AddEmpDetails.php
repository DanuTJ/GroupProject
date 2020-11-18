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
<?php include('../header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a class="active" href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a href="MarkAttendance.php">Mark Attendance</a></li>
		    <li><a href="MarkLeave.php">Mark Leave</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
          	<label for="Eid">Employee ID:</label>
		    <input type="text" id="Eid" name="Employee_ID" placeholder="Enter employee id.." required>

		    <label for="Ename">Employee Name:</label>
		    <input type="text" id="Ename" name="name" placeholder="Enter employee name.." required>

            <label for="Enic">NIC:</label>
		    <input type="text" id="Eid" name="nic" placeholder="Enter nic.." required>

			<label for="Eaddress">Address:</label>
		    <input type="text" id="Eaddress" name="address" placeholder="Enter permenent address.." required>

            <label for="Egender">Gender:</label> </br></br>
			<input type="radio" id="male" name="status" value="male">
			  <label for="male">Male</label>
			<input type="radio" id="female" name="status" value="female">
			  <label for="female">Female</label> 
			  </br>
			  </br>
		    <label for="Tphone">Telephone No:</label>
		    <input type="text" id="Tpno" name="Telephone_No" placeholder="Enter phone number.." required>

		    <label for="Email">Email:</label>
		    <input type="text" id="Email" name="Email" placeholder="Ex:abc@gmail.com" required>
            
		  	<label for="Adminid">Admin ID:</label>
		    <input type="text" id="Adminid" name="Admin_ID" placeholder="Enter admin id.." required>

		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>