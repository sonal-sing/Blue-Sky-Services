<?php  

include('dbcon.php');
session_start();
if(!isset($_SESSION['is_login'])){
    if(isset($_REQUEST['remail'])){

        $rEmail = mysqli_real_escape_string($conn, trim($_REQUEST['remail']));
        $rPassword = mysqli_real_escape_string($conn,  trim($_REQUEST['rpass']));
        $sql = "SELECT r_email, r_password FROM reg_login WHERE r_email = '".$rEmail."' AND r_password = '".$rPassword."' limit 1";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $_SESSION['is_login'] = true;
            $_SESSION['remail'] = $rEmail;
           echo "<script> location.href='reqprofile.php';</script>";
           exit;
        }else {
           $msg =  '<div class="alert alert-warning mt-2"> Enter Valid Email ID and Password</div>';
        }
    }
}else{
    ?>
    <script>
     location.href='reqprofile.php';
    </script>
    <?php
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Login</title>
</head>
<body>
    <div class="mt-5 text-center" style="font-size: 30px;">
    <i class="fa fa-stethoscope" aria-hidden="true"></i>
        <span>Blue Sky Consulting</span>
    </div>
    <p class="text-center mt-3" style="font-size: 20px;"><i class="fa fa-user-secret text-info mr-2" aria-hidden="true"></i>Requester Area (Demo)</p>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
              <form action="" class="shadow-lg p-4 mt-4 text-info" method="POST">
                  <div class="form-group">
                  <i class="fa fa-user text-info mr-1" aria-hidden="true"></i> <label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="remail">
                  <small class="form-next">We'll never share your email with anyone else.</small>
                  </div>

                  <div class="form-group mt-2">
                  <i class="fa fa-lock  text-info mr-2" aria-hidden="true"></i><label for="pass" class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="rpass">
                  </div>
                  <button type="submit" class="btn btn-outline-info mt-4 font-weight-bold btn-block shadow-lg ">Login</button>
                  <?php  if(isset($msg)) {echo $msg;}  ?>


                  
              </form>
              <div class="text-center"><a href="index.php" class="btn btn-info mt-3 font-weight-bold shadow">Back To Home</a></div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>