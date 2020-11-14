<?php
 
include('connection.php');
session_start();
 
if (isset($_POST['submit'])) {
 
  $type = $_POST['type'];
	 $fname = $_POST['fname'];
	 $address = $_POST['address'];
	 $nic = $_POST['nic'];
	 $telephone = $_POST['telephone'];
	 $email = $_POST['email'];
	 $pass = $_POST['pass'];
	 $password_hash = password_hash($pass, PASSWORD_BCRYPT);
     $cpass = $_POST['cpass'];
	 $password_verify = password_verify($cpass, PASSWORD_BCRYPT);
	
 
  
    
 
   
       $sql= "INSERT INTO register (type,fname,address,nic,telephone,email,pass,cpass)
	 VALUES ('$type','$fname','$address','$nic','$telephone','$email','$password_hash','$password_verify')";
       
  if (mysqli_query($conn, $sql)) {
		echo "You have registered successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>