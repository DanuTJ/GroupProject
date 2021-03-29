<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['ID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE finance set id='" . $_POST['id'] . "', type='" . $_POST['type'] . "', utilitydes='" . $_POST['utilitydes'] . "', date='" . $_POST['date'] . "', amount='" . $_POST['amount'] . "', adminid='" . $_POST['ID'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
}

$result = mysqli_query($conn,"SELECT * FROM finance WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Utility Details</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/View.css">
</head>
<body>
<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddUtility.php">Add Utility</a></li>
		  <li><a href="ViewUtility.php">View Utility</a></li>
		  <li><a class="active" href="ManageUtility.php">Manage Utility</a></li>
		  
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form name="frmUser" method="post" action="">
		<div><?php if(isset($message)) { echo $message; } ?>
		</div>
		<div style="padding-bottom:5px;">
		</div>
		Utility no: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" style="width:635px" name="id" disabled  value="<?php echo $row['id']; ?>">
		<br>
		
		Utility type:<br>
		<select id="type" style="width:635px" name="type">
			<option value="<?php echo $row['type']; ?>">Water</option>
			<option value="<?php echo $row['type']; ?>">Electricity</option>
			<option value="<?php echo $row['type']; ?>">Telecommunication</option>
			
		</select>
		<br>
		Description:<br>
		<input type="text" name="utilitydes" style="width:635px" class="txtField" value="<?php echo $row['utilitydes']; ?>">
		<br>
		Date:<br>
		<input type="date" name="date" class="txtField" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['date']; ?>">
		<br>
		Amount:<br>
		<input type="text" name="amount" style="width:635px" pattern="[0-9]*[.]?[0-9]+" class="txtField" value="<?php echo $row['amount']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>