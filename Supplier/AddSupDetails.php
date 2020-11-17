<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Details</title>
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
		  <li><a class="active" href="AddSupDetails.php">Add Supplier</a></li>
		  <li><a href="ViewSupplier.php">View Supplier</a></li>
		  <li><a href="ManageSupplier.php">Manage Supplier</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
		    <label for="Sname">Supplier Name:</label>
		    <input type="text" id="Sname" name="suppliername" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" placeholder="Enter name.." required>
			<br>

			<label for="Cname">Company Name:</label>
		    <input type="text" id="Cname" name="companyname" placeholder="Enter company name.." required>
			<br>

			<label for="Caddress">Company Address:</label>
		    <input type="text" id="Caddress" name="companyaddress" placeholder="Enter company address.." required>
			<br>

		    <label for="Pno">Company Telephone:</label>
		    <input type="text" id="pno" name="phoneno" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Ex: 000-000-0000" required>
			<br>

		    <label for="Email">Company Email:</label>
		    <input type="email" id="email" name="email" placeholder="abc@gmail.com" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
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