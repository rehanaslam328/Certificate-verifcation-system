<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student</title>
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
        <div class="col-md-4">
            <?php
            
            if(isset($_SESSION['myuser'])){

                echo $_SESSION['myuser']. '| <a href="../logout.php" >logout</a>';
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
                     <h2 align="center">Add Certificate Data</h2>
                 </div>

             </div>
         </div>


       <div class="container-fluid">
           <div class="row">
               <div class="col-md-4">

               </div>

               <div class="col-md-4">
                   <form class="form-horizontal" action="cert-process.php" method="post" enctype="multipart/form-data">
                       <div class="form-group">
                           <label for="name" class="col-sm-2 control-label">Certificate</label>
                           <div class="col-sm-8">
                               <input type="file" class="form-control" name="cimage" >
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="Course Id" class="col-sm-2 control-label">Course Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="cid" placeholder="Enter course Id">
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">Student Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="stdid" placeholder="Enter student id">
                           </div>
                       </div>
                              
                       <div class="form-group">
                           <label for="Address" class="col-sm-2 control-label">project Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="pid" placeholder="Enter Project id">
                           </div>
                       </div>

                       <div class="col-md-offset-4">
                           <input type="submit" name="submit" value="Add" class="btn btn-primary">
                           <a href="cert-report.php" class="btn btn-info">View Report</a>
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