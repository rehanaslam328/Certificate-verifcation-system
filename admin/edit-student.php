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
$query= "select * from student where std_Id= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);
?>

<div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <h2 align="center">Edit Student Data</h2>
                 </div>

             </div>
         </div>


         
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-4">

               </div>

               <div class="col-md-4">
                   <form class="form-horizontal" action="edit-student-process.php" method="post">

                        <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[0] ?>" name="id" placeholder="Enter id">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Name</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[1] ?>" name="name" placeholder="Enter name">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="fathername" class="col-sm-2 control-label">Father Name</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[2] ?>" name="fname" placeholder="Enter father name">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">Address</label>
                           <div class="col-sm-8">
                               <textarea type="text" class="form-control" name="Address" placeholder="Enter Address"><?php echo $r[3] ?></textarea>
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="phoneno" class="col-sm-2 control-label">Phoneno</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[4] ?>" name="phoneno" placeholder="Enter Phone number">
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="userid" class="col-sm-2 control-label">UserId</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[5] ?>" name="userid" placeholder="Enter User id">
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