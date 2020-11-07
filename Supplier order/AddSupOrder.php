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
		  <li><a class="active" href="AddSupOrder.php">Add Orders</a></li>
		  <li><a href="ViewSupOrder.php">View Orders</a></li>
		  <li><a href="ManageSupOrder.php">Manage Orders</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">

		  	<label for="OrId">Order ID:</label>
		    <input type="text" id="OrId" name="orderid" placeholder="Enter Order ID.." required>

			<label for="Ordate">Order Date:</label>
		    <input type="text" id="Ordate" name="orderdate" placeholder="Enter Order date.." required>

			<label for="SId">Supplier ID:</label>
		    <input type="text" id="SId" name="supplierid" placeholder="Enter Supplier ID.." required>

		    <label for="Sname">Supplier Name:</label>
		    <input type="text" id="Sname" name="suppliername" placeholder="Your name.." required>

			<label for="Unum">Utility No:</label>
		    <input type="text" id="Unum" name="utilitynumber" placeholder="Enter utility no.." required>

		    <label for="Units">No. of Units:</label>
		    <input type="text" id="Units" name="numofunits" placeholder="Enter No. of units.." required>

			<label for="Arridate">Arriving Date:</label>
		    <input type="text" id="Arridate" name="arrivingdate" placeholder="Enter arriving date.." required>

		    <label for="Tprice">Total Price:</label>
		    <input type="text" id="Tprice" name="totalprice" placeholder="price.." required>

			<label for="Aid">Admin ID:</label>
		    <input type="text" id="Aid" name="adminid" placeholder="Your ID.." required>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>