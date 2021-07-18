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

<!-- Start 2nd Column-->
<div class="col-sm-6 mt-5 mx-5 jumbotron">
  <h3 class="text-center">Insert New Requester</h3>
<?php
if(isset($_REQUEST['reqinsert'])){
    if(($_REQUEST['r_name'] == "") || ($_REQUEST['r_email'] == "") || ($_REQUEST['r_pass'] == "") ){
        $note = '<div class="alert alert-warning role="alert">Fill All Fields</div>';
    } else{
        $rname = $_REQUEST['r_name'];
        $remail = $_REQUEST['r_email'];
        $rpass = $_REQUEST['r_pass'];

        $sql = "INSERT INTO reg_login (r_name, r_email, r_password) VALUES ('$rname','$rname','$rpass')";
        if($conn->query($sql) == TRUE){
            $note = '<div class="alert alert-success role="alert">Inserted Successfully</div>';
        }else{
            $note = '<div class="alert alert-info role="alert">Unable to Update</div>';
        }
    }
}
?>
  <form action="" method="POST">
      <div class="form-group">

          <label class="mt-5" for="inputname">Name</label>
          <input type="text" id="inputname" name="r_name" class="form-control" placeholder="Enter Name">

          <label class="mt-2" for="inputemail">Email</label>
          <input type="email" id="inputemail" name="r_email" class="form-control" placeholder="Enter Email">

          <label class="mt-2" for="inputpass">Password</label>
          <input type="password" id="inputpass" name="r_pass" class="form-control mb-3" placeholder="Enter Password">

 <?php if(isset($note)) {echo $note;} ?>
 <div class="text-center mt-2 mb-2">
     <button type="submit" class="btn btn-danger" id="reqinsert" name="reqinsert">Submit</button>
    

 </div>


</form>

 </div>
<!-- End 2nd Column-->
<?php
 include('includes/footer.php');
?>