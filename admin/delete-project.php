<?php
       include_once("connection.php");

	$id= $_REQUEST['delete_id'];
	
	$query= "delete from project where proj_Id = '$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
		echo "<script>location='project-report.php'</script>"
	
	?>