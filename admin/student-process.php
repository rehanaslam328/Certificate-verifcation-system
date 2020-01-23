<?php
include_once("connection.php");


$name= $_POST['name'];
$fname= $_POST['fname'];
$address= $_POST['Address'];
$phoneno= $_POST['phoneno'];
$uid= $_POST['userid'];




$query= "insert into student (Name,fathername,Address,phoneno,userId)  values ('$name','$fname','$address','$phoneno','$uid')";
mysqli_query($con,$query) or die("Error in Query");
mysqli_close($con);
echo "<script>location='student-form.php'</script>";
?>