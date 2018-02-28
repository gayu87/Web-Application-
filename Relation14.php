<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#Query 1

echo "<br> College <br> <br>";

$sql = "SELECT * FROM College;";

$result = mysql_query($sql, $test);

?>
<html>
<head>

<link href="color.css" rel="stylesheet">
<title>College</title>
</head>


<body>
<table Width="700" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>cName char (20) </th>
<th>Dean char (20) </th>
<th>Office char (20) </th>

<tr>

<?php
while($College = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$College['cName']."</td>";
echo"<td>".$College['Dean']."</td>";
echo"<td>".$College['Office']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>

























