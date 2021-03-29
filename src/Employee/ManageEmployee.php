<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/css/Manage.css">

</head>
<body>

<?php include('../../public/includes/header.php')?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class="navbar">
  		<ul>
		  <li><a href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a class="active" href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a href="MarkAttendance.php">Mark Attendance</a></li>
		    <li><a href="MarkLeave.php">Mark Leave</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="ManageEmployee.php">
		    <center><input type="text" name="search" placeholder="Search..">
		  	<input type="submit" value="Search"></center>
		  	<br>
		  	<table>
			  <tr>
			    <th>Employee ID</th>
			    <th>Name</th>
			    <th>NIC</th>
				<th>Address</th>
			    <th>Gender</th>
			    <th>Telephone No</th>
			    <th>Email</th>
				<th>Admin ID</th>
			  
				<th>Edit</th>
				<th>Delete</th>
			  </tr>
		 	  	<?php
				   include_once '../../config/connection.php';
				   include_once '../../public/includes/session.php';
				   $sql="SELECT * from emp";
				   $result=mysqli_query($conn,$sql);
					$i=0;
					while($row = mysqli_fetch_array($result)) {
				?>
			  <tr>
			    <td><?php echo $row["Employee_ID"]; ?></td>
			    <td><?php echo $row["Employee_Name"]; ?></td>
			    <td><?php echo $row["NIC"]; ?></td>
				<td><?php echo $row["Address"]; ?></td>
			    <td><?php echo $row["Gender"]; ?></td>
				<td><?php echo $row["Telephone_No"]; ?></td>
			    <td><?php echo $row["Email"]; ?></td>
				<td><?php echo $row["adminid"]; ?></td>
			
			    
				<td><a href="updated.php?id=<?php echo $row["Employee_ID"]; ?>"><i class="fa fa-pencil" style="font-size:25px;color:blue"></i></a></td>
				<td><a href="deleted.php?id=<?php echo $row["Employee_ID"]; ?>"><i class="fa fa-trash" style="font-size:25px;color:red"></i></a></td>

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

</body>
</html>