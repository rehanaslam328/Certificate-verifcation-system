<?php
    include_once("connection.php");

    $id=$_POST['cid'];
	$cname= $_POST['cname'];
  $duration= $_POST['duration'];
    $stdid= $_POST['stdid'];

    //saving data
    
	$query= "update course set course_name='$cname',duration='$duration',std_Id='$stdid'  where course_Id='$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
	echo "<script>location='course-report.php'</script>"
?>