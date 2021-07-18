<?php
define('TITLE', 'Work Report');
define('PAGE', 'workreport');
 include('includes/header.php');
 include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
?>

<!--- Start 2nd Column -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
 <form action="" method="POST" class="d-print-none">
 <div class="form-row">
  <div class="form-group col-md-2">
   <input type="date" class="form-control" id="startdate" name="startdate">
  </div><span> to </span>
  <div class="form-group col-md-2">
    <input type="date" class="form-control" id="enddate" name="enddate">
  </div>
  <div class="form-group">
      <input type="submit" class="btn btn-secondary" name="searchsubmit" value="Search">

  </div>
 </div>
 </form>
 <?php
 if(isset($_REQUEST['searchsubmit'])){
     $startdate = $_REQUEST['startdate'];
     $enddate = $_REQUEST['enddate'];
     $sql = "SELECT * FROM ass WHERE r_date BETWEEN '$startdate' AND '$enddate'";
     $result = $conn->query($sql);
     if($result->num_rows > 0){
         echo '<p class = "bg-dark text-white p-2 mt-4">Details</p>';
         echo '<table class="table">';
          echo '<thead>';
           echo '<tr>';
            echo '<th scope="col">Request ID</th>';
            echo '<th scope="col">Request Info</th>';
            echo '<th scope="col">Requester Name</th>';
            echo '<th scope="col">Requester Address 1 </th>';
            echo '<th scope="col">Requester Address 2 </th>';
            echo '<th scope="col">City</th>';
            echo '<th scope="col">State</th>';
            echo '<th scope="col">Zip</th>';
            echo '<th scope="col">Email</th>';
            echo '<th scope="col">Contact</th>';
            echo '<th scope="col">Date</th>';
            echo '<th scope="col">Technician</th>';
            echo '<th scope="col">Date Assigned</th>';
           echo '</tr>';
          echo '</thead>';
          echo '<tbody>';
           while($row = $result->fetch_assoc()){
               echo '<tr>';
               echo '<td>'.$row['req_id'].'</td>';
               echo '<td>'.$row['r_info'].'</td>';
               echo '<td>'.$row['r_name'].'</td>';
               echo '<td>'.$row['r_add1'].'</td>';
               echo '<td>'.$row['r_add2'].'</td>';
               echo '<td>'.$row['r_city'].'</td>';
               echo '<td>'.$row['r_state'].'</td>';
               echo '<td>'.$row['r_zip'].'</td>';
               echo '<td>'.$row['r_email'].'</td>';
               echo '<td>'.$row['r_contact'].'</td>';
               echo '<td>'.$row['r_date'].'</td>';
               echo '<td>'.$row['t_assign'].'</td>';
               echo '<td>'.$row['d_assign'].'</td>';
               echo '</tr>';
           }
           
          echo '</tbody>';
         
         echo '<tr>';
            echo '<td>';
             echo '<input type="submit" class="btn btn-info d-print-none" value = "Print" onclick = "window.print()">';
            echo '</td>';
           echo '</tr>';
           echo '</table>';
     }  else {
         echo "<dv class='alert alert-warning col-sm-6 ml-5 mt-2' role='alert'>No Records Found ! </div>";
     }
 }
 ?>
 </div>
<!-- End 2nd Column -->




<?php
 include('includes/footer.php');
?>