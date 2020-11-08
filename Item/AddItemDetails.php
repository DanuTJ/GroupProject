<!DOCTYPE html>
<html lang="en">
<head>
<title>Item Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/AddItemDetailsCSS.css">

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
		  <li><a class="active" href="AddItemDetails.php">Add Item</a></li>
		  <li><a href="ViewItem.php">View Item</a></li>
		  <li><a href="ManageItem.php">Manage Item</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="insert.php" method="POST">
		
		    <label for="Iid">Item ID:</label>
		    <input type="text" id="Iid" name="itemid" placeholder="Item ID.." required>
			
		    <label for="Iname">Item Name:</label>
		    <input type="text" id="Iname" name="itemname" placeholder="Item name.." required>

		    <label for="Icategory">Item Category:</label>
		    <select id="category" name="category">
		      <option value="Medicine">Medicine</option>
		      <option value="Personal hygiene">Personal hygiene</option>
		      <option value="Skincare">Skincare</option>
			  <option value="Diet and Nutrition">Diet and Nutrition</option>
			  <option value="Food and beverages">Food and Beverages</option>
		    </select>

		    <label for="manu">Manufacturer:</label>
		    <input type="text" id="manu" name="manufacturer" placeholder="The manufacturer.." required>
			
			<label for="Description">Item description:</label>
		    <input type="text" id="Ides" name="ides" placeholder="Item description.." required>
			
			<label for="Unit">Unit:</label>
		    <input type="text" id="Unit" name="unit" placeholder="Unit.." required>
			
			<label for="Price">Price:</label>
		    <input type="text" id="Price" name="price" placeholder="Price.." required>

		    <label for="Iquantity">Item quantity:</label>
		    <input type="text" id="Iquantity" name="iquantity" placeholder="Item quantity.." required>
			
			<label for="Total">Total:</label>
		    <input type="text" id="Total" name="total" placeholder="Total.." required>
			
			<label for="Invoiceno">Order invoice no:</label>
		    <input type="text" id="Invoiceno" name="invoice" placeholder="Invoice no.." required>
			
			<label for="AdminId">Admin ID</label>
		    <input type="text" id="AdminId" name="adminid" placeholder="Admin ID.." required>
			
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>