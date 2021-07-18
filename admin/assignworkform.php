
<?php
if(session_id() == ""){
    session_start();
}
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}

if(isset($_REQUEST['view'])){
$sql = "SELECT * FROM submit_req WHERE requester_id = {$_REQUEST['id']}";
$result = $conn->query($sql);
$row = $result->fetch_assoc(); 
}
if(isset($_REQUEST['close'])){
    $sql = "DELETE FROM `submit_req` WHERE `requester_id` = {$_REQUEST['id']} ";
    $result = $conn->query($sql);
    if($result == TRUE){
        echo '<meta http-equiv="refresh" content= "0;URL=?closed" />';
    }else{
        echo "Unable to delete";
    }
}

if(isset($_REQUEST['assign'])){
    if(($_REQUEST['request_id'] == "") || ($_REQUEST['info'] == "") || ($_REQUEST['requestdesc'] == "") || ($_REQUEST['rname'] == "") || ($_REQUEST['add1'] == "") || ($_REQUEST['add2'] == "" ) || ($_REQUEST['city'] == "") || ($_REQUEST['state'] == "") || ($_REQUEST['zip'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['phone'] == "") || ($_REQUEST['rdate'] == "") || ($_REQUEST['techname'] == "") || ($_REQUEST['t_date'] == "")){
        $msg = '<div class = "alert alert-warning col-md-6 mt-5 mx-5" role="alert" >All Fields are Required</div>'; 
    }else{

        $r_id = $_REQUEST['request_id'];
        $r_info = $_REQUEST['info'];
        $r_desc = $_REQUEST['requestdesc'];
        $r_name = $_REQUEST['rname'];
        $r_add1 = $_REQUEST['add1'];
        $r_add2 = $_REQUEST['add2'];
        $r_city = $_REQUEST['city'];
        $r_state = $_REQUEST['state'];
        $r_zip = $_REQUEST['zip'];
        $r_email = $_REQUEST['remail'];
        $r_phone = $_REQUEST['phone'];
        $r_date = $_REQUEST['rdate'];
        $_rtechname = $_REQUEST['techname'];
        $t_date = $_REQUEST['t_date'];

        $sql = "INSERT INTO `ass`(`req_id`, `r_info`, `r_desc`, `r_name`, `r_add1`, `r_add2`, `r_city`, `r_state`, `r_zip`, `r_email`, `r_contact`, `r_date`, `t_assign`, `d_assign`) VALUES ('$r_id', '$r_info', '$r_desc', '$r_name' , '$r_add1', '$r_add2' , '$r_city' , '$r_state', ' $r_zip', '$r_email', '$r_phone','$r_date','$_rtechname','$t_date')";
        $result = $conn->query($sql);
        if($result == TRUE){
            $msg = '<div class = "alert alert-success col-md-6 mt-5 mx-5" role="alert" >Work Assigned Successfully</div>';
        }else{
            $msg = '<div class = "alert alert-danger col-md-6 mt-5 mx-5" role="alert" >Unable to insert Data</div>';
        }
       

    }
  
}

?>


<div class="col-sm-5 mt-5 jumbotron "> <!--- Start Assigned Work 3rd Column-->
<form action ="" method="POST">
 <h5 class="text-center">Assign Work Order Request</h5>
 <div class="form-group">
   <label for="request_id">Request ID</label>
   <input type="text" class="form-control" id="request_id" value="<?php if(isset($row['requester_id'])) echo $row['requester_id']; ?>" name="request_id" readonly>
 </div>
 <div class="form-group">
        <label for="requestinfo">Request Info</label>
        <input class="form-control" type="text" name="info" value="<?php if(isset($row['req_info'])) echo $row['req_info']; ?>" id="requestinfo" placeholder="Request Information">
    </div>
 <div class="form-group">
        <label for="inputRequestDescription">Description</label>
        <input class="form-control" type="text" name="requestdesc" value="<?php if(isset($row['req_desc'])) echo $row['req_desc']; ?>" id="inputRequestDescription" placeholder="Write Description">
    </div>
    <div class="form-group">
        <label for="inputName">Name</label>
        <input class="form-control" type="text" name="rname" value="<?php if(isset($row['req_name'])) echo $row['req_name']; ?>" id="inputName" placeholder="Name">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
           <label for="inputAddress">Address 1</label>
            <input class="form-control" type="text" name="add1" value="<?php if(isset($row['req_add1'])) echo $row['req_add1']; ?>" id="inputAdress" placeholder="Address 1">
        </div>
        <div class="form-group col-md-6">
           <label for="inputAddress">Address 2</label>
            <input class="form-control" type="text" name="add2"  value="<?php if(isset($row['req_add2'])) echo $row['req_add2']; ?>" id="inputAdress" placeholder="Address 2">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
           <label for="inputCity">City</label>
           <input class="form-control" type="text" name="city"  value="<?php if(isset($row['city'])) echo $row['city']; ?>" id="inputCity" placeholder="Enter City">
        </div>
        <div class="form-group col-md-4">
           <label for="inputState">State</label>
           <input class="form-control" type="text" name="state"  value="<?php if(isset($row['state'])) echo $row['state']; ?>" id="inputState" placeholder="Enter State">
        </div>
        <div class="form-group col-md-4">
           <label for="inputZip">Zip</label>
           <input class="form-control" type="text" name="zip"  value="<?php if(isset($row['zip'])) echo $row['zip']; ?>" id="inputZip" onkeypress="isInputNumber(event)" placeholder="Enter Zip no.">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
           <label for="inputEmail">Email</label>
           <input class="form-control" type="email" name="remail" id="inputEmail"  value="<?php if(isset($row['req_email'])) echo $row['req_email']; ?>" placeholder="Enter Email">
        </div>
        <div class="form-group col-md-4">
           <label for="inputNo">Contact Number</label>
           <input class="form-control" type="number" name="phone" id="inputNo"  value="<?php if(isset($row['contact_no'])) echo $row['contact_no']; ?>" onkeypress="isInputNumber(event)" placeholder="Enter Number">
        </div>
        <div class="form-group col-md-5">
           <label for="inputDate">Date</label>
           <input class="form-control" type="date" name="rdate"  value="<?php if(isset($row['r_date'])) echo $row['r_date']; ?>" id="inputDate" placeholder="Enter Date">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
         <label for="techassigned">Technician Assigned</label>
         <input class="form-control" type="text" name="techname" value="" placeholder="Technician Name" id="techassigned">
        </div>
         <div class="form-group col-md-6">
         <label for="dateassigned">Assigned Date</label>
         <input class="form-control" type="date" name="t_date" value="" placeholder="Date Assigned" id="dateassigned">
        </div>
    </div>

    <div class="float-right">
      <button type="submit" class="btn btn-success" name="assign">Assign</button>
      <button type="reset" class="btn btn-secondary">Reset</button> 
     </div>
    
    <?php if(isset($msg)) { echo $msg; }?>
</form>

</div>

<!-- Only number for input field -->
<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>