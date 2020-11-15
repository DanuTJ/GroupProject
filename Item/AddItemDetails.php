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
		    <input type="text" id="Iid" name="id" placeholder="Item ID.." required>
			<br>
			
		    <label for="Iname">Item Name:</label>
		    <input type="text" id="Iname" name="itemname" placeholder="Item name.." required>
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
		    <input type="text" id="manu" name="manufacturer" placeholder="The manufacturer.." required>
			<br>
			
			<label for="Description">Item Description:</label>
		    <input type="text" id="Ides" name="ides" placeholder="Item description.." required>
			<br>
			
			<label for="Unit">Unit:</label>
		    <input type="text" id="Unit" name="unit" placeholder="Unit.." required>
			<br>
			
			<label for="Price">Price:</label>
		    <input type="text" id="Price" name="price" placeholder="Price.." required>
            <br>
			
		    <label for="Iquantity">Item Quantity:</label>
		    <input type="text" id="Iquantity" name="iquantity" placeholder="Item quantity.." required>
			<br>
			
			<label for="Total">Total:</label>
		    <input type="text" id="Total" name="total" placeholder="Total.." required>
			<br>
			
			<label for="Invoiceno">Order Invoice No:</label>
		    <input type="text" id="Invoiceno" name="invoice" placeholder="Invoice no.." required>
			<br>
			
			<label for="AdminId">Admin ID</label>
		    <input type="text" id="AdminId" name="adminid" placeholder="Admin ID.." required>
			<br>
			
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>