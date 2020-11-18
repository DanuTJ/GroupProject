<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Order</title>
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
		  <li><a class="active" href="AddCusOrder.php">Add Customer Order</a></li>
		  <li><a href="ViewCustomerOrder.php">View Customer Order</a></li>
		  <li><a href="ManageCustomerOrder.php">Manage Customer Order</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
		    
		    <label for="Cname">Customer Name:</label>
			<input type="text" id="Cname" name="customername" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" placeholder="Enter customer name.." required>
			<br>
		 

		    <label for="Pno">Telephone Number:</label>
		    <input type="text" id="pno" name="phoneno" pattern="[0-9]{10}" placeholder="Ex: 0000000000" required>
			<br>

		    <label for="Order">Order:</label>
		    <input type="text" id="orderdes" name="orderdes" placeholder="Order.." required>
			<br>

			<label for="Price">Price:</label>
		    <input type="text" id="Price" name="price" pattern="[0-9]+" placeholder="Ex: xxx.xx" required>
			<br>

			
			<label for="date">Date:</label>
		    <input type="date" id="date" name="date" max="<?php echo date("Y-m-d"); ?>" placeholder="Date of the Order.."     value="2020-11-18"
       min="2020-11-18" max="2021-11-19" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
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