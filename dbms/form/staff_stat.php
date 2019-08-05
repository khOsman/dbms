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
				Staff Stats Table
			<b>
		</h1>
	</header>

<table>
<tr>
<th>University Id</th>
<th>University Year Id </th>
<th>Officers</th>
<th>Staff</th>
<th>Ratio Teacher and Student</th>
<th>Ratio Stuff Student</th>

</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ugc_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =  "select * from staff_stat inner join university on staff_stat.University_Uni_ID = university.Uni_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Uni_name"]. "</td><td>" . $row["University_Year_idYear"]. "</td><td>" . $row["Officers"] . "</td><td>"
. $row["Staff"]. "</td><td>". $row["Ratio_teacher_student"]. "</td><td>". $row["Ratio_stuff_student"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>