<?php
define('TITLE', 'Work Order');
define('PAGE', 'work');
include('includes/header.php');
include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
?>

<!--- Start 2nd Column-->
 <div class="col-sm-9 col-md-10 mt-5">
   <?php  
   $sql = "SELECT * FROM `ass` ";
   $result = $conn->query($sql);
   if($result->num_rows > 0){
     echo "<table class='table'>";
     echo '<thead>';
     echo '<tr style="font-size:14px;">';
     echo "<th scope='col'>Req ID</th>";
     echo "<th scope='col'>Req Info</th>";
     echo "<th scope='col'>Name</th>";
     echo "<th scope='col'>Address</th>";
     echo "<th scope='col'>City</th>";
     echo "<th scope='col'>State</th>";
     echo "<th scope='col'>Zip</th>";
     echo "<th scope='col'>Contact</th>";
     echo "<th scope='col'>Technician</th>";
     echo "<th scope='col'>Date</th>";
     echo "<th scope='col'>Action</th>";
     echo "</tr>";
     echo "</thead>";
     echo '<tbody>';
     while($row = $result->fetch_assoc()){
         echo '<tr style="font-size:14px;">';
          echo '<td>'.$row['req_id'].'</td>';
          echo '<td>'.$row['r_info'].'</td>';
          echo '<td>'.$row['r_name'].'</td>';
          echo '<td>'.$row['r_add1'].'</td>';
          echo '<td>'.$row['r_city'].'</td>';
          echo '<td>'.$row['r_state'].'</td>';
          echo '<td>'.$row['r_zip'].'</td>';
          echo '<td>'.$row['r_contact'].'</td>';
          echo '<td>'.$row['t_assign'].'</td>';
          echo '<td>'.$row['d_assign'].'</td>';
          echo '<td>';
          echo '<form action="viewassignedwork.php" method="POST" class="d-inline">';
           echo '<input type="hidden" name="id" value='.$row['req_id'].'><button class="btn btn-warning" name="view" value="View" type="submit"><i class="fa fa-eye" aria-hidden="true"></i></button>';
           echo '</form>';
           echo '<form action="" method="POST" class="d-inline">';
           echo '<input type="hidden" name="id" value='.$row['req_id'].'><button class="btn btn-danger ml-2" name="del" value="Delete" type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>';
          echo '</form>';
          echo '</td>';
        echo '</tr>';

     }
     echo '</tbody>';
     echo "</table>";
   }else{
     echo '0 Result';
   }

   if(isset($_REQUEST['del'])){
   $sql = "DELETE FROM ass WHERE req_id = {$_REQUEST['id']}";
   if($conn->query($sql) == TRUE){
   }else{
    echo "unable to delete";
   }
   }
   ?>
 </div>
<!--- End 2nd Column-->




<?php
 include('includes/footer.php');
?>