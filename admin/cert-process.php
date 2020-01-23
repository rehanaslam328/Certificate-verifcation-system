<?php
	include_once("connection.php");
	
	
        $target_dir = "uploads/"; 
        
	$target_file = basename($_FILES["cimage"]["name"]);
	
    move_uploaded_file($_FILES["cimage"]["tmp_name"], $target_dir.$target_file);
    
    $cid= $_POST['cid'];
	$stdid= $_POST['stdid'];
	$pid= $_POST['pid'];
	
	$query= "insert into certificates (cert_image,course_Id,std_Id,proj_Id) values ('$target_file',' $cid','$stdid','$pid')";
	mysqli_query($con,$query);
	mysqli_close($con);
	echo "<script>location='cert-form.php'</script>"
	
?>