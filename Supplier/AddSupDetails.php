<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/AddSupDetailscss.css">

</head>
<body>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a class="active" href="AddSupDetails.php">Add Supplier</a></li>
		  <li><a href="ViewSupplier.php">View Supplier</a></li>
		  <li><a href="ManageSupplier.php">Manage Supplier</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
		    <label for="Sname">Supplier Name:</label>
		    <input type="text" id="Sname" name="suppliername" placeholder="Your name.." required>

			<label for="Cname">Company Name:</label>
		    <input type="text" id="Cname" name="companyname" placeholder="Your Company name.." required>

			<label for="Caddress">Company Address:</label>
		    <input type="text" id="Caddress" name="companyaddress" placeholder="Your company address.." required>

		    <label for="Pno">Company Telephone Number:</label>
		    <input type="text" id="pno" name="phoneno" placeholder="Your phone number.." required>

		    <label for="Email">Company Email:</label>
		    <input type="text" id="email" name="email" placeholder="Your email.." required>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>