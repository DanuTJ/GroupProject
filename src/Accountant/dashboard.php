
<?php require_once('../../config/connection.php'); ?>
  <?php require_once('../../public/includes/session.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../public/css/dashboard.css" />
  <STYLE>A {text-decoration: none;} </STYLE>
</head>

<body>
  <!--Header Background -->
  

  <div class="container">
    
    <!-- Header -->
    <header>
      <div class="first-header">
  </br>
        <h2 class="welcome">Welcome to iHealth Dashboard>></h2>
      </div>
  </br>
      <div>
        <div>
          <div>
            <div>
              <div>
              </div>
</div>
</div>

      <?php 
					checkSession();
					if(isset($_SESSION['name'])){
                        	
							if("{$_SESSION['usertype']}" == 'a'){ ?>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Edit Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sign Out
              
                <?php
                  
                                echo "<br> 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <p align ='right' class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Admin)</p>";
				            }
                            elseif("{$_SESSION['usertype']}" == 's'){ ?>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Edit Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sign Out
              
								<?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Stock Manager)</p>";
				            }
							elseif("{$_SESSION['usertype']}" == 'c'){ ?>
							 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
                  <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  Edit Profile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sign Out
              
								  <?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Accountant)</p>";
				            }
                            
                        }
					else{
            $message = base64_encode(urlencode("Please Login"));
						header('Location:../login.php?msg=' . $message);
						}
                ?>
      </div>
          </br>
      
      <div class="toggle-button">
     
        <label for="toggle">Dark Mode</label>
        <label class="button-switch"><input id="toggle" type="checkbox" checked />
          <span id="slider" class="slider round "></span>
        </label>
      </div>
    </header>

    <div class="heading-container"></div>

    <!-- Cards -->
    <section class="dash">

      <div class="column">
      <a href="registration.php">
        <div class="row">
          <div class="counter-card add">
          
            <div class="arrow-div"><img src="../../public/img/add.png" alt="add-icon">
              <p class="tags">iHealth</p>
            </div>
            <h2>Add Users</h2>
          </div>
        </div>
          </a>
         
          <a href="EditUsers.php">
        <div class="row">
          <div class="counter-card add">
            <div class="arrow-div"><img src="../../public/img/edit.png" alt="edit-icon">
              <p class="tags">iHealth</p>
            </div>
            <h2>Edit Users</h2>
          </div>
        </div>
        </a>
      </div>
        
          
      <div class="column">
      <a href="ViewAccountantUsers.php">
        <div class="row">
           
            <div class="counter-card add">
              <div class="arrow-div"><img src="../../public/img/view.png" alt="view-icon">
                <p class="tags">iHealth</p>
              </div>
              <h2>View Users</h2>
            </div>

          </div>
          </a>
        
          

        <a href="../finance/AddUtility.php">
        <div class="row">
            <div class="counter-card add">
              <div class="arrow-div"><img src="../../public/img/func.png" alt="func-icon">
                <p class="tags">iHealth</p>
              </div>
              <h2>Functions</h2>
            </div>
          </div>
          </div>
          </a>
          </div>
  

    </section>

  </div>

  <script src="../Dashboard/dashboard.js"></script>
</body>

</html>