<?php
define('TITLE', 'Success');
include('includes/header.php');
include('dbcon.php'); 
 session_start();
 if($_SESSION['is_login']){
     $rEmail = $_SESSION['remail'];
 } else {
     echo "<script> location.href = 'reqlogin.php' </script>";
 }

$sql = "SELECT * FROM submit_req WHERE requester_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    echo "<div class='ml-5 mt-5'>
    <table class='table'>
    <tbody>
    <tr>
      <th>Request ID</th>
      <td>".$row['requester_id']."</td>
    </tr>
    <tr>
    <th>Name</th>
    <td>".$row['req_name']."</td>
    </tr>
    <tr>
    <th>Email</th>
    <td>".$row['req_email']."</td>
    </tr>
    <tr>
    <th>Request Info</th>
    <td>".$row['req_info']."</td>
    </tr>
    <tr>
    <th>Request Description</th>
    <td>".$row['req_desc']."</td>
    </tr>

    <tr>
    <td><form class='d-print-none'><input class='btn btn-danger' type='submit' value='Print' onClick='window.print()'></form></td>
  </tr>
    </tbody>
    </table>
    ";

}else{
    echo "Failed";
}

?>

<?php

include('includes/footer.php');

?>