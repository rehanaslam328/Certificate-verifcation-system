<?php
    include_once("connection.php");

    $id=$_POST['pid'];
	$status= $_POST['status'];
  $stid= $_POST['stid'];
    $cid= $_POST['cid'];

    //saving data
    
	$query= "update project set status='$status',std_Id='$stid',course_Id='$cid'  where proj_Id='$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
	echo "<script>location='project-report.php'</script>"
?>