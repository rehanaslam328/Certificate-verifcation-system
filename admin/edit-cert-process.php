<?php
    include_once("connection.php");

    $certid=$_POST['cid'];
	$courseid= $_POST['coid'];
  $stdid= $_POST['stdid'];
    $pid= $_POST['pid'];

    
    $target_dir = "uploads/"; 
        
	$target_file = basename($_FILES["cimage"]["name"]);
	
    move_uploaded_file($_FILES["cimage"]["tmp_name"], $target_dir.$target_file);

    //saving data
    
	$query= "update certificates set cert_image='$target_file',course_Id='$courseid',std_Id='$stdid', proj_Id='$pid'  where certifcate_id='$certid'";
	mysqli_query($con,$query);
	mysqli_close($con);
	echo "<script>location='cert-report.php'</script>"
?>