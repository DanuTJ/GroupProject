
<!DOCTYPE html>
<html>
<head>
    <title>iHealth Registration Form</title>
	<link rel="stylesheet" href="css.css">
	 <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 
	 
</head>	
<body>	

    <img class="back" src="img/wave.png">
    <div class="container">
        <div class="img">
		    
			
            <img src="img/ihealth.png" width="10" height="500">
        </div>
    <form method="post" action="register.php" name="signup-form">
	<img src="img/user.png" style="width:80px;height:50px;" class="center">
	<h1 class="h1">REGISTER</h1>
	<div class="form-element">
	<label for="type">User Type:</label>
	<select id="type" name="type">
    <option value="Manager">Manager</option>
    <option value="Stock Manager">Stock Manager</option>
     <option value="Accountant">Accountant</option>
     </select>
	
	
    <div class="form-element">
	
	<label>Full name:</label>
        <input type="text" name="fname"  required />
    </div>
	
	<div class="form-element">
	 <label>Address:</label>
     <input type="text"  name="address" required />
    </div>
	
	
	
	 <div class="form-element">
	 <label>NIC:</label>
	<input type="text" name="nic" required />
	</div>
	
	 <div class="form-element">
	 <label>Telephone:</label>
     <input type="text" name="telephone" required />
	 </div>
	 
	 
	 <div class="form-element">
        <label>Email:</label>
        <input type="email" name="email" required />
    </div>
	 
    <div class="form-element">
        <label>Password:</label>
        <input type="password" id="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
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
	
    <button type="submit" name="submit" value="submit">Submit</button>
	<button type="reset" name="reset" value="reset">Reset</button>
</form>
</div>
</div>

</body>
</html>