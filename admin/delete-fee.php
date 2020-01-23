<?php
       include_once("connection.php");

	$id= $_REQUEST['delete_id'];
	
	$query= "delete from fees where fee_id = '$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
		echo "<script>location='fee-report.php'</script>"
	
	?>