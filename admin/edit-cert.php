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
$query= "select * from certificates  where certifcate_id= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);

?>

<div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <h2 align="center">Edit Cetificate Data</h2>
                 </div>

             </div>
         </div>


     <div class="container-fluid">
           <div class="row">
               <div class="col-md-4">

               </div>

               <div class="col-md-4">
                   <form class="form-horizontal" action="edit-cert-process.php" method="post"  enctype="multipart/form-data">
                   <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Certificate Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[0] ?>" name="cid" placeholder="Enter certifcate Id">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Certficate Image</label>
                           <div class="col-sm-8">
                               <input type="file" class="form-control" name="cimage" value="<?php echo $r[1] ?>" >
                           </div>
                       </div>

                      

                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">course Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="coid" value="<?php echo $r[2] ?>" placeholder="Enter course id">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">Student Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="stdid" value="<?php echo $r[3] ?>" placeholder="Enter student id">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">project Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="pid" value="<?php echo $r[4] ?>" placeholder="Enter student id">
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