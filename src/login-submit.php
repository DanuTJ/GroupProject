<?php

include('../config/connection.php');
include('../public/includes/session.php');
include('logger.php');

if(isset($_POST)){
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
    
    //Select User from database
    $userQuery = "SELECT * FROM users WHERE email ='$email' and password='$password'";
    $userResult= mysqli_query($conn, $userQuery);
    //print_r($userResult);

    var_dump($userResult);
    
    //User Exists
    if (mysqli_num_rows($userResult) == 1) {
            $userRow = mysqli_fetch_array($userResult);
            //print_r($userRow);
            
            //Creating Session
            checkSession();  
            $_SESSION["name"] = $userRow['name'];
            $_SESSION["userID"] = $userRow['userID'];
            $_SESSION["usertype"] = $userRow['usertype'];
        
            $usertype= $userRow['usertype'];
            

            if($usertype == 'a' ){
                echo "<script type='text/javascript'>";
                echo "alert('Successful login');";
                echo "</script>";
                header( "Location:Dashboard/dashboard.php" );
                logger("Successful login by Admin| email - ".$_POST['email']. " | Password - ".$_POST['password']);  
            }
            elseif ($usertype == 's'){
               header( "Location:StockManager/dashboard.php" );
               logger("Successful login by Stock Manager | email - ".$_POST['email']. " | Password - ".$_POST['password']);  
            }
            elseif ($usertype == 'c'){
              header( "Location:Accountant/dashboard.php" );
              logger("Successful login by Accountant | email - ".$_POST['email']. " | Password - ".$_POST['password']);  
            }
    }
    else{  
        logger("Unsuccessful login attempt | email - ".$_POST['email']. " | Password - ".$_POST['password']);  
        echo mysqli_error($conn);    
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($conn);
    
    //if user clicks on forgot password button
    if(isset($_POST['forgotpassword'])){
        $email = $_POST['email'];
        
        $sql="SELECT * FROM users WHERE email='$email' LIMIT 1";
        $result=mysqli_query($conn,$sql);
        $user=mysqli_fetch_assoc($result);
        $token = $user['token'];
        sendPasswordResetLink($email, $token);
        header('Location: Forgot Password/password_msg.php');
        exit(0);

    }
?>