<?php

//database connection
$myconnection = mysql_connect('localhost', 'root', '')
or die ('Could not connect: ' . mysql_error());
echo 'Connected successfully<br><br>';
$mydb = mysql_select_db ('uml_grad') or die ('Could not select database');

function delete_student() {

	$user_input = $_POST['sid'] ;

	$delete_query = "DELETE FROM STUDENTS WHERE students.sid = $user_input";

	$delete_result = mysql_query($delete_query) or die('Query failed: ' . mysql_error()) ;

 if ( $delete_result == TRUE ) {
   	return TRUE ;
   }
   else { 
   	return FALSE ;
   }


}

delete_student() ;

echo "Student has been deleted." ;
echo "<br>";
echo "<br>";
echo "<a href='test5.html'>Back to the home page</a>";

?>
