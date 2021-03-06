<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/Add.css">

</head>
<body>

<?php include('../../public/includes/header.php') ?>
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
		  <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
		    <label for="Cname">Customer Name:</label>
		    <input type="text" id="Cname" name="customername" style="width:645px" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" placeholder="Enter name.. " required>
			<br>

		    <label for="type">Customer Type:</label>
		    <select id="type" name="type" style="width:645px">
		      <option value="Regular">Regular</option>
		      <option value="Luxury">Luxury</option>
		      <option value="Medium">Medium</option>
		    </select>
			<br>

		    <label for="Pno">Telephone Number:</label>
		    <input type="text" id="pno" name="phoneno" style="width:645px" pattern="[0-9]{10}" placeholder="Ex: 0000000000" required>
			<br>

		    <label for="Email">Email:</label>
		    <input type="email" id="email" name="email" placeholder="Ex:abc@gmail.com" style="width:645px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" required>
			<br>

		   
			<br>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>