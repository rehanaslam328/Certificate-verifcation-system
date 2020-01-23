<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>
        Admin panel
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['myuser'])){
    ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <img src="images/logo.jpg" alt="Logo" width="200px">
        </div>

        <div class="col-md-4">
            <h3>Certificate Verifcation System(ADMIN PANEL)</h3>
        </div>
        <div class="col-md-4" >
            <?php
           
            if(isset($_SESSION['myuser'])){

                echo $_SESSION['myuser'].'| <a href="logout.php"  class="username">logout</a>';
            }
            ?>
        </div>
    </div>
</div>

  <?php
  include_once('navigation.php');

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center ">Report</h2>
            </div>

        </div>

    </div>
<hr>
  <div class="container-fluid" align="center">
      <div class="row">

          <div class="col-md-4">

          </div>

          <div class="col-md-4">
              <form class="form-horizontal" action=" " method="post" >
                  <div class="form-group">
                      <label for="name" class="col-md-2 control-label">Search</label>
                      <div class="col-md-6">
                          <input type="text" class="form-control" name="name" placeholder="Search By Student Name"><br>
                          <input type="submit" class="btn btn-primary" value="Search" name="search">
                      </div>
                  </div>
              </form>
          </div>
      </div>


  </div>


<div class="container">
    <table  class="table table-bordered table-responsive  table-striped table-hover">

        <tr>
            <th>Student_id</th>
            <th>Name</th>
            <th>Father Name</th>
            <th>Course Name</th>
            <th>Fee status</th>
            <th>Fee paid</th>
            <th>Fee remaing</th>
            <th>Project status</th>
            <th>Certifcate</th>

        </tr>




<?php
   include_once ('connection.php');


   if(isset($_POST['search'])){
		$pn= $_POST['name'];
        $query= "Select std.std_Id,std.Name,std.fathername,c.course_name,f.status,f.paid,f.remaining ,p.status,ce.cert_image
        From student std JOIN course c  on std.std_Id=c.std_Id 
        Join fees f ON c.course_Id=f.course_Id join project p on c.course_Id=p.course_Id
         join certificates ce on c.course_Id=ce.course_Id where Name like '$pn%'";
        
	}
    else{
		$query= "Select std.std_Id,std.Name,std.fathername,c.course_name,f.status,f.paid,f.remaining ,p.status,ce.cert_image
        From student std JOIN course c  on std.std_Id=c.std_Id 
        Join fees f ON c.course_Id=f.course_Id join project p on c.course_Id=p.course_Id
         join certificates ce on c.course_Id=ce.course_Id;
        ";
	}

	$rs= mysqli_query($con,$query);
	while($r= mysqli_fetch_array($rs)){


	?>




               <tr>

                <td><?php echo $r[0] ?></td>
                <td><?php echo $r[1] ?></td>
                <td><?php echo $r[2] ?></td>
                <td><?php echo $r[3] ?></td>
                <td><?php echo $r[4] ?></td>
                <td><?php echo $r[5] ?></td>
                <td><?php echo $r[6] ?></td>
                <td><?php echo $r[7] ?></td>
                <td><?php echo '<img  src="uploads/'.$r[8].'" alt="no image" width="100px">' ?></td>
                
               </tr>




        <?php


	}

	mysqli_close($con);

?>
    </table>
</div>



<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<?php
    }
 else{
    echo "<script>location='index.html'</script>";
}
?>
</body>
</html>