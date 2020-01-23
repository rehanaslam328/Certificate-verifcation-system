<?php
    include_once("connection.php");

    $id=$_POST['fid'];
	$status= $_POST['status'];
  $paid= $_POST['paid'];
    $remaining= $_POST['remaining'];
    $cid= $_POST['cid'];
    $stid= $_POST['stid'];

    //saving data
    
	$query= "update fees set status='$status',paid='$paid',remaining='$remaining',course_Id='$cid',std_Id='$stid'  where fee_id='$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
	echo "<script>location='fee-report.php'</script>"
?>