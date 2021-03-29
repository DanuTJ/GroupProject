<!DOCTYPE html>
<html lang="en">
<head>
<title>Employee Details</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../../public/empcss/Add.css">

</head>
<body>
<?php include('../../public/includes/header.php') ?>

  	<br>
  	<div class="row" style="margin-top: -18px;">
	<div class ="navbar">
  		<ul>
		  <li><a  href="AddEmpDetails.php">Add Employee</a></li>
		  <li><a href="ManageEmployee.php">Manage Employee</a></li>
		   <li><a class="active" href="MarkAttendance.php">Mark Attendance</a></li>
		   <li><a href="ManageAttendance.php">Manage Attendance</a></li>
		  <li><a href="PrintDetails.php">Print Details</a></li>
		</ul>
		</div>
  	</div>
  	<br>
  	<div class="row form1">
  		<br>
  		<form action="insert.php" method="POST">
		  <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>

		  	<label for="Date" >Date:</label>
		    <input type="date" id="Date" name="Date" max="<?php echo date("Y-m-d"); ?>" style="width:665px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required>
			<br>

          	<label for="Eid">Employee ID:</label>
		    <!-- <input type="text" id="Eid" name="Emp_ID" placeholder="Employee ID.." required> -->
			<select name="Emp_ID" id="Eid" onchange="Showemployee()">
				<option value=""></option>
				<?php 
					$sql="SELECT * FROM emp";
					$result = ($conn->query($sql));
						echo "$sql";
					if($result){
						while($row=$result->fetch_assoc()){
							$Employee_ID=$row['Employee_ID'];
							echo "<option value=\"$Employee_ID\">$Employee_ID</option>";
						}
					}			
				?>
			
			
			</select>
			<br>
			<label for="Name">Employee Name:</label>
		    <input type="text" id="Name" name="Name" placeholder="Employee Name.." required>
			<br><br>
			
			<label for="Status" style="width:420px">Status:</label>
			  <input type="radio" id="present" name="Status" value="Present">
			  <label for="present">Present</label>
			  <input type="radio" id="absent" name="Status" value="Absent">
			  <label for="Absent">Absent</label>
			  <br>
			  <br>

		

			<label for="Work_type">Work Type:</label>
		      <select id="Work_type" name="Work_type">
			  <option value="-">-</option>
		      <option value="Full day work (8.00 a.m - 8.00 p.m work)</">Full day work (8.00 a.m - 8.00 p.m work)</option>
		      <option value="Short leave before coming to work (11.00 a.m - 8.00 p.m work)">Short leave before coming to work (11.00 a.m - 8.00 p.m work)</option>
		      <option value="Short leave after coming to work (8.00 a.m - 5.00 p.m work)">Short leave after coming to work (8.00 a.m - 5.00 p.m work)</option>
			  <option value="Half day leave before coming to work (2.00 p.m - 8.00 p.m work)">Half day leave before coming to work (2.00 p.m - 8.00 p.m work)</option>
			  <option value="Half day leave after coming to work (8.00 a.m - 2.00 p.m work)">Half day leave after coming to work (8.00 a.m - 2.00 p.m work)</option>
		    </select>
			<br>
			<br>
			<br>
			<br>
			<!-- <label for="Time">Time:</label>
		    <input type="time" id="Time" name="Time" style="width:515px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  				margin: 8px 0;" required> 
			<br>  -->
			
		  	
		    <input type="reset" value="Reset">
			<input type="submit" name="submit" value="Submit">
			

		 </form>
  	</div>
</div>


<script>
	function Showemployee(){
		var x = document.getElementById("Name").innerHTML = "";
		x.value='Sal';
	}

</script>

<!-- <script>
	function changefunction(str) {
  		var x;  
  	if (str == "") {
    document.getElementById("Name").innerHTML = "";
    return;
  }
  	x = new XMLRequest();
  	x.onreadystatechange = function() {
    if (this.readyState == 3 && this.status == 200) {
      document.getElementById("Name").innerHTML = this.responseText;
    }
  }
  	x.open("GET", "ManageEmployee.php?q="+str, true);
  	x.send();
}
</script> -->

</body>
</html>