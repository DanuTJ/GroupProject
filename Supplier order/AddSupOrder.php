<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Order Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/AddSupOrdercss.css">

</head>
<body>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a class="active" href="AddSupOrder.php">Add Supplier Order</a></li>
		  <li><a href="ViewSupOrder.php">View Supplier Order</a></li>
		  <li><a href="ManageSupOrder.php">Manage Supplier Order</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">

		  	<label for="OrId">Order ID:</label>
		    <input type="text" id="OrId" name="orderid" placeholder="Enter Order ID.." required> <br>
			
			<label for="Ordate">Order Date:</label>
		    <input type="date" id="Ordate" name="orderdate" placeholder="Enter Order date.." required> <br> <br>
			
			<label for="SId">Supplier ID:</label>
		    <input type="text" id="SId" name="supplierid" placeholder="Enter Supplier ID.." required> <br>

		    <label for="Sname">Supplier Name:</label>
		    <input type="text" id="Sname" name="suppliername" placeholder="Your name.." required> <br>

		    <label for="Units">No. of Units:</label>
		    <input type="text" id="Units" name="numofunits" placeholder="Enter No. of units.." required> <br>

			<label for="Arridate">Arriving Date:</label>
		    <input type="date" id="Arridate" name="arrivingdate" placeholder="Enter arriving date.." required>
			<br> <br>

		    <label for="Tprice">Total Price:</label>
		    <input type="text" id="Tprice" name="totalprice" placeholder="price.." required> <br>

			<label for="Aid">Admin ID:</label>
		    <input type="text" id="Aid" name="adminid" placeholder="Your ID.." required>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>