<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/Add.css">

</head>
<body>

<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a class="active" href="AddUtility.php">Add Utility</a></li>
		  <li><a href="ViewUtility.php">View Utility</a></li>
		  <li><a href="ManageUtility.php">Manage Utility</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="insert.php" method="POST">
		
		    <label for="Uno">Utility no:</label>
		    <input type="text" id="Uno" name="id" placeholder="Utility number.." required>
			<br>
			
		    <label for="Utype">Utility type:</label>
		    <select id="type" name="type">
		      <option value="Water">Water</option>
		      <option value="Electricity">Electricity</option>
		      <option value="Telecommunication">Telecommunication</option>
		    </select>
			<br>

            <label for="Udes">Description:</label>
		    <input type="text" id="Udes" name="utilitydes" placeholder="Utility description.." required>
			<br>
			
            
		  
			
			<label for="amount">Amount:</label>
		    <input type="text" id="amount" name="amount" placeholder="Amount.." required>
			<br>
			
		    <label for="AID">Admin ID:</label>
		    <input type="text" id="AId" name="adminid" placeholder="Admin ID.." required>
			<br>
			  <label for="date">Date:</label>
		    <input type="date" id="date" name="date" placeholder="Date.." style="width:430px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" required>
			<br>
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>