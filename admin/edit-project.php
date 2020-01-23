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
$query= "select * from project where proj_Id= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);

?>

<div class="container-fluid">
             <div class="row">
                 <div class="col-md-12">
                     <h2 align="center">Edit Project Data</h2>
                 </div>

             </div>
         </div>


       <div class="container-fluid">
           <div class="row">
               <div class="col-md-4">

               </div>

               <div class="col-md-4">
                   <form class="form-horizontal" action="edit-process.php" method="post">
                   <div class="form-group">
                           <label for="userid" class="col-sm-2 control-label">Project Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[0]?>" name="pid" placeholder="Enter project id">
                           </div>
                       </div>

                   <div class="form-group">
                         <label for="sel1" class="col-sm-2 control-label">Status</label>
                         <div class="col-sm-8">
                            <select class="form-control" name="status"  >
                              <option>submit</option>
                              <option>not submit</option>
    
                            </select>
                        </div>
                    </div>


                       <div class="form-group">
                           <label for="userid" class="col-sm-2 control-label">Student Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[2]?>" name="stid" placeholder="Enter student id">
                           </div>
                       </div>


                       <div class="form-group">
                           <label for="phoneno" class="col-sm-2 control-label">Course Id</label>
                           <div class="col-sm-8">
                               <input type="text" class="form-control" value="<?php echo $r[3]?>" name="cid" placeholder="Enter course id">
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