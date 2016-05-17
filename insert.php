<?php 

$myconnection = mysql_connect('localhost', 'root', '')
or die ('Could not connect: ' . mysql_error());
echo 'Connected successfully<br><br>';
$mydb = mysql_select_db ('uml_grad') or die ('Could not select database');

//add a student into the database students table
function add_student() {

$new_id = $_POST['new_sid'] ;
$new_name = $_POST['new_sname'] ;
$new_IID = $_POST['new_IID'] ;
$new_major = $_POST['new_major'] ;
$new_degreeHeld = $_POST['new_degreeHeld'] ;
$new_career = $_POST['new_career'] ;

	$insert_query = "INSERT INTO students(sid, name, IID, major, degreeHeld, career) VALUES ($new_id, '$new_name', $new_IID, '$new_major', '$new_degreeHeld', '$new_career')";
	

$insert_result = mysql_query( $insert_query ) or die ('Query failed: ' . mysql_error()) ;
   

   if ( $insert_result == TRUE ) {
   	return TRUE ;
   }
   else { 
   	return FALSE ;
   }

   $commit_query = "commit";

	$commit_result = mysql_query( $commit_query ) or die ('Query failed: ' . mysql_error()) ;

}

add_student();

echo "<br>";
echo "Student has been added.";
echo "<br>";
echo "<a href='test5.html'>Back to the home page</a>";

/*$new_query_table = "SELECT sid FROM STUDENTS WHERE SID = $new_sid" ;

$new_query_result = mysql_query( $new_query_table );

$row = mysql_fetch_array($new_query_result, MYSQL_ASSOC);

echo $row['sid'] ;
*/
?>
