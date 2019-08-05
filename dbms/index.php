<?php include("include/header.php"); ?>
  
	
	
		<section class= "header-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 logo">
						<b>DBMS</b>
					</div>
					<div class="col-sm-8 account-info list">
						<ul>
						</ul>
					</div>
				</div>
			</div>
		</section>
		
		<section class="nav-bar">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
					</div>
					<div class="col-sm-6 nav-bar-list list">
						<ul>
						</ul>
					</div>
				</div>	
			</div>
		</section>
		
		<section class= "body-section">
			<div class="container">
				<div class="form login">
					<div class="border">	
					</div>
					<h2>Login</h2>
					<div class="already"><i>Don't have an account?<a>Contact Office.</a></i></div>
					<div class="create-account">
						<form class="sign-up" action="DBMS/signup.php" method="POST">
							YOUR NAME<br>
							<input type="text" name="name" placeholder="Full Name"><br>
							YOUR Employee ID<br>
							<input type="text" name="employee_id" placeholder="Office ID"><br>
							YOUR PASSWORD<br>
							<input type="password" name="password" placeholder="Password"><br><br>
							<button><a href="home.php">Sign in</a></button><br><br>
						</form>

					</div>
					<div class="border">
					</div>
				</div>
			</div>
		</section>
		
		<section class= "footer-section">
			<div class="container">
				<div>
				<h4>COPYRIGHT URKIS GROUP 2018</h4>
				</div>
			</div>
		</section>






		
		
		
<?php include("include/footer.php"); ?>