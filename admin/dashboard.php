<?php 
define('TITLE', 'Dashboard');
define('PAGE', 'dashboard');
include('includes/header.php');
include('../requester/dbcon.php');
session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}

$sql = "SELECT max(requester_id) FROM submit_req";
$result = $conn->query($sql);
$row = $result->fetch_row();
$submitrequest = $row[0];


$sql1 = "SELECT max(req_id) FROM ass";
$result = $conn->query($sql1);
$row = $result->fetch_row();
$submitassign = $row[0];

$sql2 = "SELECT * FROM technician_tb";
$result = $conn->query($sql2);
$totaltechy = $result->num_rows;
?>


    <div class="col-sm-9 col-md-10"> <!--- Start Dashboard 2nd Column -->
    <div class="row text-center mx-5">
        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Requests Received</div>
                 <div class="card-body">
                 <h4 class="card-title"><?php echo $submitrequest; ?></h4>
                 <a class="btn text-white" href="request.php">View</a>
                 </div>
            </div>
        </div>

        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Assigned Work</div>
                 <div class="card-body">
                 <h4 class="card-title"><?php echo $submitassign; ?></h4>
                 <a class="btn text-white" href="work.php">View</a>
                 </div>
            </div>
        </div>

        <div class="col-sm-4 mt-5">
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">No. of Technician</div>
                 <div class="card-body">
                 <h4 class="card-title"><?Php echo $totaltechy; ?></h4>
                 <a class="btn text-white" href="technician.php">View</a>
                 </div>
            </div>
        </div>
    </div>   
    <div class="mx-5 mt-5 text-center">
        <p class="bg-dark text-white p-2">List of Requesters</p>
    <?php
     
     $sql = "SELECT * FROM reg_login";
     $result = $conn->query($sql);
     if($result->num_rows > 0){
         echo '
         <table class="table">
         <thead>
           <tr>
           <th scope="col">Requester ID</th>
           <th scope="col">Name</th>
           <th scope="col">Email</th>
          </tr>
         </thead>
         <tbody>';
         while($row = $result->fetch_assoc()){
             echo '<tr>';
             echo '<td>'.$row["r_id"].'</td>';
             echo '<td>'.$row["r_name"].'</td>';
             echo '<td>'.$row["r_email"].'</td>';
             echo '</tr>';

         }
         echo '</tbody>
        </table>
         
         ';
     } else {
         echo '0 Results';
     }

    ?>
    </div>

    </div><!--- End Dashboard 2nd Column --->
<?php
  
  include('includes/footer.php');

?>


