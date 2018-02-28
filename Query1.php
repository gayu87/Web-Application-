<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Query 1

echo "Queries over more than one relation (by listing more than one relation in the FROM clause)
 <br> List all Courses and Instructors who belong to the Computer Science Department, and have Senior Rank. <br> <br>";

$sql = "SELECT C.CourseNo, F.Name
 FROM  Faculty F, Course C, Section S
 WHERE F.Name = S.Instructor AND C.CourseNo = S.SecCourse AND C.OfferingDept = 'Computer Science' AND F.Rank = 'senior';";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Query 1</title>
</head>


<body>
<table Width="600" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>CourseNo </th>
<th> Faculty Name</th>

<tr>


<?php

while($row = mysql_fetch_assoc($result))
{

$courseNo = $row['CourseNo'];
$name = $row['Name'];

echo "<tr>";
echo"<td>".$row['CourseNo']."</td>";
echo"<td>".$row['Name']."</td>";

echo"</tr>";


}
?>
</table>
</body>
</html>











