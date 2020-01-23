<?php
    include_once("connection.php");
    $id=$_POST['id'];
	$name= $_POST['name'];
  $fname= $_POST['fname'];
    $address= $_POST['Address'];
$phoneno= $_POST['phoneno'];
$uid= $_POST['userid'];
	
    //saving data
    
	$query= "update student set Name='$name',fathername='$fname',Address='$address',phoneno='$phoneno', userId='$uid' where std_Id= '$id'";
	mysqli_query($con,$query);
	mysqli_close($con);
	echo "<script>location='student-report.php'</script>"
?>