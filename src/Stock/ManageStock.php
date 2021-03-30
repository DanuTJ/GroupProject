<?php
include_once '../../config/connection.php';
$result = mysqli_query($conn,"SELECT * FROM stock");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Stock Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/manage.css">

</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>

<?php include('../../public/includes/header.php') ?>
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
		   <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID or Supplier" title="Type in a ID or Name">
		  	<!--<input type="submit" value="Search"></center>-->
		  	<br>
		  	<table id="myTable">
			  <tr>
			    <th>Stock ID</th>
				<th>Stock Name</th>
			    <th>Quantity</th>
			    <th>Manufacture Date</th>
				<th>Expiry Date</th>
			    <th>Received Date</th>
			    <th>Unit Price</th>
				<th>Supplier</th>
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
				<td><?php echo $row["name"]; ?></td>
			    <td><?php echo $row["quantity"]; ?></td>
			    <td><?php echo $row["manufdate"]; ?></td>
				<td><?php echo $row["expdate"]; ?></td>
			    <td><?php echo $row["receivedate"]; ?></td>
				<td><?php echo $row["unit_price"]; ?></td>
				<td><?php echo $row["supplier"]; ?></td>
				<td><?php echo $row["adminid"]; ?></td>
				
			    
				<td><a href="updated.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="deleted.php?id=<?php echo $row["id"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red" onclick=" return myfunction()"></i></a></td>

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
<script src="../../public/js/stocksearch.js">
</script>
<script>
function myfunction(){
	var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}
</script>
</body>
</html>