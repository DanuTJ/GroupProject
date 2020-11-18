<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/Add.css">

</head>
<body>
<?php include('../header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class ="navbar">
  		<ul>
		  <li><a  href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a class="active" href="MarkAttendance.php">Mark Attendance</a></li>
		    <li><a href="MarkLeave.php">Mark Leave</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
          	<label for="Eid">Employee Name:</label>
		    <input type="text" id="Eid" name="Employee ID" placeholder="Employee Name.." required>
			<br>
			
		    <label for="Date">Date:</label>
		    <input type="date" id="Date" name="Date" max="<?php echo date("Y-m-d"); ?>" style="width:515px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" required>
			<br>

            <label for="Time">Time:</label>
		    <input type="time" id="Time" name="Time" style="width:515px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" required> 
			<br> 
			
			<form action="/action_page.php">
				<p style="width:370px"> Status: </p>
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