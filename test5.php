<html>
  <head>
    <title>Student Information System</title>

<style>

body{
color: blue;	
text-align: center;
font-size: 20px;
}


</style>

  </head>
  <p><body>
 
    <img src="/img/uml-logo.jpg" alt="UMASS Lowell" style="width:304px;height:228px;">
 
    <h2>Student Information System</h2>
	
    <form  method="post" action="querys.php?go" id="searchform">
      
	  <label for="search_check">Search to see if a student is able to graduate</label>
		<input  type="text" name="search_1"/ value="Enter Student ID">		
		<input  type="submit" name="submit" value="Search">
    </form>
	

	<u>Add a student</u>
	<form  method="post" action="insert.php?go" id="insert">
      
	  Student ID: <input type="text" name="new_sid"><br>
	  Name: <input type="text" name="new_sname"><br>
	  Instructor ID: <input type="text" name="new_IID"><br>
	  Major: <input type="text" name="new_major"><br>
	  Degree Held: <input type="text" name="new_degreeHeld"><br>
	  Career: <input type="text" name="new_career"><br>
		
		<input  type="submit" name="submit" value="Add a new student">
    </form>


<u>Enroll a student into a course</u>
	<form  method="post" action="enroll_student.php?go" id="enroll">
      
	  Student ID: <input type="text" name="sid"><br>
	  Course ID: <input type="text" name="course_id"><br>
	  Section ID: <input type="text" name="sec_id"><br>
	  Year ID: <input type="text" name="year_id"><br>
	  Semester ID: <input type="text" name="semester_id"><br>
	  Grade: <input type="text" name="grade"><br>
		
		<input  type="submit" name="submit" value="Enroll a new student">
    </form>


    <form  method="post" action="show_student.php?go" id="searchform">
	  <label for="search_check">Display students' current progress</label>
		<input type="text" name="sid"/>
		<input type="submit" name="submit" value="Display">
    </form>
    

    <form  method="post" action="delete_student.php?go" id="searchform">
      <label for="search_check">Delete the chosen student</label>
        <input type="text" name="sid"/>
        <input type="submit" name="submit" value="Delete">
    </form>
    
  </body>
</html>
</p>
