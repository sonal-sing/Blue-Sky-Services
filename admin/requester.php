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

<!-- Start 2nd Column -->
<div class="col-sm-9 col-md-10 mt-5 text-center">
<p class="bg-dark text-white p-2">List of Requesters</p>
<?php 
  $sql = "SELECT * FROM reg_login";
  $result = $conn->query($sql);
  if($result->num_rows > 0){

     echo '<table class="table table-striped">';
      echo '<thead>';
       echo '<tr>';
        echo '<th scope="col">Requester ID</th>';
        echo '<th scope="col">Name</th>';
        echo '<th scope="col">Email</th>';
        echo '<th scope="col">Action</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
       while($row = $result->fetch_assoc()){
           echo '<tr>';
            echo '<td>'.$row["r_id"].'</td>';
            echo '<td>'.$row["r_name"].'</td>';
            echo '<td>'.$row["r_email"].'</td>';
            echo '<td>';
             echo '<form action="editreq.php" method="POST" class="d-inline">';
              echo '<input type="hidden" name="id" value='.$row['r_id'].'><button class="btn btn-info mr-2" type="submit" name="edit" value="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></button>';
             echo '</form>';

             echo '<form action="" method="POST" class="d-inline">';
              echo '<input type="hidden" name="delete" value='.$row['r_id'].'><button class="btn btn-secondary mr-2" type="submit" name="del" value="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
             echo '</form>';
            echo '</td>';

           echo '</tr>';
       }
      echo '</tbody>';
      echo '</table>';
}
?>

</div>
<!-- End 2nd Column -->

<?php
 if(isset($_REQUEST['del'])){
     $rid = $_REQUEST['delete'];
     $sql = "DELETE FROM `reg_login` WHERE r_id = '$rid' ";
     if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content= "0;URL=?deleted" />';
     }else{
        echo "Unable to Delete";
     }
 }
?>
<!-- footer section -->
</div><!-- End Row -->
<div class="float-right mt-5">
     <button class="btn btn-info"><a href="insertreq.php"><i class="fa fa-plus fa-2x" style="color:#fff;" aria-hidden="true"></i></a></button>
</div>
 </div> <!-- end container -->
       
    
    

    <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>