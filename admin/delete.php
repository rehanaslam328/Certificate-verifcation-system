<?php
       include_once("connection.php");

	$id= $_REQUEST['delete_id'];
	
	$query= "delete from student where std_Id = '$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
		echo "<script>location='student-report.php'</script>"
	
	?>