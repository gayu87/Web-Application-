<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#table 15

echo " <br>Staff <br> <br>";

$sql = "SELECT * FROM Staff;";

$result = mysql_query($sql, $test);
?>
<html>
<head>

   <link href="color.css" rel="stylesheet">

</head>


<body>
<table Width="900" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SSN INT (9) </th>
<th>Name char (20) </th>
<th>Address char (50) </th>
<th>Sex char (1)  </th>
<th>bDate char (10)  </th>
<tr>

<?php
while($Staff = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Staff['SSN']."</td>";
echo"<td>".$Staff['Name']."</td>";
echo"<td>".$Staff['Address']."</td>";
echo"<td>".$Staff['Sex']."</td>";
echo"<td>".$Staff['bDate']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>



























