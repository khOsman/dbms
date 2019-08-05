<?php include("include/header.php"); ?>
  
	
	
		<section class= "header-section">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 logo">
						<b>DBMS</b>
					</div>
					<div class="col-sm-8 account-info list">
						<ul>
							<li>Logged in as:</li>
							<li class="user-name">name</li>
							<li class="user-id">id</li>
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
							<li><button><a href="home.php">HOME</a></button></li>	
							<li><button><a href="data.php">DATA</a></button></li>
							<li><button><a href="graph.php">GRAPH</a></button></li>	
							<li><button><a href="faq.php">FAQ</a></button></li>
						</ul>
					</div>
				</div>	
			</div>
		</section>
		
		<section class= "body-section">
			<div class="container">
				<div class="form login">
					<div class="">	
					</div>
					<h2></h2>
					<div class="create-account">
						<form class="sign-up">
							<br>
							<p>Select graph type:</p>
							
								<button><a href="./graph/bargraph.php">BAR GRAPHS</a></button>
								<p></p>
								<button><a href="./graph/piegraph.php">PIE CHARTS</a></button>
								<p></p>
								<button>LINE GRAPHS</button>
							
							<br><br>
							
						</form>

					</div>
					<div class="">
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