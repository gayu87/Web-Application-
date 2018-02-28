
<?php


$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 8

echo "<br>Support <br> <br>";

$sql = "SELECT * FROM Support;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Support</title>
</head>




<body>
<table Width="800" border="2" cellpadding="2" cellspacing="2">
<tr>
<th> Time char (20)</th>
<th> Start char (10)</th>
<th> End char (10) </th>

<tr>



<?php
while($Support = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Support['Time']."</td>";
echo"<td>".$Support['Start']."</td>";
echo"<td>".$Support['End']."</td>";





echo"</tr>";




} 
?>
</table>
</body>
</html>




