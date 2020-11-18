<!DOCTYPE html>
<html lang="en">
<head>
<title>Stock Details</title>
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
	<div class = "navbar">
  		<ul>
		  <li><a class="active" href="AddStockDetails.php">Add Stock</a></li>
		  <li><a href="ViewStock.php">View Stock</a></li>
		  <li><a href="ManageStock.php">Manage Stock</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
          	<label for="Sid">Stock ID:</label>
		    <input type="text" id="Sid" name="id" placeholder="Enter stock id.." style="width:505px" required>
			<br>

		    <label for="Qty">Quantity:</label>
		    <input type="number" id="Qty" name="quantity" min="1" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" placeholder="Ex: xxx" required>
			<br>	  

		    <label for="Price">Price:</label>
		    <input type="float" id="Price" name="price" pattern="[0-9]*[.]?[0-9]+" placeholder="Ex: xxx.xx" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  			margin: 8px 0;" required>
			<br>
            
			<label for="Supname">Supplier:</label>
		    <input type="text" id="Supname" name="supplier" placeholder="Enter Supplier Name.." required>
			<br>

			<label for="Mdate">Manufacture Date:</label>
		    <input type="date" id="Mdate" name="manufdate" max="<?php echo date("Y-m-d"); ?>" placeholder="Enter manufacture date.." style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required> <br>

			<label for="Edate">Expiry Date:</label>
		    <input type="date" id="Edate" name="expdate" max="<?php echo date("Y-m-d"); ?>" placeholder="Enter expiry date.." style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required> <br>

			<label for="Rdate">Received Date:</label>
		    <input type="date" id="Rdate" name="receivedate" max="<?php echo date("Y-m-d"); ?>" placeholder="Enter received date.." style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required> <br>

			<br>
			<br>

		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		</form>
	</div>
</div>

</body>
</html>


