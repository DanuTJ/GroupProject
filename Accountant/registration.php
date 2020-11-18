
<!DOCTYPE html>
<html>
<head>
    <title>iHealth Registration Form</title>
	<link rel="stylesheet" href="css.css">
	 <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 
	 
	 
</head>	
<body>	
<?php include('headerAdd.php') ?> 
    <img class="back" src="../Registration/img/wave.png">
    <div class="container">
        <div class="img">
		    
			
            <img src="../Registration/img/ihealth.png" width="10" height="500">
        </div>
    <form method="post" action="register.php" name="signup-form">
	<img src="../Registration/img/user.png" style="width:80px;height:50px;" class="center">
	<h1 class="h1">REGISTER</h1>
	<div class="form-element">
	
	
    <div class="form-element">
	
	<label>Full name:</label>
        <input type="text" name="name"  required />
    </div>
	 
	 
	 <div class="form-element">
        <label>Email:</label>
        <input type="email" name="email" required />
    </div>
	 
    <div class="form-element">
        <label>Password:</label>
        <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
    </div>
	 
	 <div class="form-element">
	 <label>Confirm Password:</label>
	<input type="password" id="confirm_password" name="cpass" required/>
	</div>
	
	
	<script> var password = document.getElementById("password"), confirm_password = document.getElementById("confirm_password");

    function validatePassword(){
        if(password.value != confirm_password.value) {
         confirm_password.setCustomValidity("Passwords Don't Match");
         } else {
         confirm_password.setCustomValidity('');
         }
    }

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>



<label for="type">User Type:</label>
	<select id="userType" name="userType">
    
    <option value="c">Accountant</option>
     
     </select>

<div class="form-element">
	 <label>Telephone:</label>
     <input type="text" name="contact" required />
	 </div>
	
    <button type="submit" name="submit" value="submit">Submit</button>
	<button type="reset" name="reset" value="reset">Reset</button>
</form>
</div>
</div>

</body>
</html>