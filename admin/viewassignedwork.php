<?php
define('TITLE', 'Assigned Work');
define('PAGE', 'viewassigned');
include('includes/header.php');
include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
?>
<!--- Start 2nd Column --->
 <div class="col-sm-6 mt-5 mx-3">
  <h3 class="text-center">Assigned Work Details</h3>
 

 <?php
 if(isset($_REQUEST['view'])){
    $sql = "SELECT * FROM ass WHERE req_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(($row['req_id'] == $_REQUEST['id'])){
      
      ?>
      <table class="table table-stripe mt-3">
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
          <form class="mt-2 d-inline">
              <input type="submit" class="btn btn-success mr-2" value=" Print " onclick="window.print()">
          </form>
          <form action="work.php" method="POST" class="d-inline">
              <input type="submit" class="btn btn-secondary" value="Close">
          </form>
      </div>
      <?php } 
   
 }

?>
</div>
<!--- End 2nd Column --->



<?php
 include('includes/footer.php');
?>