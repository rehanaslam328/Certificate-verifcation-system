<?php
       include_once("connection.php");

	$id= $_REQUEST['delete_id'];
	
	$query= "delete from course where course_Id = '$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
		echo "<script>location='course-report.php'</script>"
	
	?>