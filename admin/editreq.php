<?php
define('TITLE', 'Requester');
define('PAGE', 'requester');
 include('includes/header.php');
 include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
?>
<!-- Start 2nd Column -->
 <div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Update Requester Details</h3>
  <?php
   if(isset($_REQUEST['edit'])){
   $sql = "SELECT * FROM reg_login WHERE r_id = {$_REQUEST['id']}";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   }
   if(isset($_REQUEST['requpdate'])){
       if(($_REQUEST['r_id'] == "") || ($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "")){
           $note = '<div class="alert alert-warning" role="alert">Fill All Fields</div>'; 
       }else{
           $rid = $_REQUEST['r_id'];
           $rname = $_REQUEST['r_name'];
           $remail = $_REQUEST['r_email'];
           $sql = "UPDATE reg_login SET r_id = '$rid', r_name = '$rname', r_email = '$remail' WHERE r_id = '$rid'";
           if($conn->query($sql) == TRUE){
               $note = '<div class="alert alert-success" role="alert">Updated Successfully</div>';
           }else{
            $note = '<div class="alert alert-secondary" role="alert">Unable to Update</div>'; 
           }

       }
   }

  ?>
  <form action="" method="POST">
      <div class="form-group">
          <label class="mt-5" for="inputid">Requester ID</label>
          <input type="text" id="inputid" name="r_id" class="form-control" value="<?php if(isset($row['r_id'])) {echo $row['r_id'];} ?>" readonly>
          
          <label class="mt-2" for="inputname">Name</label>
          <input type="text" id="inputname" name="r_name" class="form-control" value="<?php if(isset($row['r_name'])) {echo $row['r_name'];} ?>">

          <label class="mt-2" for="inputemail">Email</label>
          <input type="email" id="inputemail" name="r_email" class="form-control mb-3" value="<?php if(isset($row['r_email'])) {echo $row['r_email'];} ?>">

 <?php if(isset($note)) {echo $note;} ?>
 <div class="text-center mt-2 mb-2">
     <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
     <a href="assets.php" class="btn btn-secondary">Close</a>

 </div>


</form>
 </div>

<!-- End 2nd Column -->


<?php
 include('includes/footer.php');
?>