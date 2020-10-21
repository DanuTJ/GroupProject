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