<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 6

echo "Table Transcript <br> <br>";

$sql = "SELECT * FROM Transcript;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Transcript</title>
</head>




<body>
<table Width="1500" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> SSN INT (9)</th>
<th> Name char (20)</th>
<th> NUM INT </th>
<th> CADDR char (50)</th>
<th> CPHONE INT </th>
<th> SPADDR char (50)</th>
<th> SPPHONE INT</th>
<th> BDATE char (10)</th>
<th> SEX char (1)</th>
<th> CLASS char (20)</th>
<th> MAJORDEPTCODE char (20)</th>
<th> MINORDEPTCODE char (20)</th>
<th> PROG char(20)</th>
<th> Grade char NULL</th>


<tr>



<?php
while($Transcript = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Transcript['SSN']."</td>";
echo"<td>".$Transcript['Name']."</td>";
echo"<td>".$Transcript['NUM']."</td>";
echo"<td>".$Transcript['CADDR']."</td>";
echo"<td>".$Transcript['CPHONE']."</td>";
echo"<td>".$Transcript['SPADDR']."</td>";
echo"<td>".$Transcript['SPPHONE']."</td>";
echo"<td>".$Transcript['BDATE']."</td>";
echo"<td>".$Transcript['SEX']."</td>";
echo"<td>".$Transcript['CLASS']."</td>";
echo"<td>".$Transcript['MAJORDEPTCODE']."</td>";
echo"<td>".$Transcript['MINORDEPTCODE']."</td>";
echo"<td>".$Transcript['PROG']."</td>";
echo"<td>".$Transcript['Grade']."</td>";




echo"</tr>";




} 
?>
</table>
</body>
</html>


