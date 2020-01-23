<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>
        Student view
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 align="center ">Course details</h2>
            </div>

        </div>

    </div>
<hr>
  


<div class="container">
    <table  class="table table-bordered table-responsive  table-striped table-hover">

        <tr>
            <th>course name</th>
            <th>duration</th>
            
            
            
            

        </tr>




<?php
   include ('connection.php');
   
            $ssid=$_SESSION['id'];
    
        $query="select * from course where std_Id='$ssid'";
      $rs= mysqli_query($con,$query);
     
  	$r= mysqli_fetch_array($rs);

	?>




               <tr>

                <td><?php echo $r[1] ?></td>
                <td><?php echo $r[2] ?></td>
                   </tr>




        <?php


	

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