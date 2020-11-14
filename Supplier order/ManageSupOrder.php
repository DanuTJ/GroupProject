<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM sorders");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/ManageSupOrdercss.css">

</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a href="AddSupOrder.php">Add Supplier Order</a></li>
		  <li><a href="ViewSupOrder.php">View Supplier Order</a></li>
		  <li><a class="active" href="ManageSupOrder.php">Manage Supplier Order</a></li>
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
			    <th>Order ID</th>
				<th>Order Date</th>
				<th>Supplier ID</th>
			    <th>Supplier Name</th>
				<th>No.of Units</th>
			    <th>Arriving Date</th>
			    <th>Total Price</th>
				<th>Admin ID</th>
			    <th>Edit</th>
			    <th>Delete</th>
			  </tr>
			  	<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["orderid"]; ?></td>
				<td><?php echo $row["orderdate"]; ?></td>
				<td><?php echo $row["supplierid"]; ?></td>
			    <td><?php echo $row["suppliername"]; ?></td>
				<td><?php echo $row["numofunits"]; ?></td>
			    <td><?php echo $row["arrivingdate"]; ?></td>
			    <td><?php echo $row["totalprice"]; ?></td>
				<td><?php echo $row["adminid"]; ?></td>
			    
				<td><a href="updated.php?id=<?php echo $row["orderid"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="deleted.php?id=<?php echo $row["orderid"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a></td>

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