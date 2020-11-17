<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM sorders");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Order</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/View.css">

</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddSupOrder.php">Add Supplier Order</a></li>
		  <li><a class="active" href="ViewSupOrder.php">View Supplier Order</a></li>
		  <li><a href="ManageSupOrder.php">Manage Supplier Order</a></li>
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
			    <th>Order ID</th>
				<th>Order Date</th>
			    <th>Supplier Name</th>
				<th>No.of Units</th>
			    <th>Arriving Date</th>
			    <th>Total Price</th>
				<th>Admin ID</th>
				
			    
			  </tr>
			  	<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["orderid"]; ?></td>
				<td><?php echo $row["orderdate"]; ?></td>
			    <td><?php echo $row["suppliername"]; ?></td>
				<td><?php echo $row["numofunits"]; ?></td>
			    <td><?php echo $row["arrivingdate"]; ?></td>
			    <td><?php echo $row["totalprice"]; ?></td>
				<td><?php echo $row["adminid"]; ?></td>
				
			    
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