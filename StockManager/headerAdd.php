
<div class="navigation">
        <div class="row-100 bg-grey">
                <ul class="left-nav">
                      <li><a class="home-active" href="dashboard.php">Dashboard</a></li>
                      <li><a class="products-active" href=".registration.php">Add Users</a></li>
                      <li><a class="facilities-active" href="ViewStockManagerUsers.php">View Users</a></li>                      
                      <li><a class="help-active" href="EditUsers.php">Edit Users</a></li>
                </ul>
                
                <div class="right-nav">
                <?php 
                require_once('../connection.php'); 
                require_once('../session.php'); 


              
					checkSession();
					if(isset($_SESSION['name'])){
                        	
							if("{$_SESSION['usertype']}" == 'a'){ ?>

								<a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  							<br> <a>Edit Profile </a> &nbsp;&nbsp;&nbsp;&nbsp;<a> Sign Out </a>
								<?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Admin)</p>";
				            }
                            elseif("{$_SESSION['usertype']}" == 's'){ ?>
								&nbsp;&nbsp;<a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  							<br> <a>Edit Profile </a> &nbsp;&nbsp;&nbsp;&nbsp; <a> Sign Out </a>
								<?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Stock Manager)</p>";
				            }
							elseif("{$_SESSION['usertype']}" == 'acc'){ ?>
								<a href=""><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
								  <br> <a>Edit Profile </a> &nbsp;&nbsp;&nbsp;&nbsp; <a> Sign Out </a>
								  <br>
								  <?php
                                echo "<br> <br> <p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Accountant)</p>";
				            }
                            
                        }
					else{
						echo "<li><a class=\"active\" href=\"login.php\">Login</a></li>";
						echo "<li><a href=\"register.php\">Register</a></li>";
						}
                ?>
         
	  		
                
                    </div>
                
                
            
                
        </div>
                    </div>