<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/Managecss.css">

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
		  <li><a href="AddStockDetails.php">Add Stock</a></li>
		   <li><a href="ViewStock.php">View Stock</a></li>
		   <li><a class="active" href="ManageStock.php">Manage Stock</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="ManageStock.php">
		    <center><input type="text" name="search" placeholder="Search..">
		  	<input type="submit" value="Search"></center>
		  	<br>
		  	<table>
			  <tr>
			    <th>Stock Code</th>
			    <th>Quantity</th>
			    <th>Manufacturer Date</th>
				<th>Expiry Date</th>
			    <th>Received Date</th>
			    <th>Stock Price</th>
			    <th>Item Price</th>
			    <th>Item ID</th>
				<th>Supplier</th>
				<th>Supplier Order ID</th>
				<th>Admin ID</th>
				<th>Edit</th>
				<th>Delete</th>
			  </tr>
		 	  	<?php
				   include_once('connection.php');
				   $sql="SELECT * from stock";
				   $result=mysqli_query($conn,$sql);
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["Stock_Code"]; ?></td>
			    <td><?php echo $row["Quantity"]; ?></td>
			    <td><?php echo $row["Manufacturer_Date"]; ?></td>
				<td><?php echo $row["Expiry_Date"]; ?></td>
			    <td><?php echo $row["Received_Date"]; ?></td>
				<td><?php echo $row["Stock_Price"]; ?></td>
			    <td><?php echo $row["Item_Price"]; ?></td>
				<td><?php echo $row["Item_ID"]; ?></td>
				<td><?php echo $row["Supplier"]; ?></td>
				<td><?php echo $row["Supplier_Order_ID"]; ?></td>
				<td><?php echo $row["Admin_ID"]; ?></td>
				
			    
				<td><a href="updated.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="deleted.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a></td>

			  </tr>
			  	<?php
					$i++;
					}
				?>
			</table>
			<?php
				
			?>
		</form>
  	</div>
</div>

</body>
</html>