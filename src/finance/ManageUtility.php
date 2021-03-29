<?php
include_once '../../config/connection.php';

$result = mysqli_query($conn,"SELECT * FROM finance");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../public/css/Manage.css">

</head>
<body>

<?php
if (mysqli_num_rows($result) > 0) {
?>
<?php include('../../public/includes/header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	
  		<ul>
		  <li><a href="AddUtility.php">Add Utility</a></li>
		  <li><a href="ViewUtility.php">View Utility</a></li>
		  <li><a class="active" href="ManageUtility.php">Manage Utility</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="#">
		<center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by utility no or type or date" title="Type in a search filter">
		  	<!--<input type="submit" value="Search"></center>-->
		  	<br>
		  	<table id="myTable">
			  <tr>
			    <th>Utility no</th>
			    <th>Utility type</th>
			    <th>Description</th>
			    <th>Date</th>
			    <th>Amount</th>
			   
			    <th>Edit</th>
			    <th>Delete</th>
			  </tr>
			  	<?php
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["id"]; ?></td>
			    <td><?php echo $row["type"]; ?></td>
			    <td><?php echo $row["utilitydes"]; ?></td>
			    <td><?php echo $row["date"]; ?></td>
			    <td><?php echo $row["amount"]; ?></td>
			   
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