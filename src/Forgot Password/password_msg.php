<?php include('../config/connection.php') ?>
<?php include('../public/includes/session.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Password Message</title>
	<link rel="stylesheet" type="text/css" href="../public/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <img class="back" src="../public/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="../public/img/ihealth.png" width="10" height="500">
        </div>
        <div class="login-content">
        <form action="../../src/Forgot Password/forgotpassword.php" method="post">
                
                <h3 class="error-msg"><?php include('../public/includes/messege.php'); ?></h3>
                <h2 class="title">Reset Password</h2><br>
                <p>
                An email has been sent to your email address with a link to reset your password.
                
                </p>
                
                
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
