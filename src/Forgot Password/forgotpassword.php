<?php include('../../config/connection.php') ?>
<?php include('../../public/includes/session.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/style.css">
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
        <form action="../../src/Forgot Password/resetpassword.php" method="post">
                
                <h3 class="error-msg"><?php include('../../public/includes/messege.php'); ?></h3>
                <h2 class="title">Reset Password</h2><br>
                <p>
                Enter your login email to reset the password
                </p>
                <br><br>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" class="input" name="email">
                    </div>
                </div>
                <br>

                <input type="submit" class="btn" name="reset_pw" value="Reset Password">
                
                
            </form>
            <?php
            if (isset($_GET["reset"])) {
                if ($_GET["reset"] == "success"){
                    echo '<p>Check your email!</p>';
                }          
              }
              ?>
        </div>
    </div>
    <script type="text/javascript" src="../../public/js/main.js"></script>
</body>
</html>
