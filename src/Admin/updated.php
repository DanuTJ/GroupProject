<?php include('../../config/connection.php') ?>
<?php include('../../public/includes/session.php') ?>

<?php

        if(count($_POST)>0) {
	    checkSession();
	    if(isset($_SESSION['name'])){
		$_POST['userID'] = $_SESSION['userID'];
mysqli_query($conn,"UPDATE users set userId='" . $_POST['userId'] . "',name='" . $_POST['name'] . "', email='" . $_POST['email'] . "', password='" . $_POST['password'] . "',usertype='" . $_POST['usertype'] . "', contact='" . $_POST['contact'] . "' WHERE userId='" . $_POST['userId'] . "'");
$message = "Record Modified Successfully";
// header('location:EditUsers.php');
}
}
$result = mysqli_query($conn,"SELECT * FROM users WHERE userID='" . $_GET['userID'] . "'");
$row= mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
    
<head>
    <title>Admin </title>
    <link rel="stylesheet" type="text/css" href="../../public/css/editAdminstyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    
<body>
    
    
<?php include('header.php') ?> 
    <hr>
    <div class="row-50"> 
        <h1 class="div-c">View Users</h1>
    </div>
   
    <div class="row form1">
  		<br>
  		<form name="frmUser" method="post" action="">
		<div><?php if(isset($message)) { echo $message; } ?>
		</div>
		<div style="padding-bottom:5px;">
		</div>
		ID: <br>
		<input type="hidden" name="id" class="txtField" value="<?php echo $row['userID']; ?>" >
		<input type="text" style="width:635px" name="id" disabled value="<?php echo $row['userID']; ?>">
		<br>
		Name : <br>
		<input type="text" style="width:635px" name="name" pattern="[a-zA-Z ]+|[a-zA-Z ]+\\s{1}[a-zA-Z ]{1,}|[a-zA-Z ]+\\s{1}[a-zA-Z ]{3,}\\s{1}[a-zA-Z ]{1,}" class="txtField" value="<?php echo $row['name']; ?>">
		<br>
        Email:<br>
		<input type="email" name="email" class="txtField" style="width:635px;height:45px;border:3px solid #ccc;border-radius: 4px; padding: 12px 20px;
  margin: 8px 0;"value="<?php echo $row['email']; ?>">
        <br>
		User Type:<br>
		<select id="type" style="width:635px" name="type">
			<option value="<?php echo $row['usertype']; ?>">Admin</option>
			<option value="<?php echo $row['usertype']; ?>">Accountant</option>
			<option value="<?php echo $row['usertype']; ?>">Stock Manager</option>
		</select>
		<br>
		Telephone Number:<br>
		<input type="text" name="contact" class="txtField" pattern="[0-9]{10}" style="width:635px" value="<?php echo $row['contact']; ?>">
		<br>
		
		<br>
		<br>
		<input type="submit" name="submit" value="Submit" class="buttom">

	</form>
  	</div>
    ?>
    
    
</body>
    
</html>