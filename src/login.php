<?php include('../config/connection.php') ?>
<?php include('../public/includes/session.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>iHealth Login Form</title>
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
        <form action="login-submit.php" method="post">
                <img src="../public/img/user.png">
                <h3 class="error-msg"><?php include('../public/includes/messege.php'); ?></h3>
                <h2 class="title">Login</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" class="input" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>

                <input type="submit" class="btn" value="Sign in">
                <a href="#"><center>Don't have an account? Contact an Admin</center></a>
                
            </form>
        </div>
    </div>
    <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
