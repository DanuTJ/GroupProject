<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/Print.css">

</head>
<body>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddUtility.php">Add Utiltiy</a></li>
		  <li><a href="ViewUtility.php">View Utility</a></li>
		  <li><a href="ManageUtility.php">Manage Utility</a></li>
		  <li><a class="active" href="PrintDetails.php">Print Details</a></li>
		</ul>
		<div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="#">
		    <label for="Rname">Detail Report Name:</label>
		    <br><br>
		    <input type="text" id="Rname" name="reportname" placeholder="Your report name.." required>
		  	
		  	<input type="submit" value="Download">
		 </form>
  	</div>
</div>

</body>
</html>