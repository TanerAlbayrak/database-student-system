<?php 

$myconnection = mysql_connect('localhost', 'root', '')
or die ('Could not connect: ' . mysql_error());
echo 'Connected successfully<br><br>';
$mydb = mysql_select_db ('uml_grad') or die ('Could not select database');




//add a student along with course information into the database enrollment table
function enroll_student() {

$sid = $_POST['sid'] ;
$course_id = $_POST['course_id'] ;
$sec_id = $_POST['sec_id'] ;
$year_id = $_POST['year_id'] ;
$semester_id = $_POST['semester_id'] ;
$grade = $_POST['grade'] ;

	$enroll_query = "INSERT INTO enrollment(SID, CID, SecId, yearID, semesterID, grade) VALUES ($sid, $course_id, '$sec_id', $year_id, '$semester_id', '$grade')";

$enroll_result = mysql_query( $enroll_query ) or die ('Query failed: ' . mysql_error()) ;
   
   if ( $enroll_result == TRUE ) {
   	return TRUE ;
   }
   else { 
   	return FALSE ;
   }
}

enroll_student();

/*$new_query_table = "SELECT * FROM STUDENTS WHERE SID = $sid" ;

$new_query_result = mysql_query( $new_query_table );

$row = mysql_fetch_array($new_query_result, MYSQL_ASSOC);

echo $row['sid'] ;
*/
echo "<br>";
echo "<br>";
echo "<a href='test5.html'>Back to the home page</a>";
?>
