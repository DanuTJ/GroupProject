<?php
include_once '../../config/connection.php';
include_once '../../public/includes/session.php';
if(count($_POST)>0) {
	checkSession();
	if(isset($_SESSION['userID'])){
        $userID = $_SESSION["userID"];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = sha1($_POST['password']);
        $cpass = sha1($_POST['cpass']);
        $contact = $_POST['contact'];

        if ($password != $cpass){
            $message = base64_encode(urlencode("Passwords do not match"));
            header('Location:EditProfile.php?msg=' . $message);
            exit();
        }else{
            mysqli_query($conn,"UPDATE users set email='" . $_POST['email'] . "', name='" . $_POST['name'] . "', password='" . sha1($_POST['password']) . "',contact='" . $_POST['contact'] . "' WHERE email='" . $_POST['email'] . "'");
            $message = "Record Modified Successfully";
        }
    }
}
checkSession();
$result = mysqli_query($conn,"SELECT * FROM users WHERE userID ='" . $_SESSION['userID'] . "'");
$row= mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User Profile</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/editProfilestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <img class="back" src="../../public/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="../../public/img/ihealth.png" width="10" height="500">
        </div>
        
        <div class="login-content">
            <form method="post" action="" name="signup-form">
            <div><?php if(isset($message)) { echo $message; } ?></div>
                <img src="../../public/img/user.png">
                <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
                <h4 class="title">EDIT PROFILE</h4>
				
			
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Id</h5>
                        <input type="hidden" name="userID" class="input" value="<?php echo $row['userID']; ?>">
                        <input type="text" name="userID" disabled value="<?php echo $row['userID']; ?>">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Full name</h5>
                        <input type="text" name="name" class="input"  value="<?php echo $row['name']; ?>">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="email" name="email" class="input" value="<?php echo $row['email']; ?>">
                    </div>
                </div>
          
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input"  ?>">
                    </div>

                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password"  name="cpass" class="input"  ?>">
                    </div>

                </div>

            

                </br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <h5>Telephone</h5>
                        <input type="text" name="contact" class="input" value="<?php echo $row['contact']; ?>">
                    </div>

                </div>

                <input type="submit" name="submit" class="btn" value="SUBMIT">

                <input type="reset" name="reset" class="btn" value="RESET">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../../public/js/editProfile.js"></script>
</body>
</html>
