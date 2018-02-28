

<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);



#Query 2

echo "<br>Queries involving aggregate functions, such as SUM, COUNT, and AVG
Count the number of Females in the university database<br> <br>";

$result = mysql_query("SELECT * FROM Person WHERE Sex = 'F';");
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Query 2</title>
</head>


<body>
<table Width="100" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>Sex </th>

<tr>


<?php

$i = 0;

while($row = mysql_fetch_assoc($result))
{

$sex = $row['Sex'];

$gender = $row['Sex'];
	$i++;


echo "<tr>";
echo"<td>".$row['Sex']."</td>";

echo"</tr>";


}
?>
</table>
</body>
</html>







