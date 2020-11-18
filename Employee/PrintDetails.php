<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/Printcss.css">

</head>
<body>
<?php include('../header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a  href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a  href="MarkAttendance.php">Mark Attendance</a></li>
		    <li><a href="MarkLeave.php">Mark Leave</a></li>
		  <li><a class="active" href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="#">
		    <label for="Rname">Detail Report Name:</label>
		    <br><br>
		    <input type="text" id="Rname" name="reportname" placeholder=" Report name.." required>
		  	
		  	<input type="submit" value="Download">
		 </form>
  	</div>
</div>

</body>
</html>