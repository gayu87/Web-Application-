<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#QUERY 10

echo "<br>QUERY 10: Return the courses that have at least 3 credits, and the year offered is after 2009. <br> <br>";


$sql = "SELECT DISTINCT (S.SecCourse), S.Year
FROM Section S, Course C
WHERE  C.CreditHours >=3 AND S.Year > 2009;";


$result = mysql_query($sql, $test);

?>
<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Section</title>
</head>


<body>
<table Width="300" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SecCourse </th>
<th>Year </th>
<tr>

<?php
while($Section = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Section['SecCourse']."</td>";
echo"<td>".$Section['Year']."</td>";

} // end while
?>
</table>
</body>
</html>

