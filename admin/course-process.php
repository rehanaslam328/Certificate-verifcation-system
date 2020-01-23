<?php
include_once("connection.php");


$cname= $_POST['cname'];
$duration= $_POST['duration'];
$stdid= $_POST['stdid'];



$query= "insert into course (course_name	,duration,std_Id)  values ('$cname','$duration','$stdid')";
mysqli_query($con,$query) or die("Error in Query");
mysqli_close($con);
echo "<script>location='course-form.php'</script>";
?>