<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Order</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/AddCusDetailscss.css">

</head>
<body>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a class="active" href="AddCusOrder.php">Add Customer Order</a></li>
		  <li><a href="ViewCustomerOrder.php">View Customer Order</a></li>
		  <li><a href="ManageCustomerOrder.php">Manage Customer Order</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
		    <label for="date">Date:</label>
		    <input type="date" id="date" name="date" placeholder="Date of the Order.." required>
			<br> <br>
		    <label for="Cname">Customer Name:</label>
			<input type="text" id="Cname" name="customername" placeholder="Enter customer name" required>
		 

		    <label for="Pno">Telephone Number:</label>
		    <input type="text" id="pno" name="phoneno" placeholder="Customer phone number.." required>

		    <label for="Order">Order:</label>
		    <input type="text" id="orderdes" name="orderdes" placeholder="Order.." required>

			<label for="Price">Price:</label>
		    <input type="text" id="Price" name="price" placeholder="Price.." required>

			<label for="Cid">Customer ID:</label>
		    <input type="text" id="Cid" name="customerid" placeholder="Your ID.." required>
		  	

		    <label for="Aid">Admin ID:</label>
		    <input type="text" id="Aid" name="adminid" placeholder="Your ID.." required>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>