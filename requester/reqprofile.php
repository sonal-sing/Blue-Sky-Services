<?php
define('TITLE', 'Requester Profile');
define('PAGE', 'reqprofile');
include('includes/header.php');
include('dbcon.php'); 
 session_start();
 if($_SESSION['is_login']){
     $rEmail = $_SESSION['remail'];
 } else {
     echo "<script> location.href = 'reqlogin.php' </script>";
 }
 $sql = "SELECT r_name , r_email FROM reg_login WHERE r_email = '$rEmail'";
 $result = $conn->query($sql);
 if($result->num_rows == 1){
     $row = $result->fetch_assoc();
     $rName = $row['r_name'];
 }

 if(isset($_REQUEST['nameupdate'])){
     if($_REQUEST['rname'] == ""){
         $errmessage = '<div class = "alert alert-warning col-sm-12  mt-3" role= "alert">Fill all the Fields</div>';
     }else{
         $rName = $_REQUEST['rname'];
         $sql = "UPDATE reg_login SET r_name = '$rName' WHERE r_email='$rEmail' ";
         if($conn->query($sql) == TRUE){
             $errmessage = '<div class="alert alert-success col-sm-12 mt-3" role="alert">Updated Successfully</div>'; 
         } else {
            $errmessage = '<div class="alert alert-danger col-sm-12 mt-3" role="alert">Unable to Update</div>';
         }
     } 
 }

?>

        <div> 
         <div class="col-sm-12 mt-5 mx-5">
          <form action="" method="POST">
            <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" name="remail" id="exampleInputEmail1" value="<?php echo $rEmail ?>" readonly>
              
            </div>
           <div class="form-group">
            <label for="exampleInputName">Name</label>
             <input type="text" class="form-control" name="rname" id="exampleInputName" value="<?php echo $rName ?>">
           </div>
          <button type="submit" class="btn btn-info" name="nameupdate">Update</button>
          <?php if(isset($errmessage)) {echo $errmessage ;} ?>
         </form>
         </div>
        </div><!--End profile area 2nd column -->
<?php

include('includes/footer.php');

?>