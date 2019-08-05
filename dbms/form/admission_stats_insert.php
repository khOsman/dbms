<?php 
$host = "localhost";
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
	
	$sql = "INSERT INTO admission_stats VALUES ('".$totalSeats."', '".$admitted."', '".$female."','".$universityID."','".$universityyearID."')";
	
	$result = mysqli_query($conn, $sql);
	
	if($result)
	{
		echo "Post has been saved successfully";
	}
	else
	{
		echo "Unable to save post";
	}
	
}
?>