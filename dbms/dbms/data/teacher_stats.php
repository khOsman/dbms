<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
padding: 2px;
background-color: #588c7e;
color: white;
border: solid 2px black;
}

td{

	padding: 2px;
	border: solid 2px black;

}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>

 <header>
		<h1 style="text-align: center;">
			<b>
				Teacher Stats Table
			<b>
		</h1>
	</header>

<table>
<tr>
<th>University Id</th>
<th>PhD Faculty Members </th>
<th>Professors </th>
<th>Associate Professors </th>
<th>Assistant Professors </th>
<th>Lecturers </th>
<th>Adjunct Faculty Members </th>
<th>Female Faculty Members </th>
<th>Total Faculty Members </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ugc_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =  "select * from teacher_stats inner join university on teacher_stats.University_Uni_ID = university.Uni_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Uni_name"]. "</td><td>" . $row["PhD_teachers"]. "</td><td>" . $row["Professors"] . "</td><td>"
. $row["Associate_professor"]. "</td><td>". $row["Assistant_professor"]. "</td><td>". $row["Lecturer"]. "</td><td>". $row["Adjunct_teachers"]. "</td><td>". $row["Female_teachers"]. "</td><td>". $row["Total_teachers"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>