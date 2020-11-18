<?php

include('../connection.php');

if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$cpass = sha1($_POST['cpass']);
    $userType = $_POST['userType'];
    $contact = $_POST['contact'];
   

    if ($password != $cpass){
        $message = base64_encode(urlencode("Passwords do not match"));
        header('Location:registration.php?msg=' . $message);
        exit();
		}
	else{
        //Check if email already exists
        $selectmail= "SELECT * FROM users WHERE email ='$email' " ;
        $allmailquery = mysqli_query($conn, $selectmail ) ;  
        $num = mysqli_num_rows($allmailquery);
    
        if($num > 0){
        $message = base64_encode(urlencode("Email already exists"));
        header('Location:registration.php?msg=' . $message);
        exit();
        }
        
        //Insert to Database
        else {
            $registrationQuery = "INSERT INTO users (name, email, password, usertype, contact) VALUES ('$name', '$email', '$password', '$userType', '$contact')";
            
            if (mysqli_query($conn,$registrationQuery) === TRUE) {
                $message = base64_encode(urlencode("Registration Successful"));
				header('Location:registration.php?msg=' . $message);
				exit();
            } 
            
            else {
                $message = base64_encode(urlencode("SQL Error while Registering"));
				header('Location:registration.php?msg=' . $message);
				exit();
            }
        }
        
	}
}



mysqli_close($conn);
   


?>