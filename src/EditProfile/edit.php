
<?php require_once('../../config/connection.php'); ?>
  <?php require_once('../../public/includes/session.php'); ?>
<?php 
if(isset($_POST['submit'])){
	
    // Assign input data from form to variables
    $userID= $_POST['userID'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);
	$cpass = sha1($_POST['cpass']);
    $contact = $_POST['contact'];
   

    if ($password != $cpass){
        $message = base64_encode(urlencode("Passwords do not match"));
        header('Location:EditProfile.php?msg=' . $message);
        exit();
    }   
    //Update to Database
    else {
        $updateQuery = "UPDATE users set name='" . $_POST['name'] . "',password='" . "123" . "',contact='" . $_POST['contact'] . "' WHERE userID='" . $_POST['userID'] . "')";
            
        if (mysqli_query($conn,$updateQuery) === TRUE) {
            $message = base64_encode(urlencode("Update Successful"));
			header('Location:EditProfile.php?msg=' . $message);
			exit();
        } 
            
        else {
                $message = base64_encode(urlencode("SQL Error while updating"));
				header('Location:EditProfile.php?msg=' . $message);
				exit();
        }
    }
        
	
}


mysqli_close($conn);
   

?>
