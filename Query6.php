<?php

$test = mysql_connect("localhost", "root", "Gayatri1987") or die (mysql_error());

mysql_select_db("university", $test);



#QUERY 6

echo "QUERY 6: Return the professor who earns the highest salary. <br> <br>";

$sql = "SELECT  Name , Salary
FROM  Faculty 
WHERE Salary = ((SELECT MAX(Salary)
         FROM Faculty F));";


$result = mysql_query($sql, $test);


?>
<html>
<head>
<link href="color.css" rel="stylesheet">
<title>QUERY 6</title>
</head>


<body>
<table Width="400" border="2" cellpadding="2" cellspacing="2">
<tr>
<th>Name </th>
<th>Salary </th>
<tr>

<?php
while($Faculty = mysql_fetch_assoc($result))
{
echo "<tr>";
echo"<td>".$Faculty['Name']."</td>";
echo"<td>".$Faculty['Salary']."</td>";

echo"</tr>";




} // end while
?>
</table>
</body>
</html>

