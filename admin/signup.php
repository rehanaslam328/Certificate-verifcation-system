<?php
	include_once("connection.php");
	$username= $_POST['userna'];
	$userpasword= $_POST['userpassword'];
	$category= $_POST['category'];
	$query= "insert into users (userName,userpass,category)  values ('$username','$userpasword','$category')";
	mysqli_query($con,$query) or die("Error in Query");
	mysqli_close($con);
    echo "<script>location='login.php'</script>";
?>