<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
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



<?php
include_once("connection.php");

$pid= $_REQUEST['edit_id'];
//reading data
$query= "select * from course where course_Id= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);

?>

<div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <h2 align="center">Edit Course Data</h2>
                 </div>

             </div>
         </div>


     <div class="container-fluid">
           <div class="row">
               <div class="col-md-4">

               </div>

               <div class="col-md-4">
                   <form class="form-horizontal" action="edit-course-process.php" method="post">
                   <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Course Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[0] ?>" name="cid" placeholder="Enter course Id">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Course Name</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="cname" value="<?php echo $r[1] ?>" placeholder="Enter course name">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="fathername" class="col-sm-2 control-label">Duration</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="duration" value="<?php echo $r[2] ?>" placeholder="Enter course duration">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">Student Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="stdid" value="<?php echo $r[3] ?>" placeholder="Enter student id">
                           </div>
                       </div>


                       <div class="col-md-offset-4">
                           <input type="submit" name="submit" value="Update" class="btn btn-primary">
                       </div>


                         </form>
               </div>

           </div>


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