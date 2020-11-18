
<?php require_once('../connection.php'); ?>
  <?php require_once('../session.php'); ?>


<div class="sidenav">
	<div class="row">
  		<center><p style="font-size: 35px;"><b>IHealth</b></p>
		<hr></center>
  	</div>
  	<div class="row">
  		<center><p style="font-size: 20px;" ><a href="../Dashboard/dashboard.php"><b>Dashboard</b></a></p>
		<hr></center>
  	</div>
	<div class="row">
  		<center><a href="../Customer/AddCusDetails.php">Customer</a><hr>
		<a href="#">Stock</a><hr>
		<a href="../Item/AddItemDetails.php">Item</a><hr>
		<a href="../Supplier/AddSupDetails.php">Supplier</a><hr>
		<a href="../Supplier order/AddSupOrder.php">Supplier Order</a><hr>
		<a href="../CustomerOrder/AddCusOrder.php">Customer Order</a><hr>
		<a href="../Employee/AddEmpDetails.php">Employee</a><hr>
		<a href="../finance/AddUtility.php">Finance</a></center>
  	</div>
	
</div>

<div class="content">
  	<div class="row end">
  		<div class="row">
	  		<br>  
			   <?php 
					checkSession();
					if(isset($_SESSION['name'])){
                        	
							if("{$_SESSION['usertype']}" == 'a'){ ?>

								<a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  							<br>Edit Profile &nbsp;&nbsp;&nbsp;&nbsp; Sign Out
								<?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Admin)</p>";
				            }
                            elseif("{$_SESSION['usertype']}" == 's'){ ?>
								<a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  							<br>Edit Profile &nbsp;&nbsp;&nbsp;&nbsp; Sign Out
								<?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Stock Manager)</p>";
				            }
							elseif("{$_SESSION['usertype']}" == 'acc'){ ?>
								<a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  							<br>Edit Profile &nbsp;&nbsp;&nbsp;&nbsp; Sign Out
								  <?php
                                echo "<br><p class=\"logged-in-msg\">You are Logged in as " . $_SESSION['name']. " (Accountant)</p>";
				            }
                            
                        }
					else{
						echo "<li><a class=\"active\" href=\"login.php\">Login</a></li>";
						echo "<li><a href=\"register.php\">Register</a></li>";
						}
                ?>
	  		
  		</div>
  		<br>
  		<hr>
  	</div>


    