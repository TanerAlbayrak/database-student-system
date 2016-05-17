<?php
$myconnection = mysql_connect('localhost', 'root', '')
or die ('Could not connect: ' . mysql_error());
echo 'Connected successfully<br><br>';
$mydb = mysql_select_db ('uml_grad') or die ('Could not select database');

$query = "select courses.credits
FROM students
join enrollment
ON students.SID = enrollment.SID
JOIN COURSES ON COURSEs.CID = ENROLLment.CID 
WHERE GRADE != 'F' AND GRADE IS NOT NULL AND students.sid = '1010101'";

$result = mysql_query($query) or die ('Query failed: ' . mysql_error());
while ($row = mysql_fetch_array ($result, MYSQL_ASSOC)) {
	echo $row["sid"];
echo "<br>";
}
mysql_free_result($result);
mysql_close($myconnection);
?>
