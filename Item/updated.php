<?php
include_once '../connection.php';
include_once '../session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['ID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE items set id='" . $_POST['id'] . "', itemname='" . $_POST['itemname'] . "', category='" . $_POST['category'] . "', manufacturer='" . $_POST['manufacturer'] . "', ides='" . $_POST['ides'] . "', price='" . $_POST['price'] ."' ,iquantity='" . $_POST['iquantity'] . "', total='" .$_POST['total'] ."' ,invoice='" . $_POST['invoice'] .  "',adminid='" . $_POST['ID'] . "' WHERE id='" . $_POST['id'] . "'"); 
$message = "Record Modified Successfully";
}
}

$result = mysqli_query($conn,"SELECT * FROM items WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Item Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/View.css">
</head>
<body>
<?php include('../header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddItemDetails.php">Add Item</a></li>
		  <li><a href="ViewItem.php">View Item</a></li>
		  <li><a class="active" href="ManageItem.php">Manage Item</a></li>
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
		Item ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
		<input type="text" name="id" disabled value="<?php echo $row['id']; ?>"> 
		<br>
		Item Name: <br>
		<input type="text" name="itemname" class="txtField" value="<?php echo $row['itemname']; ?>">
		<br>
		Item Category:<br>
		<select id="category" name="category">
			<option value="<?php echo $row['category']; ?>">Medicine</option>
			<option value="<?php echo $row['category']; ?>">Personal hygiene</option>
			<option value="<?php echo $row['category']; ?>">Skincare</option>
			<option value="<?php echo $row['category']; ?>">Diet and Nutrition</option>
			<option value="<?php echo $row['category']; ?>">Food and Beverages</option>
		</select>
		<br>
		Manufacturer:<br>
		<input type="text" name="manufacturer" class="txtField" value="<?php echo $row['manufacturer']; ?>">
		<br>
		Item description:<br>
		<input type="text" name="ides" class="txtField" value="<?php echo $row['ides']; ?>">
		<br>
		Unit Price:<br>
		<input type="float" name="price" pattern="[0-9]+" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['price']; ?>">
		<br>
		Item quantity:<br>
		<input type="number" name="iquantity" min="1" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['iquantity']; ?>">
		<br>
		Total:<br>
		<input type="float" name="total" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;" value="<?php echo $row['total']; ?>">
		<br>
		Order Invoice no:<br>
		<input type="text" name="invoice" class="txtField" value="<?php echo $row['invoice']; ?>">
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
</div>
	
</body>
</html>