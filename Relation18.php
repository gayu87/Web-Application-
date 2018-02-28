<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#table 18 




$sql = "SELECT * FROM Sport;";

$result = mysql_query($sql, $test);
echo "<b> <br>Sport</b> <br> <br><br>";
?>
<html>
<head>
  <link href="color.css" rel="stylesheet">

</head>


<body>
<body>        <title> Sport</title>
<table Width="900" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>Coach char (20) </th>
<th>OfficeLoc char (50) </th>
<th>Name char (20) </th>
<tr>

<?php
while($Sport = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Sport['Coach']."</td>";
echo"<td>".$Sport['Name']."</td>";
echo"<td>".$Sport['OfficeLoc']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>






























