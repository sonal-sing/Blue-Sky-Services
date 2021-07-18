<?php
define('TITLE', 'Insert Technician');
define('PAGE', 'inserttech');
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
  <h3 class="text-center">Insert New Technician</h3>
<?php
if(isset($_REQUEST['techinsert'])){
    if(($_REQUEST[''] == "empname") || ($_REQUEST['empemail'] == "") || ($_REQUEST['empmobile'] == "") || ($_REQUEST['empaddress'] == "") ){
        $note = '<div class="alert alert-warning role="alert">Fill All Fields</div>';
    } else{
        $tname = $_REQUEST['empname'];
        $temail = $_REQUEST['empemail'];
        $tmob = $_REQUEST['empmobile'];
        $taddress = $_REQUEST['empaddress'];

        $sql = "INSERT INTO technician_tb (t_name, t_email, t_mobile, t_address) VALUES ('$tname','$temail','$tmob','$taddress')";
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
          <input type="text" id="inputname" name="empname" class="form-control" placeholder="Enter Name">

          <label class="mt-2" for="inputemail">Email</label>
          <input type="email" id="inputemail" name="empemail" class="form-control" placeholder="Enter Email">

          <label class="mt-2" for="inputmob">Contact No.</label>
          <input type="text" id="inputmob" name="empmobile" class="form-control" onkeypress="isInputNumber(event)" placeholder="Enter Contact No.">

          <label class="mt-2 mb-4" for="inputadd">Address</label>
          <input type="text" id="inputadd" name="empaddress" class="form-control" placeholder="Enter Address">

          

 <?php if(isset($note)) {echo $note;} ?>
 <div class="text-center mt-2 mb-2">
     <button type="submit" class="btn btn-danger" id="techinsert" name="techinsert">Submit</button>
     <a href="technician.php" class="btn btn-secondary">Close</a>
    

 </div>


</form>

 </div>
<!-- End 2nd Column-->

<!-- Only number for input field -->
<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>

<?php
 include('includes/footer.php');
?>