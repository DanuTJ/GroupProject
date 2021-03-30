<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/empcss/Manage.css">

</head>
<body>

<?php include('../../public/includes/header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a href="MarkAttendance.php">Mark Attendance</a></li>
           <li><a class="active" href="ManageAttendance.php">Manage Attendance</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="ManageAttendance.php">
		  <center><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Date/ID/Name/Status" title="Type in a ID or Name">
		  	<!--<input type="submit" value="Search"></center>-->
		  	<br>
		  	<table id="myTable">
			  <tr>
                <th>Date</th>
			    <th>Employee ID</th>
                <th>Employee Name</th>
			    <th>Status</th>
				<th>Work Type</th>
			    
				<th>Edit</th>
				<th>Delete</th>
			  </tr>
		 	  	<?php
				   include_once('../../config/connection.php');
				   $sql="SELECT * from attendance";
				   $result=mysqli_query($conn,$sql);
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
                <td><?php echo $row["Date"]; ?></td>
			    <td><?php echo $row["Emp_ID"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
			    <td><?php echo $row["Status"]; ?></td>
				<td><?php echo $row["Work_type"]; ?></td>

			    
				<td><a href="update.php?id=<?php echo $row["Emp_ID"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="delete.php?id=<?php echo $row["Emp_ID"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red" onclick="myfunction()"></i></a></td>

			  </tr>
			  	<?php
					$i++;
					}
				?>
			</table>
			<?php
				
			?>
		</form>
  	</div>
</div>
<script src="../../public/js/employeeattendance.js">
</script>
<script>
function myfunction(){
	confirm("Are you sure want to delete...!");
}
</script>

</body>
</html>