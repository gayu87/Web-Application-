<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Query 1

echo "<br>Section <br> <br>";

$sql = "SELECT * FROM Section;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Selection</title>
</head>


<body>
<table Width="900" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>SecCourse char (10) </th>
<th> Instructor char (20)</th>
<th>Semester (INT) </th>
<th>Year (INT) </th>
<th> SecNum (INT)</th>
<tr>



<?php
while($Section = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Section['SecCourse']."</td>";
echo"<td>".$Section['Instructor']."</td>";
echo"<td>".$Section['Semester']."</td>";
echo"<td>".$Section['Year']."</td>";
echo"<td>".$Section['SecNum']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>



























