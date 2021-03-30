<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(isset($_POST['submit'])){
    $Emp_ID = $_POST['Emp_ID'];
    $Name = $_POST ['Name'];
	$Date = $_POST['Date'];
	$Status = $_POST['Status'];
	$Work_type = $_POST['Work_type'];
	 
	$sql_update= "UPDATE attendance set Emp_ID=$Emp_ID, Name='$Name', Date='$Date', Status='$Status', Work_type='$Work_type' WHERE Emp_ID='$Emp_ID'"; 
	//$sql_update= "UPDATE `attendance` SET `Emp_ID`='$Emp_ID',`Name`='$Name',`Date`='$Date',`Status`='$Status',`Work_type`='$Work_type' WHERE ID='$Emp_ID'";
	if(mysqli_query($conn,$sql_update)){
		$message = "Record Modified Successfully";
		header('location:ManageAttendance.php');

	} else {
		echo "SQL Syntex error";
	}
	
}

// if(count($_POST)>0) {
// 	checkSession();
// 	if(isset($_SESSION['name'])){
// 		$_POST['admid'] = $_SESSION['userID'];
//         mysqli_query($conn,"UPDATE attendance set  Emp_ID='" . $_POST['Emp_ID'] . "', Date='" . $_POST['Date'] . "', Status='" . $_POST['Status'] . "', Work_type='" . $_POST['Work_type'] .  "' WHERE Emp_ID='" . $_POST['id'] . "'");
// $message = "Record Modified Successfully";
// header('Location:ManageAttendance.php');
// }
// }

        // $Emp_name = $_POST['Emp_name'];
        // $Date = $_POST['Date'];
        // $Status = $_POST['Status'];
        // $Work_type = $_POST['Work_type'];
        
        //    $sql= "UPDATE `attendance` set (`Emp_name`, `Date`, `Status`, `Work_type`) 
        //    VALUES ('$Emp_name','$Date','$Status','$Work_type')";
        //    (mysqli_query($conn, $sql)) {
        //    $message = "Record Added  Successfully";
        //    header('Location:MarkAttendance.php');



// $result = mysqli_query($conn,"SELECT * FROM emp WHERE id='" . $_GET['id'] . "'");
// $row= mysqli_fetch_assoc($result);

$result = mysqli_query($conn,"SELECT * FROM attendance WHERE Emp_ID='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

?>
<html>
<head>
<title>Update Employee Attendance Details</title>
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../../public/css/View1.css">
</head>
<body>
<?php include('../../public/includes/header.php') ?>
  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class = "navbar">
  		<ul>
		  <li><a href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		  <li><a href="MarkAttendance.php">Mark Attendence</a></li>
          <li><a class="active" href="ManageAttendance.php">Manage Attendance</a></li>
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
		<input type="hidden" name="Emp_ID" class="txtField" value="<?php echo $row['Emp_ID']; ?>">
        <input type="text" name="Emp_ID" disabled value="<?php echo $row['Emp_ID']; ?>">
		
		<br>
        <br>
        Employee Name: <br>
		<input type="text" name="Name" class="txtField" value="<?php echo $row['Name']; ?>">
		<br>
        <br>
        Date: <br>
		<input type="date" name="Date" max="<?php echo date("Y-m-d"); ?>" class="txtField" value="<?php echo $row['Date']; ?>">
		<br>
        <br>

        <!-- <label for="Date">Date:</label>
		    <input type="date" id="Date" name="Date" max="<?php echo date("Y-m-d"); ?>" style="width:515px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required>
			<br> -->

		Status: <br>
        <br><?php
		if($row['Status']=='Present'){
		echo 	"<input type=\"radio\" id=\"Present\" name=\"Status\" value=\"Present\"  checked=\"checked\">
			<label for=\"Present\">Present</label>
	  		<input type=\"radio\" id=\"Absent\" name=\"Status\" value=\"Absent\">
			<label for=\"Absent\">Absent</label>" ;

		}	else {
			echo 	"<input type=\"radio\" id=\"Present\" name=\"Status\" value=\"Present\"  >
			<label for=\"Present\">Present</label>
	  		<input type=\"radio\" id=\"Absent\" name=\"Status\" value=\"Absent\" checked=\"checked\">
			<label for=\"Absent\">Absent</label>" ;

		}
		?>
        <br> <br> <br>
        <!-- <form action="/action_page.php">
        Status:   <br>
        <input type="radio" id="Present" name="Status" value="Present">
        <label for="Present">Present</label>
        <input type="radio" id="Absent" name="Status" value="Absent">
        <label for="Absent">Absent</label>
        <br>
        <br> -->
        Work Type:<br>
		<select id="Work_type" name="Work_type" >
            <option value="<?php echo $row['Work_type'];?>" default><?php echo $row['Work_type'];?></option>
            <option value="-">-</option>
            <option value="Full day work (8.00 a.m - 8.00 p.m work)</">Full day work (8.00 a.m - 8.00 p.m work)</option>
		      <option value="Short leave before coming to work (11.00 a.m - 8.00 p.m work)">Short leave before coming to work (11.00 a.m - 8.00 p.m work)</option>
		      <option value="Short leave after coming to work (8.00 a.m - 5.00 p.m work)">Short leave after coming to work (8.00 a.m - 5.00 p.m work)</option>
			  <option value="Half day leave before coming to work (2.00 p.m - 8.00 p.m work)">Half day leave before coming to work (2.00 p.m - 8.00 p.m work)</option>
			  <option value="Half day leave after coming to work (8.00 a.m - 2.00 p.m work)">Half day leave after coming to work (8.00 a.m - 2.00 p.m work)</option>
		</select>
		<br>
		<br>
        
		<input type="submit" name="submit" value="Submit" class="buttom">
		

	</form>
  	</div>
</div>
	
</body>
</html>