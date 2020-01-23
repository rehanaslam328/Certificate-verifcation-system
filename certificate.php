<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>
        Student view
    </title>
    
<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
    <style>

    </style>
    <script>



</script>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION['myuser'])){

    ?>

<div class="container-fluid notprint">
    <div class="row">
        <div class="col-md-4">
            <img src="images/logo.jpg" alt="Logo" width="200px">
        </div>

        <div class="col-md-4">
            <h3>Certificate Verifcation System</h3>
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

    <div class="container-fluid notprint">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center ">Certificates</h2>
            </div>

        </div>

    </div>
<hr class="notprint">
  


<div class="container">
    <table  class="table table-bordered table-responsive  table-striped table-hover">

        <tr>
            <th>Certificate</th>
            
            
            
            

        </tr>




<?php
   include ('connection.php');
   
            $ssid=$_SESSION['id'];
    
        $query="select * from certificates where std_Id='$ssid'";
        $query1="select * from project where std_Id='$ssid'";

      $rs= mysqli_query($con,$query);
      $rss= mysqli_query($con,$query1);
     
  	$r= mysqli_fetch_array($rs);
  	$rs= mysqli_fetch_array($rss);

	?>
               <tr>
               <?php
                   if($rs[1]=='submit'){
                 echo '<td><img  src="admin/uploads/'.$r[1].'" alt="no image"></td>'.'<br>'; 
                 
                 }
                 else{
                     echo "<div class='alert alert-danger'>
                     <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    You have to submit project.
                   </div>";
                 }
                ?>
                   </tr>
        <?php

	mysqli_close($con);

?>
     
                  
    </table>
</div>

<div class="col-md-offset-1">
<button class="btn btn-primary notprint" onClick="window.print()">print</button>
</div><br><br>

<?php
    }
 else{
    echo "<script>location='index.html'</script>";
}
?>


</body>

</html>