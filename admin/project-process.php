<?php
include_once("connection.php");


$status= $_POST['status'];
$cid= $_POST['cid'];
$stid= $_POST['stid'];




$query= "insert into project (status,std_Id,course_Id)  values ('$status','$stid','$cid')";
mysqli_query($con,$query) or die("Error in Query");
mysqli_close($con);
echo "<script>location='project-form.php'</script>";
?>