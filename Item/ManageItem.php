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
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/Manage.css">

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
		  <li><a href="AddItemDetails.php">Add Item</a></li>
		  <li><a href="ViewItem.php">View Item</a></li>
		  <li><a class="active" href="ManageItem.php">Manage Item</a></li>
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
			    <th>Item ID</th>
			    <th>Item Name</th>
			    <th>Item Category</th>
			    <th>Manufacturer</th>
			    <th>Item Description</th>
                <th>Unit Price</th>
			    <th>Item Quantity</th>
				<th>Total</th>
				<th>Order Invoice No</th>
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
				<td><?php echo $row["price"]; ?></td>
                <td><?php echo $row["iquantity"]; ?></td>
				<td><?php echo $row["total"]; ?></td>
				<td><?php echo $row["invoice"]; ?></td>
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