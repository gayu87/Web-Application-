<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);


#table 11 Department

echo "<br>Department <br> <br>";

$sql = "SELECT * FROM Department;";

$result = mysql_query($sql, $test);

?>
<html>
<head>
<link href="color.css" rel="stylesheet">
<title>Department</title>
</head>


<body>
<table Width="1200" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>DEPTNAME char (20) </th>
<th> DEPTCODE (INT)</th>
<th>DEPTOFFICE char (20)</th>
<th>DEPTPHONE (INT) </th>
<th> DEPTCOLLEGE char (50)</th>
<tr>



<?php
while($Department = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Department['DEPTNAME']."</td>";
echo"<td>".$Department['DEPTCODE']."</td>";
echo"<td>".$Department['DEPTOFFICE']."</td>";
echo"<td>".$Department['DEPTPHONE']."</td>";
echo"<td>".$Department['DEPTCOLLEGE']."</td>";


echo"</tr>";




} // end while
?>
</table>
</body>
</html>
























