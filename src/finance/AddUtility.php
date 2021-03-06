<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/Add.css">

</head>
<body>
<?php include('../../public/includes/header.php') ?>
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

		  <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
		
		    <label for="Uno">Utility no:</label>
		    <input type="text" id="Uno" name="id" style="width:645px" placeholder="Enter utility number.." required>
			<br>
			
		    <label for="Utype">Utility type:</label>
		    <select id="type" style="width:645px" name="type">
		      <option value="Water">Water</option>
		      <option value="Electricity">Electricity</option>
		      <option value="Telecommunication">Telecommunication</option>
		    </select>
			<br>

            <label for="Udes">Description:</label>
		    <input type="text" id="Udes" style="width:645px" name="utilitydes" placeholder="Enter utility description.." required>
			<br>
			
            
		  
			
			<label for="amount">Amount:</label>
		    <input type="text" id="amount" style="width:645px" name="amount" pattern="[0-9]*[.]?[0-9]+" placeholder="Ex: xxx.xx" required>
			<br>
			
		  
			  <label for="date">Date:</label>
		    <input type="date" id="date" name="date" max="<?php echo date("Y-m-d"); ?>" placeholder="Date.." style="width:645px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" required>
			<br>
		  	<br>
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>