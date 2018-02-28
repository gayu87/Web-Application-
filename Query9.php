<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#QUERY 9

echo "QUERY 9: List Sport name, Coach name and office location who belongs from Non-Academic <br> <br>";

$sql = "SELECT  S.Name, S.Coach, S.OfficeLoc
FROM Sport S, NonAcademic N 
WHERE S.Coach = N.Name AND S.OfficeLoc = N.Address;";


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
<th>Name </th>
<th>Coach</th>
<th>OfficeLoc </th>

<tr>

<?php
while($Sport = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Sport['Name']."</td>";
echo"<td>".$Sport['Coach']."</td>";
echo"<td>".$Sport['OfficeLoc']."</td>";
echo"</tr>";




} // end while
?>
</table>
</body>
</html>

