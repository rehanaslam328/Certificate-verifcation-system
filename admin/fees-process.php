<?php
include_once("connection.php");


$status= $_POST['status'];
$paid= $_POST['paid'];
$remaining= $_POST['remaining'];
$cid= $_POST['cid'];
$stid= $_POST['stid'];




$query= "insert into fees (status,paid,remaining,course_Id,std_Id)  values ('$status','$paid','$remaining','$cid','$stid')";
mysqli_query($con,$query) or die("Error in Query");
mysqli_close($con);
echo "<script>location='fees-form.php'</script>";
?>