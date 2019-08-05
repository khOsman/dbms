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
				University Stats Table
			<b>
		</h1>
	</header>

<table>
<tr >
<th>University Id </th>
<th>University Name </th>
<th>Established </th>
<th>City </th>
<th>Phone </th>
<th>Land </th>
<th>Dormitories </th>
<th>No_of_Schools </th>
<th>Department </th>
<th>Course - Program </th>
<th>Institue </th>
<th>Year ID </th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ugc_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM university";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Uni_ID"]. "</td><td>" . $row["Uni_name"]. "</td><td>" . $row["Estd_Year"]. "</td><td>" . $row["City"]. "</td><td>" . $row["Phone"] . "</td><td>"
. $row["Land"]. "</td><td>". $row["Dormitories"]. "</td><td>". $row["No_of_Schools"]. "</td><td>". $row["Department"]. "</td><td>". $row["Course_Program"]. "</td><td>". $row["Institutes"]. "</td><td>". $row["Year_idYear"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>