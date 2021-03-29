<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM details");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Customer Details</title>
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
	<div class="navbar">
  		<ul>
		  <li><a href="AddCusDetails.php">Add Customer</a></li>
		  <li><a href="ViewCustomer.php">View Customer</a></li>
		  <li><a class="active" href="ManageCustomer.php">Manage Customer</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<!--<form action="search.php" method="POST" >-->
		    <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by name" title="Type a name">
		  	<!--<input type="submit"  value="Search"></center> -->
		  	<br>
		  	<table id="myTable">
			  <tr>
			    <th>ID</th>
			    <th>Name</th>
			    <th>Type</th>
			    <th>Telephone Number</th>
			    <th>Email</th>
			   
			    <th>Edit</th>
			    <th>Delete</th>
			  </tr>
			  	<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["id"]; ?></td>
			    <td><?php echo $row["customername"]; ?></td>
			    <td><?php echo $row["type"]; ?></td>
			    <td><?php echo $row["phoneno"]; ?></td>
			    <td><?php echo $row["email"]; ?></td>
			    
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
<script src="search.js">
</script>
</body>
</html>