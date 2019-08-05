<?php 
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "ugc_database";

$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}


	if(isset($_POST['submit']))
	{
		$universityID 	= $_POST['universityID'];
		$universityyearID = $_POST['universityyearID'];
		$admitted = $_POST['admitted'];
		$female = $_POST['female'];
		$totalSeats = $_POST['totalSeats'];
		
		echo $universityID." ".$universityyearID." ".$admitted." ".$female." ".$totalSeats;

		/*$sql = "INSERT  INTO admission_stats (Total_seats,Admitted,Female,University_Uni_ID,University_Year_idYear) VALUES ('".$totalSeats."', '".$admitted."', '".$female."','".$universityID."','".$universityyearID."')";*/
		$sql = "INSERT INTO admission_stats{Total_seats, Admitted, Female, University_Uni_ID, University_Year_idYear}";
		$sql.= "VALUES('".$totalSeats."', '".$admitted."', '".$female."','".$universityID."','".$universityyearID."')";
		
		$result = mysqli_query($conn, $sql);

	
		if($result){
			echo "Inserted";
		}else{
			echo "Not Inserted";
		}
	
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>	
<title> How to insert data in mysql using php</title>

<style>
	body{
		font-family:verdana;
	}
	.container{width:500px;margin: 0 auto;}
	h3{line-height:20px;font-size:20px;}
	input{display:block;width:350px;height:20px;margin:10px 0;}
	textarea{display:block;width:350px;margin:10px 0;}
	button{background:green; border:1px solid green;width:70px;height:30px;color:#ffffff}
</style>


</head>	
<body>
<div class="container">
	<header>
		<h1>Add Data into Admission Stat Table</h1>
	</header>
	
	
	<form action="" method="POST">
		<label>University ID</label>
		<input type="text" name="universityID" placeholder="University ID" required>
		<label>University Year ID</label>
		<input type="text" name="universityyearID" placeholder="University Year ID" required>
		<label>Admitted</label>
		<input type="text" name="admitted" placeholder="Admitted Students" required>
		<label>Female</label>
		<input type="text" name="female" placeholder="Female Students" required>
		<label>Total Students</label>
		<input type="text" name="totalSeats" placeholder="Total Seats" required>
		<button type="submit" name="submit">Submit</button>
	</form>

	
</div>	
</body>
</html>
