<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#table Grade_Record

echo " <br> Grade_Record <br> <br>";

$sql = "SELECT * FROM Grade_Record;";

$result = mysql_query($sql, $test);

?>
<html>
<head>

<link href="color.css" rel="stylesheet">
<title>Grade_Record</title>
</head>


<body>
<table Width="600" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>SSN INT (9) </th>
<th>SectionCourse char (10) </th>
<th>Grade char (2) </th>

<tr>

<?php
while($Grade_Record = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Grade_Record['SSN']."</td>";
echo"<td>".$Grade_Record['SectionCourse']."</td>";
echo"<td>".$Grade_Record['Grade']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>


























