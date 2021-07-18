<?php
define('TITLE', 'Change Password');
define('PAGE', 'changepassword');
 include('includes/header.php');
 include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
$aEmail = $_SESSION['aemail'];
if(isset($_REQUEST['passupdate'])){
  if(($_REQUEST['apass'] == "")){
      $msg = '<div class="alert alert-warning mt-2" role="alert">Fill All Fields</div>';
  }else{
      $sql1 = "SELECT * FROM admin_tb WHERE a_email='$aEmail'";
      $result = $conn->query($sql1);
      if($result->num_rows == 1){
        $aPass = $_REQUEST['apass'];
        $sql2 = "UPDATE admin_tb SET a_password = '$aPass' WHERE a_email = '$aEmail'";
        if($conn->query($sql2) == TRUE){
            $msg = '<div class="alert alert-success mt-2" role="alert">Your Password Updated Successfully</div>';
        } else{
            $msg = '<div class="alert alert-danger mt-2" role="alert">Unable to Update</div>';
        }
      }
  }
}
?>

<div class="col-sm-6 col-md-6"><!-- Start Admin change password code-->
  <form class="mt-5 mx-5" action="" method="POST">
    <div class="form-group">
      <label for="inputemail">Email</label>
       <input type="email" class="form-control" name="aemail" id="inputemail" value="<?php echo $aEmail;  ?>" readonly>
    </div>  
    <div class="form-group">
      <label for="inputpassword">Password</label>
       <input type="password" class="form-control" name="apass" id="inputpassword" placeholder="New Password">
    </div>  
    <button type="submit" name="passupdate" class="btn btn-info">Update</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
    <?php if(isset($msg)) {echo $msg;} ?>
  </form>
</div><!-- Start Admin change password code-->





<?php
 include('includes/footer.php');
?>