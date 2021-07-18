<?php
define('TITLE', 'Sell Product');
define('PAGE', 'sellproduct');
 include('includes/header.php');
 include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}

$sql = "SELECT * FROM customer_tb WHERE cust_id = {$_SESSION['myid']}";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    echo "<div class= 'ml-5 mt-5'>
    <h3 class = 'text-center'>Customer Bill</h3>
    <table class = 'table'>
    <tbody>
    <tr>
     <th>Customer ID</th>
     <td>".$row['cust_id']."</td>
    </tr>
    <tr>
    <th>Customer Name</th>
    <td>".$row['custname']."</td>
    </tr>
    <tr>
    <th>Customer Address</th>
    <td>".$row['custadd']."</td>
    </tr>
    <tr>
    <th>Product Name</th>
    <td>".$row['cpname']."</td>
    </tr>
    <tr>
    <th>Quantity</th>
    <td>".$row['cpquantity']."</td>
    </tr>
    <tr>
    <th>Price Each</th>
    <td>".$row['cpeach']."</td>
    </tr>
    <tr>
    <th>Total Price</th>
    <td>".$row['cptotal']."</td>
    </tr>
    <tr>
    <th>Date of Purchase</th>
    <td>".$row['cpdate']."</td>
    </tr>
    <tr>
    <td><form class='d-print-none'><input class = 'btn btn-info' type = 'submit' value = 'Print' onclick='window.print()'></form></td>
    <td><a href='assets.php' class='btn btn-secondary d-print-none'>Close</a></td>
    </tr>
    </tbody>
  </table></div>
  ";


} else {
    echo "Failed";
}
?>


<?php
 include('includes/footer.php');
?>