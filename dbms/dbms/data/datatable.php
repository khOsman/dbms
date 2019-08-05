
<?php
	
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$databaseName = "ugc_database";

	$connect = mysqli_connect($hostname,$username,$password,$databaseName);
	$query = "SHOW TABLES FROM `ugc_database`";

	$result = mysqli_query($connect,$query);

	$options = "";
	$opt ="";
	while($row = mysqli_fetch_array($result)){
		$options = $options. '<option>'.$row[0].'.php'.'</option>';
		$opt = $opt. '<option>'.$row[0].'</option>';
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
	
</style>
<script type="text/javascript">
    window.onload = function(){
        location.href=document.getElementById("selectbox").value.;
    }       
</script>
</head>
<body>
	<header>
		<h1 style="text-align: center;"><b>Table with database<b></h1>
	</header>
	<div>
		
		<select id="selectbox" name="" onchange="javascript:location.href = this.value;"> 
			<?php echo '<option value="/$opt">'.$options.'</option>'; ?>
		</select>

	</div>

</body>
</html>