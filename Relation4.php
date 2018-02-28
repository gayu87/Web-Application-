<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 4

echo "<br> GradStudent <br> <br>";

$sql = "SELECT * FROM GradStudent;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>GradStudent</title>
</head>


<body>
<table Width="900" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> SSN INT (9)</th>
<th> GName char (20)</th>
<th> GNum INT </th>
<th> GCADDR char (50)</th>
<th> GCPHONE INT </th>
<th> GSPADDR char (50)</th>
<th> GSPPHONE INT</th>
<th> GBDATE char (10)</th>
<th> GSEX char (1)</th>
<th> GCLASS char (20)</th>
<th> GMAJORDEPTCODE char (20)</th>
<th> GMINORDEPTCODE char (20)</th>
<th> GPROG char(20)</th>


<tr>



<?php
while($GradStudent = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$GradStudent['SSN']."</td>";
echo"<td>".$GradStudent['GName']."</td>";
echo"<td>".$GradStudent['GNum']."</td>";
echo"<td>".$GradStudent['GCADDR']."</td>";
echo"<td>".$GradStudent['GCPHONE']."</td>";
echo"<td>".$GradStudent['GSPADDR']."</td>";
echo"<td>".$GradStudent['GSPPHONE']."</td>";
echo"<td>".$GradStudent['GBDATE']."</td>";
echo"<td>".$GradStudent['GSEX']."</td>";
echo"<td>".$GradStudent['GCLASS']."</td>";
echo"<td>".$GradStudent['GMAJORDEPTCODE']."</td>";
echo"<td>".$GradStudent['GMINORDEPTCODE']."</td>";
echo"<td>".$GradStudent['GPROG']."</td>";


echo"</tr>";




} 
?>
</table>
</body>
</html>















