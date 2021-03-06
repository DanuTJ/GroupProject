<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/Add1.css">

</head>
<body>
<?php include('../../public/includes/header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a class="active" href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a href="MarkAttendance.php">Mark Attendance</a></li>
		   <li><a href="ManageAttendance.php">Manage Attendance</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="form1">
  		<br>
  		<form action="inserted.php" method="POST">
		  <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
          	<!-- <label for="Eid">Employee ID:</label>
		    <input type="text" id="Eid" name="Employee_ID" placeholder="Enter employee id.." required>
			<br> -->

		    <label for="Ename">Employee Name:</label>
		    <input type="text" id="Ename" name="name" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" placeholder="Enter employee name.." required>
			<br>

            <label for="Enic">NIC:</label>
		    <input type="text" id="Eid" name="nic" pattern="[A-Z0-9]+"  placeholder="Enter nic.." required>
			<br>

			<label for="Eaddress">Address:</label>
		    <input type="text" id="Eaddress" name="address" placeholder="Enter permanent address.." required>
			<br><br>

            <label for="Egender" style="width:420px">Gender:</label> 
			
			<input type="radio" id="male" name="status" value="male"  >
			  <label for="male">Male</label>
			<input type="radio" id="female" name="status" value="female">
			  <label for="female">Female</label> 
			  </br>
			  </br>
		    <label for="Tphone">Telephone No:</label>
		    <input type="text" id="Tpno" name="Telephone_No"  pattern="[0-9]{10}" placeholder="Ex: 000-000-0000" required>
			<br>

		    <label for="Email">Email:</label>
		    <input type="email" id="Email" name="Email" placeholder="Ex:abc@gmail.com"  required>
			<br>
            
		   <br>
		   	<input type="reset" value="Reset">
		  	<input type="submit" name="submit" value="Submit">
		    

		 </form>
  	</div>
</div>

</body>
</html>