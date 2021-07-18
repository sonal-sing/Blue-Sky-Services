<?php
define('TITLE', 'Requests');
define('PAGE', 'request');
 include('includes/header.php');
 include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
?>

<!-- Start 2nd Column  -->
  <div class="col-sm-4">
    <?php
     $sql = "SELECT requester_id, req_info , req_desc , r_date FROM submit_req";
     $result = $conn->query($sql);
     if($result->num_rows > 0){
         while($row = $result->fetch_assoc()){
             echo '<div class="card mt-5 mx-5">';
             echo '<div class="card-header">';
              echo 'Request ID:'.$row['requester_id'];
              echo '</div>';
              echo '<div class="card-body">';
              echo '<h5 class="card-title">Request Info :'.$row['req_info'].'</h5 >';
              echo '<p class="card-text">'.$row['req_desc'].'</p>';
              echo '<p class="card-text">Request Date :'.$row['r_date'].'</p>';
              echo '<div class="float-right">';
              echo '<form action="" method="POST"> <input type="hidden" name="id" value='. $row["requester_id"] .'><input type="submit" class="btn btn-danger mr-3" name="view" value="View"><input type="submit" class="btn btn-secondary" name="close" value="Close"></form>';
              echo '</div>';
              echo'</div>';
              echo '</div>';
              
         }
     }
    ?>
   </div>
<!-- End 2nd Column  -->




<?php
 include('assignworkform.php');
 include('includes/footer.php');
?>