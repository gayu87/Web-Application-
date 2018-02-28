<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 2

echo "<br> Faculty <br> <br>";

$sql = "SELECT * FROM Faculty;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Faculty</title>
</head>


<body>
<table Width="1400" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SSN INT</th>
<th> Name char (20)</th>
<th>Address char (50) </th>
<th>Sex char (1) (INT) </th>
<th> bDate char(10)</th>
<th> Salary INT</th>
<th> Foffice char(20)</th>
<th> Rank char(10)</th>
<th> Fphone INT</th>

<tr>



<?php
while($Faculty = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Faculty['SSN']."</td>";
echo"<td>".$Faculty['Name']."</td>";
echo"<td>".$Faculty['Address']."</td>";
echo"<td>".$Faculty['Sex']."</td>";
echo"<td>".$Faculty['bDate']."</td>";
echo"<td>".$Faculty['Salary']."</td>";
echo"<td>".$Faculty['Foffice']."</td>";
echo"<td>".$Faculty['Rank']."</td>";
echo"<td>".$Faculty['Fphone']."</td>";


echo"</tr>";




} 
?>
</table>
</body>
</html>




