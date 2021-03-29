<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Order Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/Add.css">

</head>
<body>

<?php include('../../public/includes/header.php')?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a class="active" href="AddSupOrder.php">Add Supplier Order</a></li>
		  <li><a href="ViewSupOrder.php">View Supplier Order</a></li>
		  <li><a href="ManageSupOrder.php">Manage Supplier Order</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
		  <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
		

		  	<label for="OrId">Order ID:</label>
		    <input type="text" id="OrId" name="id" style="width:635px" placeholder="Enter order id.." required> <br>

		    <label for="Sname">Supplier Name:</label>
		    <input type="text" id="Sname" name="suppliername" style="width:635px" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" placeholder="Enter supplier name.." required> <br>

		    <label for="Units">No. of Units:</label>
		    <input type="number" id="Units" name="numofunits" min="1" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" placeholder="Enter quantity.." required> <br>

		    <label for="Tprice">Price:</label>
		    <input type="text" id="Tprice" name="totalprice" style="width:635px" pattern="[0-9]*[.]?[0-9]+" placeholder="Ex: xxx.xx" required> <br>

			
			 <label for="Ordate">Order Date:</label>
		    <input type="date" id="Ordate" name="orderdate" max="<?php echo date("Y-m-d"); ?>" placeholder="Enter order date.." style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required> <br> 
			
			<label for="Arridate">Arriving Date:</label>
		    <input type="date"  id="Arridate" name="arrivingdate" placeholder="Enter arriving date.." style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px;  padding: 12px 20px;
  				margin: 8px 0;" required><br>
			<br> 
			<br>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>