<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM suppliers");
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Supplier Details</title>
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
		  <li><a href="AddSupDetails.php">Add Supplier</a></li>
		  <li><a class="active" href="ViewSupplier.php">View Supplier</a></li>
		  <li><a href="ManageSupplier.php">Manage Supplier</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="#">
		    <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by ID / Name / Company" title="Type in a search filter">
		  	<!--<input type="submit" value="Search"></center>-->
		  	<br>
		  	<table id="myTable">
			  <tr>
			    <th>ID</th>
			    <th>Supplier Name</th>
			    <th>Company Name</th>
				<th>Address</th>
			    <th>Telephone Number</th>
			    <th>Email</th>
				<th>Admin ID</th>
			    
			  </tr>
			  	<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["id"]; ?></td>
			    <td><?php echo $row["suppliername"]; ?></td>
			    <td><?php echo $row["companyname"]; ?></td>
				<td><?php echo $row["companyaddress"]; ?></td>
			    <td><?php echo $row["phoneno"]; ?></td>
			    <td><?php echo $row["email"]; ?></td>
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
<script src="search.js">
</script>
</body>
</html>