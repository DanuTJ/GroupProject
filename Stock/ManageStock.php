<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM stock");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Stock Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/Manage.css">

</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class = "navbar">
  		<ul>
		  <li><a href="AddStockDetails.php">Add Stock</a></li>
		  <li><a href="ViewStock.php">View Stock</a></li>
		  <li><a class="active" href="ManageStock.php">Manage Stock</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
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
			    <th>Stock ID</th>
			    <th>Quantity</th>
			    <th>Manufacture Date</th>
				<th>Expiry Date</th>
			    <th>Received Date</th>
			    <th>Price</th>
				<th>Supplier</th>
				<th>Edit</th>
				<th>Delete</th>
			  </tr>
			  <?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["id"]; ?></td>
			    <td><?php echo $row["quantity"]; ?></td>
			    <td><?php echo $row["manufdate"]; ?></td>
				<td><?php echo $row["expdate"]; ?></td>
			    <td><?php echo $row["receivedate"]; ?></td>
				<td><?php echo $row["price"]; ?></td>
				<td><?php echo $row["supplier"]; ?></td>
				
			    
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