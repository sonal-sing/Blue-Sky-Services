<?php
define('TITLE', 'Change Password');
define('PAGE','changepass');
include('includes/header.php');
include('dbcon.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['remail'];
}else{
    echo "<script> location.href='reqlogin.php';</script>";
  }
$rEmail = $_SESSION['remail'];
if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['rpass'] == "")){
      $msg = '<div class="alert alert-warning mt-2" role="alert">Fill All Fields</div>';
  }else{
      $sql1 = "SELECT * FROM reg_login WHERE r_email='$rEmail'";
      $result = $conn->query($sql1);
      if($result->num_rows == 1){
        $rPass = $_REQUEST['rpass'];
        $sql2 = "UPDATE reg_login SET r_password = '$rPass' WHERE r_email = '$rEmail'";
        if($conn->query($sql2) == TRUE){
            $msg = '<div class="alert alert-success mt-2" role="alert">Your Password Updated Successfully</div>';
        } else{
            $msg = '<div class="alert alert-danger mt-2" role="alert">Unable to Update</div>';
        }
      }
  }
}
  
?>


<div class="col-sm-6 col-md-6"><!-- Start user change password code-->
  <form class="mt-5 mx-5" action="" method="POST">
    <div class="form-group">
      <label for="inputemail">Email</label>
       <input type="email" class="form-control" name="remail" id="inputemail" value="<?php echo $rEmail;  ?>" readonly>
    </div>  
    <div class="form-group">
      <label for="inputpassword">Password</label>
       <input type="password" class="form-control" name="rpass" id="inputpassword" placeholder="New Password">
    </div>  
    <button type="submit" name="passupdate" class="btn btn-info">Update</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <?php if(isset($msg)) {echo $msg;} ?>
  </form>
</div><!-- Start user change password code-->

<?php

include('includes/footer.php');

?>