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
       
        
        <?php
        
        $selector = $_GET["selector"];
        $validator = $_GET["validator"];

        if (empty($selector) || empty($validator)) {
            echo "Could not validate your request!";
        }else{
            if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                ?>

        <div class="login-content">
       
                

                <form action="newpassword.php" method="POST">
                <input type="hidden" name="selector" value="<?php echo $selector ?>">
                <input type="hidden" name="validator" value="<?php echo $validator ?>">
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="password" class="input" name="pwd" placeholder="Enter a new password">
                    </div>
                </div>

                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        
                        <input type="password" class="input" name="pwd-repeat" placeholder="Re-enter a new password">
                    </div>
                </div>
               <br>
               
                <input type = "submit" class= "btn" name="reset-password-submit" value="Reset Password">

                </form>

                <?php

            }
        }
        


        ?>
                
                
        </div>
    </div>
    <script type="text/javascript" src="../../public/js/main.js"></script>
</body>
</html>
