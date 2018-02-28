<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 5

echo "<br> Degree <br> <br>";

$sql = "SELECT * FROM Degree;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Degree</title>
</head>


<body>
<table Width="1200" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> SSN INT (9)</th>
<th> Name char (20)</th>
<th> Num INT </th>
<th> CADDR char (50)</th>
<th> CPHONE INT </th>
<th> PADDR char (50)</th>
<th> PPHONE INT</th>
<th> BDATE char (10)</th>
<th> SEX char (1)</th>
<th> CLASS char (20)</th>
<th> MAJORDEPTCODE char (20)</th>
<th> MINORDEPTCODE char (20)</th>
<th> PROG char(20)</th>
<th> University char(50)</th>
<th> Year INT </th>


<tr>



<?php
while($Degree = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Degree['SSN']."</td>";
echo"<td>".$Degree['Name']."</td>";
echo"<td>".$Degree['Num']."</td>";
echo"<td>".$Degree['CADDR']."</td>";
echo"<td>".$Degree['CPHONE']."</td>";
echo"<td>".$Degree['PADDR']."</td>";
echo"<td>".$Degree['PPHONE']."</td>";
echo"<td>".$Degree['BDATE']."</td>";
echo"<td>".$Degree['SEX']."</td>";
echo"<td>".$Degree['CLASS']."</td>";
echo"<td>".$Degree['MAJORDEPTCODE']."</td>";
echo"<td>".$Degree['MINORDEPTCODE']."</td>";
echo"<td>".$Degree['PROG']."</td>";
echo"<td>".$Degree['University']."</td>";
echo"<td>".$Degree['Year']."</td>";



echo"</tr>";




} 
?>
</table>
</body>
</html>




