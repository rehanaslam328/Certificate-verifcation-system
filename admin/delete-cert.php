<?php
       include_once("connection.php");

	$id= $_REQUEST['delete_id'];
	
	$query= "delete from certificates where certifcate_id = '$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
		echo "<script>location='cert-report.php'</script>"
	
	?>