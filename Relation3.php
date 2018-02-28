<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 3

echo "<br>Student <br> <br>";

$sql = "SELECT * FROM Student;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Student</title>
</head>



<body>
<table Width="1200" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> SSSN INT (9)</th>
<th> SNAME char (20)</th>
<th> SNUM INT </th>
<th> SCADDR char (50)</th>
<th> SCPHONE INT </th>
<th> SPADDR char (50)</th>
<th> SPPHONE INT</th>
<th> BDATE char (10)</th>
<th> SEX char (1)</th>
<th> CLASS char (20)</th>
<th> MAJORDEPTCODE char (20)</th>
<th> MINORDEPTCODE char (20)</th>
<th> PROG char(20)</th>


<tr>



<?php
while($Student = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Student['SSSN']."</td>";
echo"<td>".$Student['SNAME']."</td>";
echo"<td>".$Student['SNUM']."</td>";
echo"<td>".$Student['SCADDR']."</td>";
echo"<td>".$Student['SCPHONE']."</td>";
echo"<td>".$Student['SPADDR']."</td>";
echo"<td>".$Student['SPPHONE']."</td>";
echo"<td>".$Student['BDATE']."</td>";
echo"<td>".$Student['SEX']."</td>";
echo"<td>".$Student['CLASS']."</td>";
echo"<td>".$Student['MAJORDEPTCODE']."</td>";
echo"<td>".$Student['MINORDEPTCODE']."</td>";
echo"<td>".$Student['PROG']."</td>";


echo"</tr>";




} 
?>
</table>
</body>
</html>

