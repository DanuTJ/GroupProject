<?php
include_once '../connection.php';
include_once '../session.php';

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
		  <li><a href="AddUtility.php">Add Utility</a></li>
		  <li><a class="active" href="ViewUtility.php">View Utility</a></li>
		  <li><a href="ManageUtility.php">Manage Utility</a></li>
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
			    <th>Utility no</th>
			    <th>Utility type</th>
			    <th>Description</th>
			    <th>Date</th>
			    <th>Amount</th>
				<th>Admin ID</th>
				
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