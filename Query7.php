<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#QUERY 7

echo "<br>Query7: Return the Person who is a Male Staff member and an Academic Staff member <br> <br>";

$sql = "SELECT  A.Name ,A.Sex
 FROM Person P , Academic A 
 WHERE P.Name=A.Name AND A.Sex = 'M' ;";


$result = mysql_query($sql, $test);


?>
<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Sport</title>
</head>


<body>
<table Width="200" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>Name </th>
<th>Sex </th>
<tr>

<?php
while($Person = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Person['Name']."</td>";
echo"<td>".$Person['Sex']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>

