<?php

include('connection.php');
include('session.php');

if(isset($_POST)){
    //Assign data from login form to variables
	$email = $_POST['email'];
	$password = $_POST['password'];
    
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
            //echo $usertype;

            if($usertype == 'a' ){
                header( "Location:CustomerOrder/AddCusOrder.php" );
            }
           // elseif ($usertype == 'c'){
               // header( "Location:CustomerOrder/AddCusOrder.php" );
           // }
           // elseif ($usertype='v'){
            //    header( "Location:CustomerOrder/AddCusOrder.php" );
            //}
    }
    else{    
        echo mysqli_error($conn);    
        $message = base64_encode(urlencode("Invalid Email or Password"));
        header('Location:login.php?msg=' . $message);
        exit();
    }
    
}

mysqli_close($conn);
    
    
?>