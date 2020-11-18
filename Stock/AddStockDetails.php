<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/Addcss.css">

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
		  <li><a class="active" href="AddStockDetails.php">Add Stock</a></li>
		   <li><a href="ViewStock.php">View Stock</a></li>
		   <li><a href="ManageStock.php">Manage Stock</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="inserted.php" method="POST">
          	<label for="scode">Stock Code:</label>
		    <input type="text" id="scode" name="Stock_Code" placeholder="Enter the Code.." required>

		    <label for="quantity">Quantity:</label>
		    <input type="text" id="quantity" name="Quantity" placeholder="Enter Quantity.." required>

            <label for="mdate">Manufacturer Date:</label>
		    <input type="text" id="mdate" name="Manufacturer_Date" placeholder="Enter Manufacturer Date.." required>

			<label for="edate">Expiry Date:</label>
		    <input type="text" id="edate" name="Expiry_Date" placeholder="Enter Expiry Date.." required>

			<label for="rdate">Received Date:</label>
		    <input type="text" id="rdate" name="Received_Date" placeholder="Enter Receiveed Date.." required>

		    <label for="sprice">Stock Price:</label>
		    <input type="text" id="sprice" name="Stock_Price" placeholder="Enter Stock Price.." required>

		    <label for="iprice">Item Price:</label>
		    <input type="text" id="iprice" name="Item_Price" placeholder="Enter Item Price.." required>
            
			<label for="iid">Item ID:</label>
		    <input type="text" id="iid" name="Item_ID" placeholder="Enter Item ID.." required>
            
			<label for="supplier">Supplier:</label>
		    <input type="text" id="supplier" name="Supplier" placeholder="Enter Supplier Name.." required>
            
			<label for="sorderid">Supplier Order ID:</label>
		    <input type="text" id="sorderid" name="Supplier_Order_ID" placeholder="Enter Supplier Order ID.." required>
            
		  	<label for="Adminid">Admin ID:</label>
		    <input type="text" id="Adminid" name="Admin_ID" placeholder="Admin id.." required>

		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>