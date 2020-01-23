<?php
	session_start();

  include_once('connection.php');
     $id=$_POST['id'];
	$un= $_POST['stusername'];
	$up= $_POST['stpass'];
	
	$adminquery= "select * from users where userId='$id' and  userName='$un' and userpass = '$up' and category='Admin'";
	$admin_run= mysqli_query($con,$adminquery) or die("Error in Query");

     $studentquery= "select * from users where userId='$id' and   userName='$un' and userpass = '$up' and category='Student'";
	$student_run= mysqli_query($con,$studentquery) or die("Error in Query");


	if(mysqli_num_rows($admin_run)>0){ 
		$_SESSION['id']=$id;
		$_SESSION['myuser']=$un;
		echo "<script>location='adminview.php'</script>";
	}
	else if (mysqli_num_rows($student_run)>0) {
        $_SESSION['id']=$id;
        $_SESSION['myuser']=$un;
		echo "<script>location='stuview.php'</script>";

			}
	else{
		echo "<script>alert('Invalid Login')</script>";	
	}
	mysqli_close($con);
   echo "<script>location='index.html'</script>";


?>