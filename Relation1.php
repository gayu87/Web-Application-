<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Relation 1

echo "<br> Person <br> <br>";

$sql = "SELECT * FROM Person;";

$result = mysql_query($sql, $test);
?>

<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Person</title>
</head>


<body>
<table Width="800" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SSN INT</th>
<th> Name char (20)</th>
<th>Address char (50) </th>
<th>Sex char (1) (INT) </th>
<th> bDate char(10)</th>
<tr>



<?php
while($Person = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Person['SSN']."</td>";
echo"<td>".$Person['Name']."</td>";
echo"<td>".$Person['Address']."</td>";
echo"<td>".$Person['Sex']."</td>";
echo"<td>".$Person['bDate']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>























