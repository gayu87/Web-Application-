<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 9

echo "<br>Instructor_Researcher <br> <br>";

$sql = "SELECT * FROM Instructor_Researcher;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Instructor_Researcher</title>
</head>



<body>
<table Width="1000" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> SSN INT(9</th>
<th> Name char (20)</th>
<th> Address char (50) </th>
<th> Sex char (1) </th>
<th> bDate char (10) </th>


<tr>



<?php
while($Instructor_Researcher = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Instructor_Researcher['SSN']."</td>";
echo"<td>".$Instructor_Researcher['Name']."</td>";
echo"<td>".$Instructor_Researcher['Address']."</td>";
echo"<td>".$Instructor_Researcher['Sex']."</td>";
echo"<td>".$Instructor_Researcher['bDate']."</td>";



echo"</tr>";




} 
?>
</table>
</body>
</html>

