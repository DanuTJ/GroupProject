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
            <form method="post" action="edit.php" name="signup-form">
                <img src="../../public/img/user.png">
                <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
                <h4 class="title">EDIT PROFILE</h4>
				
			
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Full name</h5>
                        <input type="text" name="name" class="input">
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" name="email" class="input">
                    </div>
                </div>
          
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>

                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Confirm Password</h5>
                        <input type="password"  name="cpass" class="input">
                    </div>

                </div>
                </br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="div">
                        <h5>Telephone</h5>
                        <input type="text" name="contact" class="input">
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
