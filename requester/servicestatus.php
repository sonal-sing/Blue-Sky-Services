<?php
define('TITLE', 'Check Status');
define('PAGE', 'servicestatus');
include('dbcon.php');
include('includes/header.php');
session_start();
if($_SESSION['is_login']){
    $rEmail = $_SESSION['remail'];
} else {
    echo "<script> location.href = 'reqlogin.php';</script>";
}

?>

<!-- Start 2nd Column-->
<div class="col-sm-6 mt-5 mx-3">
 <form action="" method="POST"class="form-inline d-print-none">
  <div class="form-group mr-3">
  <label for="inputid">Enter Request ID: </label>
  <input type="text" class="form-control ml-3" id="inputid" name="inputid" onkeypress="isInputNumber(event)" placeholder="Enter Request ID">
  <button type="submit" class="btn btn-success ml-3" name="">Search</button>
  </div>
 </form>

 <?php
  
  if(isset($_REQUEST['inputid'])){
    if(($_REQUEST['inputid']) == ""){
        $msg = '<div class = "alert alert-info mt-3" role="alert">Fill all the fields</div>';
    }else{
        $sql = "SELECT * FROM ass WHERE req_id = {$_REQUEST['inputid']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        if(($row['req_id'] == $_REQUEST['inputid'])){
          
          ?>
      
          <h3 class= "text-center mt-5 mb-5">Assigned Work Details</h3>
          <table class="table table-striped">
              <tbody>
                  <tr>
                      <th scope="row">Request ID </th>
                      <td><?php if(isset($row['req_id'])) {echo $row['req_id'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Request Info </th>
                      <td><?php if(isset($row['r_info'])) {echo $row['r_info'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Request Description </th>
                      <td><?php if(isset($row['r_desc'])) {echo $row['r_desc'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Name </th>
                      <td><?php if(isset($row['r_name'])) {echo $row['r_name'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Address 1 </th>
                      <td><?php if(isset($row['r_add1'])) {echo $row['r_add1'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Address 2 </th>
                      <td><?php if(isset($row['r_add2'])) {echo $row['r_add2'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">City </th>
                      <td><?php if(isset($row['r_city'])) {echo $row['r_city'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">State </th>
                      <td><?php if(isset($row['r_state'])) {echo $row['r_state'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Zip </th>
                      <td><?php if(isset($row['r_zip'])) {echo $row['r_zip'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Email </th>
                      <td><?php if(isset($row['r_email'])) {echo $row['r_email'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Contact</th>
                      <td><?php if(isset($row['r_contact'])) {echo $row['r_contact'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Date </th>
                      <td><?php if(isset($row['r_date'])) {echo $row['r_date'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Technician </th>
                      <td><?php if(isset($row['t_assign'])) {echo $row['t_assign'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Date Assigned </th>
                      <td><?php if(isset($row['d_assign'])) {echo $row['d_assign'];}?></td>
                  </tr>
                  <tr>
                      <th scope="row">Techncian Sign</th>
                      <td></td>
                  </tr>
                  <tr>
                      <th scope="row">Requester Sign</th>
                      <td></td>
                  </tr>
              </tbody>
          
          </table>
          
          <div class="float-right d-print-none">
              <form class="mt-2">
                  <input type="button" class="btn btn-success mr-2" value=" Print " onclick="window.print()">
                  <input type="button" class="btn btn-secondary" value="Close">
              </form>
          </div>

          <?php if(isset($msg)) {echo $msg;} ?>
          <?php } else{
                echo '<div class="alert alert-warning mt-2">Your Request is still pending.</div>';
            }
    }
 
    } ?>


</div>

<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>

<!-- End 2nd Column-->



<?php

include('includes/footer.php');

?>