
<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);




#Query 3

echo "<br>Queries involving complicated selects and joins, and/or sub-queries
List the Names of Instructors who have taught in any Year other than 2010<br> <br>";

$sql = "SELECT Name 
FROM Faculty F
WHERE NOT EXISTS(
       SELECT * FROM Section S
       WHERE F.Name = S.Instructor AND (S.Year = 2010));";

$result = mysql_query($sql, $test);

?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Query 3</title>
</head>


<body>
<table Width="300" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>Name </th>

<tr>


<?php


while($row = mysql_fetch_assoc($result))
{

$name = $row['Name'];


echo "<tr>";
echo"<td>".$row['Name']."</td>";

echo"</tr>";


}
?>
</table>
</body>
</html>







