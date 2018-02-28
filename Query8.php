<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#QUERY 8


echo "<br>QUERY 8: List all the Course names, Instructor name, SSN, and Date of Birth who taught in the First Semester. <br> <br>";

$sql = "SELECT  S.SecCourse, P.Name, P.SSN, P.bDate
FROM  Section S , Person P
WHERE  S.Semester = 1 AND S.Instructor = P.Name;";


$result = mysql_query($sql, $test);


?>
<html>
<head>
 <link href="color.css" rel="stylesheet">
<title>Section</title>
</head>


<body>
<table Width="500" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SecCourse </th>
<th>Name </th>
<th>SSN </th>
<th>bDate </th>

<tr>

<?php
while($Section = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Section['SecCourse']."</td>";
echo"<td>".$Section['Name']."</td>";
echo"<td>".$Section['SSN']."</td>";
echo"<td>".$Section['bDate']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>

