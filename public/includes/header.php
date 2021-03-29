
<?php require_once('../../config/connection.php'); ?>
  <?php require_once('session.php'); ?>


<div class="sidenav">
	<div class="row">
  		<center><p style="font-size: 35px;"><b>IHealth</b></p>
		<hr></center>
	  </div>
	  <?php
	  checkSession();
					if(isset($_SESSION['name'])){
                        	
							if("{$_SESSION['usertype']}" == 'a'){ ?>
  								<div class="row">				
	  		
  									<center><p style="font-size: 20px;" ><a href="../Dashboard/dashboard.php"><b>Dashboard</b></a></p>
									<hr></center>
  								</div>
					<div class="row">
  					<center><a href="../Customer/AddCusDetails.php">Customer</a><hr>
					<a href="../Stock/AddStockDetails.php">Stock</a><hr>
					<a href="../Item/AddItemDetails.php">Item</a><hr>
					<a href="../Supplier/AddSupDetails.php">Supplier</a><hr>
					<a href="../Supplier order/AddSupOrder.php">Supplier Order</a><hr>
					<a href="../CustomerOrder/AddCusOrder.php">Customer Order</a><hr>
					<a href="../Employee/AddEmpDetails.php">Employee</a><hr>
					<a href="../finance/AddUtility.php">Finance</a></center>
  		</div>
	

							<?php } 
							elseif("{$_SESSION['usertype']}" == 's'){ ?>
							<div class="row">				
	  		
			 				 <center><p style="font-size: 20px;" ><a href="../StockManager/dashboard.php"><b>Dashboard</b></a></p>
							 <hr></center>
							  </div>
							  <div class="row">
							  <center> <a href="../Stock/AddStockDetails.php">Stock</a><hr>
							  <a href="../Supplier order/AddSupOrder.php">Supplier Order</a><hr>
							  <a href="../Item/AddItemDetails.php">Item</a><hr></center>
							 
							</div>
							<?php }

							elseif("{$_SESSION['usertype']}" == 'c'){ ?>
							<div class="row">	
							<center>  <center><p style="font-size: 20px;" ><a href="../Accountant/dashboard.php"><b>Dashboard</b></a></p>
								<a href="../finance/AddUtility.php">Finance</a></center>
							</div>
							<?php }
						} ?>
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
							elseif("{$_SESSION['usertype']}" == 'c'){ ?>
								<a href="../EditProfile/EditProfile.php"><i class="fa fa-address-book" style="font-size:35px;color:blue"></i></a>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  							<a href="../logout.php"><i class="fa fa-sign-out" style="font-size:35px;color:red"></i></a> 
	  							<br>Edit Profile &nbsp;&nbsp;&nbsp;&nbsp; Sign Out
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
  		<br>
  		<hr>
  	</div>


    