<?php
define('TITLE', 'Submit Request');
define('PAGE','submitreq');
include('includes/header.php');
include('dbcon.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['remail'];
}else {
    echo "<script> location.href='reqlogin.php'</script>";
}

if(isset($_REQUEST['submitbtn'])){
    //Checking whether any field is empty or not
    if(($_REQUEST['info'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['rname'] == "") || ($_REQUEST['add1'] == "") || ($_REQUEST['add2'] == "") || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['zip'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['date'] == "")){
         $msg = '<div class = "alert alert-warning col-sm-6 mt-2" role="alert">All Fields are Required</div>';
    } else{
      $rinfo = $_REQUEST['info'];
      $rdesc = $_REQUEST['requestdesc'];
      $rname = $_REQUEST['rname'];
      $radd1 = $_REQUEST['add1'];
      $radd2 = $_REQUEST['add2'];
      $rcity = $_REQUEST['city'];
      $rstate = $_REQUEST['state'];
      $rzip = $_REQUEST['zip'];
      $remail = $_REQUEST['remail'];
      $rphone = $_REQUEST['phone'];
      $rdate = $_REQUEST['date'];
      $sql = "INSERT INTO `submit_req`(`req_info`, `req_desc`, `req_name`, `req_add1`, `req_add2`, `city`, `state`, `zip`, `req_email`, `contact_no`, `r_date`) VALUES ('$rinfo','$rdesc','$rname','$radd1','$radd2','$rcity','$rstate','$rzip','$remail','$rphone','$rdate')";
      if($conn->query($sql) == TRUE){
          $genid = mysqli_insert_id($conn);
          $msg = '<div class = "alert alert-success col-sm-6 mt-2" role="alert">Request Submitted Successfully</div>';
          $_SESSION['myid'] = $genid;
          echo "<script> location.href='submitreqsuccess.php'</script>";
      }else{
        $msg = '<div class = "alert alert-danger col-sm-6 mt-2" role="alert">Request Not Submitted</div>';
      }

    }
}

?>

<div class="col-sm-10 col-md-9 mt-5">  <!--Start Service Request Form 2nd Column -->
<form class="mx-5" action="" method="POST">
    <div class="form-group">
        <label for="requestinfo">Request Info</label>
        <input class="form-control" type="text" name="info" id="requestinfo" placeholder="Request Information">
    </div>
    <div class="form-group">
        <label for="inputRequestDescription">Description</label>
        <input class="form-control" type="text" name="requestdesc" id="inputRequestDescription" placeholder="Write Description">
    </div>
    <div class="form-group">
        <label for="inputName">Name</label>
        <input class="form-control" type="text" name="rname" id="inputName" placeholder="Name">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
           <label for="inputAddress">Address 1</label>
            <input class="form-control" type="text" name="add1" id="inputAdress" placeholder="Address 1">
        </div>
        <div class="form-group col-md-6">
           <label for="inputAddress">Address 2</label>
            <input class="form-control" type="text" name="add2" id="inputAdress" placeholder="Address 2">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
           <label for="inputCity">City</label>
           <input class="form-control" type="text" name="city" id="inputCity" placeholder="Enter City">
        </div>
        <div class="form-group col-md-4">
           <label for="inputState">State</label>
           <input class="form-control" type="text" name="state" id="inputState" placeholder="Enter State">
        </div>
        <div class="form-group col-md-2">
           <label for="inputZip">Zip</label>
           <input class="form-control" type="text" name="zip" id="inputZip" onkeypress="isInputNumber(event)" placeholder="Enter Zip no.">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
           <label for="inputEmail">Email</label>
           <input class="form-control" type="email" name="remail" id="inputEmail" placeholder="Enter Email">
        </div>
        <div class="form-group col-md-3">
           <label for="inputNo">Contact Number</label>
           <input class="form-control" type="number" name="phone" id="inputNo" onkeypress="isInputNumber(event)" placeholder="Enter Number">
        </div>
        <div class="form-group col-md-3">
           <label for="inputDate">Date</label>
           <input class="form-control" type="date" name="date" id="inputDate" placeholder="Enter Date">
        </div>
    </div>
    <button class="btn btn-info mt-3 mr-3" type="submit" name="submitbtn">Submit</button>
    <button class="btn btn-secondary mt-3" type="reset" name="resetbtn">Reset</button>
</form>
<?php if(isset($msg)) {echo $msg;} ?>

</div>  <!--End Service Request Form 2nd Column-->

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