<!DOCTYPE html>
<html lang="en">
<head>
<title>Finance Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Css/AddUtilityCSS.css">

</head>
<body>

<div class="sidenav">
	<div class="row">
  		<center><p style="font-size: 35px;"><b>IHealth</b></p>
		<hr></center>
  	</div>
  	<div class="row">
  		<center><p style="font-size: 20px;"><b>Dashboard</b></p>
		<hr></center>
  	</div>
	<div class="row">
  		<center><a href="#">Customer</a><hr>
		<a href="#">Stock</a><hr>
		<a href="#">Item</a><hr>
		<a href="#">Supplier</a><hr>
		<a href="#">Supplier Order</a><hr>
		<a href="#">Customer Order</a><hr>
		<a href="#">Employee</a><hr>
		<a href="#">Finance</a></center>
  	</div>
	
</div>

<div class="content">
  	<div class="row end">
  		<div class="row">
	  		<br>
	  		<a href=""><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  		<a href=""><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  		<br>Edit Profile &nbsp;&nbsp;&nbsp;&nbsp; Sign Out
  		</div>
  		<br>
  		<hr>
  	</div>
  	<br>
  	<div class="row" style="margin-top: -18px;">
  		<ul>
		  <li><a class="active" href="AddUtility.php">Add Utility</a></li>
		  <li><a href="ViewUtility.php">View Utility</a></li>
		  <li><a href="ManageUtility.php">Manage Utility</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="insert.php" method="POST">
		
		    <label for="Uno">Utility no:</label>
		    <input type="text" id="Uno" name="id" placeholder="Utility number.." required>
			
		    <label for="Utype">Utility type:</label>
		    <select id="type" name="type">
		      <option value="Water">Water</option>
		      <option value="Electricity">Electricity</option>
		      <option value="Telecommunication">Telecommunication</option>
		    </select>

            <label for="Udes">Description:</label>
		    <input type="text" id="Udes" name="utilitydes" placeholder="Utility description.." required>
			<br>
            
		    <label for="date">Date:</label>
		    <input type="date" id="date" name="date" placeholder="Date.." required>
			<br><br>
			
			<label for="amount">Amount:</label>
		    <input type="text" id="amount" name="amount" placeholder="Amount.." required>
			
			
		    <label for="AID">Admin ID:</label>
		    <input type="text" id="AId" name="adminid" placeholder="Admin ID.." required>
			
		  	
		  	<input type="submit" name="submit" value="Submit">
		    <input type="reset" value="Reset">

		 </form>
  	</div>
</div>

</body>
</html>