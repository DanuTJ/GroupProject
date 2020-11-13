<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Item Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/ManageItemCSS.css">

</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>

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
		  <li><a href="AddItemDetails.php">Add Item</a></li>
		  <li><a href="ViewItem.php">View Item</a></li>
		  <li><a class="active" href="ManageItem.php">Manage Item</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="#">
		    <center><input type="text" name="search" placeholder="Search..">
		  	<input type="submit" value="Search"></center>
		  	<br>
		  	<table>
			  <tr>
			    <th>Item ID</th>
			    <th>Item Name</th>
			    <th>Item Category</th>
			    <th>Manufacturer</th>
			    <th>Item Description</th>
		        <th>Unit</th>
                <th>Price</th>
			    <th>Item Quantity</th>
				<th>Total</th>
				<th>Order Invoice No</th>
				<th>Admin ID</th>
			    <th>Edit</th>
			    <th>Delete</th>
			  </tr>
			  	<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["id"]; ?></td>
			    <td><?php echo $row["itemname"]; ?></td>
			    <td><?php echo $row["category"]; ?></td>
			    <td><?php echo $row["manufacturer"]; ?></td>
			    <td><?php echo $row["ides"]; ?></td>
				<td><?php echo $row["unit"]; ?></td>
				<td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["iquantity"]; ?></td>
				<td><?php echo $row["total"]; ?></td>
				<td><?php echo $row["invoice"]; ?></td>
				<td><?php echo $row["adminid"]; ?></td>
				<td><a href="updated.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="deleted.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a></td>

			  </tr>
			  	<?php
					$i++;
					}
				?>
			</table>
			<?php
				}
				else{
				    echo "No result found";
				}
			?>
		</form>
  	</div>
</div>

</body>
</html>