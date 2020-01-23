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
            <img src="../images/logo.jpg" alt="Logo" width="200px">
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
                     <h2 align="center">Add Project Data</h2>
                 </div>

             </div>
         </div>


       <div class="container-fluid">
           <div class="row">
               <div class="col-md-4">

               </div>

               <div class="col-md-4">
                   <form class="form-horizontal" action="project-process.php" method="post">
                   <div class="form-group">
                         <label for="sel1" class="col-sm-2 control-label">Status</label>
                         <div class="col-sm-8">
                            <select class="form-control" name="status" >
                              <option>submit</option>
                              <option>not submit</option>
    
                            </select>
                        </div>
                    </div>


                       <div class="form-group">
                           <label for="userid" class="col-sm-2 control-label">Student Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="stid" placeholder="Enter student id">
                           </div>
                       </div>


                       <div class="form-group">
                           <label for="phoneno" class="col-sm-2 control-label">Course Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" name="cid" placeholder="Enter course id">
                           </div>
                       </div>
                       
                       <div class="col-md-offset-4">
                           <input type="submit" name="submit" value="Add" class="btn btn-primary">
                           <a href="project-report.php" class="btn btn-info">View Report</a>
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