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
				Degree wise Stats Table
			<b>
		</h1>
	</header>

<table>
<tr>
<th>University Id</th>
<th>University Year Id </th>
<th>Expense Education</th>
<th>Expense Research</th>
<th>Expense Salary </th>
<th>Expense Scholarship </th>
<th>Expense Transport</th>
<th>Expense Electricity</th>
<th>Expense Infrustructure Maintainence</th>
<th>Expense Medical</th>
<th>Expense MISC</th>
<th>Total Expense</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ugc_database");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql =  "select * from expense inner join university on expense.University_Uni_ID = university.Uni_ID";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
//output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Uni_name"]. "</td><td>" . $row["University_Year_idYear"]. "</td><td>" . $row["Expense(educations)"]. "</td><td>" . $row["Expense(research)"]. "</td><td>" . $row["Expense(salary)"] . "</td><td>"
. $row["Expense(scholarship)"]. "</td><td>". $row["Expense(transport)"]. "</td><td>". $row["Expense(electricity)"]. "</td><td>". $row["Expense(Infrustructuremaintainence)"]. "</td><td>". $row["Expense(Medical)"]. "</td><td>". $row["Expense(misc)"]. "</td><td>". $row["Total_expense"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>