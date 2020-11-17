<!DOCTYPE html>
<html lang="en">
<head>
<title>Item Details</title>
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
		  <li><a class="active" href="AddItemDetails.php">Add Item</a></li>
		  <li><a href="ViewItem.php">View Item</a></li>
		  <li><a href="ManageItem.php">Manage Item</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="insert.php" method="POST">
		
		    <label for="Iid">Item ID:</label>
		    <input type="text" id="Iid" name="id" placeholder="Enter item id.." required>
			<br>
			
		    <label for="Iname">Item Name:</label>
		    <input type="text" id="Iname" name="itemname" placeholder="Enter item name.." required>
            <br>
			
		    <label for="Icategory">Item Category:</label>
		    <select id="category" name="category">
		      <option value="Medicine">Medicine</option>
		      <option value="Personal hygiene">Personal hygiene</option>
		      <option value="Skincare">Skincare</option>
			  <option value="Diet and Nutrition">Diet and Nutrition</option>
			  <option value="Food and beverages">Food and Beverages</option>
		    </select>
			<br>

		    <label for="manu">Manufacturer:</label>
		    <input type="text" id="manu" name="manufacturer" placeholder="Enter manufacturer name.." required>
			<br>
			
			<label for="Description">Item Description:</label>
		    <input type="text" id="Ides" name="ides" placeholder="Enter item description.." required>
			<br>
			
			<label for="Price">Unit Price:</label>
		    <input type="float" id="Price" name="price" pattern="[0-9]+" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" placeholder="Ex: xxx.xx" required>
            <br>
			
		    <label for="Iquantity">Item Quantity:</label>
		    <input type="number" id="Iquantity" name="iquantity" min="1" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" placeholder="Ex: xxx" required>
			<br>
			
			<label for="Total">Total:</label>
		    <input type="float" id="Total" name="total" pattern="[0-9]+" style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" placeholder="Ex: xxx.xx" required>
			<br>
			
			<label for="Invoiceno">Order Invoice No:</label>
		    <input type="text" id="Invoiceno" name="invoice" placeholder="Enter invoice no.." required>
			<br>
			
			<br>
			
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>