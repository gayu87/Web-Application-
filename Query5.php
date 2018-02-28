
<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);



#QUERY 5

echo "Queries that require the use of the DISTINCT or ALL keyword.
List the names of distinct instructors in the university <br> <br>";

$sql = "SELECT DISTINCT(Instructor)
FROM Section;";


$result = mysql_query($sql, $test);

?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Query 5</title>
</head>


<body>
<table Width="400" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SName </th>

<tr>


<?php


while($row = mysql_fetch_assoc($result))
{

$instr = $row['Instructor'];


echo "<tr>";
echo"<td>".$row['Instructor']."</td>";


echo"</tr>";


}
?>
</table>
</body>
</html>













