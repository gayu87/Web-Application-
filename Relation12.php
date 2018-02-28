<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Query 1

echo "<br> Course <br> <br>";

$sql = "SELECT * FROM Course;";

$result = mysql_query($sql, $test);

?>
<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Course</title>
</head>


<body>
<table Width="1700" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>CourseNo char (10) </th>
<th> OfferingDept char (20) </th>
<th>CreditHours (INT) </th>
<th>CourseLevel char (10) </th>
<th>InstructorSSN INT (9) </th>
<th>Semester (INT ) </th>
<th>Year (INT ) </th>
<th>Days_Hour char (20) </th>
<th>RoomNo char (20) </th>
<th>NoOfStudents (INT) </th>

<?php
while($Course = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Course['CourseNo']."</td>";
echo"<td>".$Course['OfferingDept']."</td>";
echo"<td>".$Course['CreditHours']."</td>";
echo"<td>".$Course['CourseLevel']."</td>";
echo"<td>".$Course['InstructorSSN']."</td>";
echo"<td>".$Course['Semester']."</td>";
echo"<td>".$Course['Year']."</td>";
echo"<td>".$Course['Days_Hour']."</td>";
echo"<td>".$Course['RoomNo']."</td>";
echo"<td>".$Course['NoOfStudents']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>
























