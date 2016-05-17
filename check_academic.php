<?php
							
$myconnection = mysql_connect('localhost', 'root', '')
or die ('Could not connect: ' . mysql_error());
echo 'Connected successfully<br><br>';
$mydb = mysql_select_db ('uml_grad') or die ('Could not select database');

$user_selection = $_POST['search_1'];

//Query to see how many graduate credits the student chosen has passed and return sid and credits
function check_min_creds($sid) {
	
$min_creds_query = "SELECT
  students.SID,
  SUM(credits)
FROM
  students
JOIN
  enrollment ON students.sid = enrollment.SID
JOIN
  courses ON enrollment.CID = courses.CID
WHERE
  students.SID = $user_selection AND enrollment.grade != 'F' AND enrollment.grade != '' AND enrollment.grade IS NOT NULL AND courses.groupID != 0";

  $min_creds_result = mysql_query($min_creds_query) or die ('Query failed: ' . mysql_error());
  
  $row = mysql_fetch_array($min_creds_result, MYSQL_ASSOC) ;
  

echo "<table>
<tr>
<th>sid</th>
<th>credits</th>
</tr>";

while ($row = mysql_fetch_array ($min_creds_result, MYSQL_ASSOC)) {
	
	//print_r($row); prints array as objects and their values
	echo "<tr>";
	echo "<td>" . $row['SID'] . "</td>" ;	
	echo "   ";
	echo "<td>" . $row['SUM(credits)'] . "</td>" ;
	echo "</tr>";
	echo "<br>";
}

echo "</table>";

mysql_free_result($result);
mysql_close($myconnection);
?>
