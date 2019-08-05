
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
	}
?>


<!DOCTYPE html>
<html>
<head>
<title>Add Data</title>
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
		<h1 style="text-align: center;"><b>Add Data database<b></h1>
	</header>
	<div>
		
		<select id="selectbox" name="" onchange="javascript:location.href = this.value;"> 
			<?php echo '<option value="/$options">'.$options.'</option>'; ?>
		</select>

	</div>

</body>
</html>