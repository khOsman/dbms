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
				Subject wise Stats Table
			<b>
		</h1>
	</header>

<table>
<tr>
<th>University Id</th>
<th>University Year Id </th>
<th>Art & Humanities/th>
<th>Sociology</th>
<th>Science </th>
<th>Business Administration </th>
<th>Law</th>
<th>Pharmacy</th>
<th>Agriculture</th>
<th>Engineering & Architecture</th>
<th>Economics</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ugc_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =  "select * from subjectwise_stat inner join university on subjectwise_stat.University_Uni_ID = university.Uni_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Uni_name"]. "</td><td>" . $row["University_Year_idYear"]. "</td><td>" . $row["Arts_Humanities"]. "</td><td>" . $row["Sociology"]. "</td><td>" . $row["Science"] . "</td><td>"
. $row["Business_administration"]. "</td><td>". $row["Law"]. "</td><td>". $row["Pharmacy"]. "</td><td>". $row["Agriculture"]. "</td><td>". $row["Engineering_Architecture"]. "</td><td>". $row["Economics"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>