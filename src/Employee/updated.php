<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['name'])){
		$_POST['admid'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE emp set  Employee_Name='" . $_POST['Employee_Name'] . "', NIC='" . $_POST['NIC'] . "', Address='" . $_POST['Address'] . "', Gender='" . $_POST['status'] .  "', Telephone_No='" . $_POST['Telephone_No'] . "', Email='" . $_POST['Email'] . "', adminid='" . $_POST['admid'] . "' WHERE Employee_ID='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
header('Location:ManageEmployee.php');
}
}

// $result = mysqli_query($conn,"SELECT * FROM emp WHERE id='" . $_GET['id'] . "'");
// $row= mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT * FROM emp WHERE Employee_ID='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Employee Details</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="empcss/View.css">
</head>
<body>
<?php include('../../public/includes/header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class = "navbar">
  		<ul>
		  <li><a href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a class="active" href="ManageEmployee.php">Manage Employee</a></li>
		  <li><a href="MarkAttendence.php">Mark Attendence</a></li>
		  <li><a href="ManageAttendance.php">Manage Attendance</a></li>
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
		Employee ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['Employee_ID']; ?>">
		<input type="text" name="id" disabled value="<?php echo $row['Employee_ID']; ?>">
		<br>
		Employee Name: <br>
		<input type="text" name="Employee_Name" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['Employee_Name']; ?>">
		<br>
		NIC: <br>
		<input type="text" name="NIC" pattern="[A-Z0-9]+" class="txtField" value="<?php echo $row['NIC']; ?>">
		<br>
		Gender: <br>
		<?php
		if($row['Gender']=='male'){
		echo 	"<input type=\"radio\" id=\"male\" name=\"status\" value=\"male\"  checked=\"checked\">
			<label for=\"male\">Male</label>
	  		<input type=\"radio\" id=\"female\" name=\"status\" value=\"female\">
			<label for=\"female\">Female</label>" ;

		}	else {
			echo 	"<input type=\"radio\" id=\"male\" name=\"status\" value=\"male\"  >
			<label for=\"male\">Male</label>
	  		<input type=\"radio\" id=\"female\" name=\"status\" value=\"female\" checked=\"checked\">
			<label for=\"female\">Female</label>" ;

		}
		?>

		<br>
		Address: <br>
		<input type="text" name="Address" class="txtField" value="<?php echo $row['Address']; ?>">
		<br>
		Telephone No:<br>
		<input type="text" name="Telephone_No" pattern="[0-9]{10}" class="txtField" value="<?php echo $row['Telephone_No']; ?>">
		<br>
		Email:<br>
		<input type="Email" name="Email" class="txtField" style="width:505px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
 		 margin: 8px 0;" value="<?php echo $row['Email']; ?>">
		<br><br>
		<input type="submit" name="submit" value="Submit" class="buttom">
		

	</form>
  	</div>
</div>
	
</body>
</html>