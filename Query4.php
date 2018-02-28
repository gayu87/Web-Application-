

<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);



#QUERY 4

echo "Queries involving GROUP BY, HAVING or other similar functions.
Lists the Names and Class of Male students, and group by Name<br> <br>";
$sql = "SELECT  SName, CLASS
FROM Student
WHERE SEX = 'M'
GROUP BY SName;";


$result = mysql_query($sql, $test);

?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Query 4</title>
</head>


<body>
<table Width="500" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SName </th>
<th>CLASS </th>

<tr>


<?php


while($row = mysql_fetch_assoc($result))
{

$sname = $row['SName'];
$class = $row['CLASS'];


echo "<tr>";
echo"<td>".$row['SName']."</td>";
echo"<td>".$row['CLASS']."</td>";


echo"</tr>";


}
?>
</table>
</body>
</html>







