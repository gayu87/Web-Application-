<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 7

echo "<br> CGrant <br> <br>";

$sql = "SELECT * FROM CGrant;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>CGrant</title>
</head>




<body>
<table Width="1000" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> Title char (20)</th>
<th> Agency char (50)</th>
<th> Number INT </th>
<th> St_date char (10)</th>


<tr>



<?php
while($CGrant = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$CGrant['Title']."</td>";
echo"<td>".$CGrant['Agency']."</td>";
echo"<td>".$CGrant['Number']."</td>";
echo"<td>".$CGrant['St_date']."</td>";





echo"</tr>";




} 
?>
</table>
</body>
</html>

