<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Details</title>
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
	<div class="navbar">
  		<ul>
		  <li><a class="active" href="AddCusDetails.php">Add Customer</a></li>
		  <li><a href="ViewCustomer.php">View Customer</a></li>
		  <li><a href="ManageCustomer.php">Manage Customer</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
		    <label for="Cname">Customer Name:</label>
		    <input type="text" id="Cname" name="customername" placeholder="Your name.." required>
			<br>

		    <label for="type">Customer Type:</label>
		    <select id="type" name="type">
		      <option value="Regular">Regular</option>
		      <option value="Luxury">Luxury</option>
		      <option value="Medium">Medium</option>
		    </select>
			<br>

		    <label for="Pno">Telephone Number:</label>
		    <input type="text" id="pno" name="phoneno" placeholder="Your phone number.." required>
			<br>

		    <label for="Email">Email:</label>
		    <input type="text" id="email" name="email" placeholder="Your email.." required>
			<br>

		    <label for="Aid">Admin ID:</label>
		    <input type="text" id="Aid" name="adminid" placeholder="Your ID.." required>
			<br>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>