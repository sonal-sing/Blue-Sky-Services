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
if(isset($_REQUEST['sell'])){
    $sql = "SELECT * FROM products_tb WHERE p_id = {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
if(isset($_REQUEST['productsell'])){
    if(($_REQUEST['p_id'] == "") || ($_REQUEST['custname'] == "") || ($_REQUEST['custadd'] == "") || ($_REQUEST['productname'] == "") || ($_REQUEST['quantity'] == "") || ($_REQUEST['productsp'] == "") || ($_REQUEST['totalp'] == "") || ($_REQUEST['pdate'] == "")){
        $note = '<div class="alert alert-warning" role="alert">Fill All Fields</div>'; 
    }else{
      $p_id = $_REQUEST['p_id'];
      $pava = $_REQUEST['productavail'] - $_REQUEST['quantity'];
      $custname = $_REQUEST['custname'];
      $custadd = $_REQUEST['custadd'];
      $productname = $_REQUEST['productname'];
      $quantity = $_REQUEST['quantity'];
      $productsp = $_REQUEST['productsp'];
      $totalp = $_REQUEST['totalp'];
      $pdate = $_REQUEST['pdate'];

      $sql = "INSERT INTO customer_tb(custname, custadd, cpname, cpquantity, cpeach, cptotal, cpdate) VALUES ('$custname', '$custadd', '$productname', '$quantity', '$productsp', '$totalp', '$pdate')";
      if($conn->query($sql) == TRUE){
          $genid = mysqli_insert_id($conn);
          session_start();
          $_SESSION['myid'] = $genid;
          echo "<script> location.href = 'productsuccess.php';</script>";
      }

      $sqlup = "UPDATE products_tb SET pavail = '$pava' WHERE p_id = '$p_id'"; 
      $conn->query($sqlup);
      


    }
}
?>

<!-- Start 2nd Column -->
<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Customer Bill</h3>

  <form action="" method="POST">
      <div class="form-group">
          <label class="mt-5" for="inputid">Product ID</label>
          <input type="text" id="inputid" name="p_id" class="form-control" value="<?php if(isset($row['p_id'])) {echo $row['p_id'];} ?>" readonly>
          
          <label class="mt-2" for="inputnamecust">Customer Name</label>
          <input type="text" id="inputnamecust" name="custname" class="form-control">

          <label class="mt-2" for="inputadd">Customer Address</label>
          <input type="text" id="inputadd" name="custadd" class="form-control">

          <label class="mt-2" for="inputname">Product Name</label>
          <input type="text" id="inputname" name="productname" class="form-control" value="<?php if(isset($row['pname'])) {echo $row['pname'];} ?>" readonly>

          <label class="mt-2" for="inputavail">Available</label>
          <input type="number" id="inputavail" name="productavail" class="form-control" value="<?php if(isset($row['pavail'])) {echo $row['pavail'];} ?>" readonly>

          <label class="mt-2" for="inputq">Quantity</label>
          <input type="number" id="inputq" name="quantity" class="form-control" onkeypress="isInputNumber(event)">

          <label class="mt-2" for="inputsp">Price Each</label>
          <input type="text" id="inputsp" name="productsp" class="form-control" value="<?php if(isset($row['psellingprice'])) {echo $row['psellingprice'];} ?>">

          <label class="mt-2" for="inputp">Total Price</label>
          <input type="text" id="inputp" name="totalp" class="form-control" onkeypress="isInputNumber(event)">

          <label class="mt-2" for="pdate">Date of Purchase</label>
          <input type="date" id="pdat"e name="pdate" class="form-control">

 <?php if(isset($note)) {echo $note;} ?>
 <div class="text-center mt-2 mb-2">
     <button type="submit" class="btn  btn-success" id="productsell" name="productsell">Submit</button>
     <a href="assets.php" class="btn btn-secondary">Close</a>

 </div>


</form>
 </div>

<!-- End 2nd Column -->

<!-- Only number for input field -->
<script>
    function isInputNumber(evt) {
        var ch = String.fromCharCode(evt.which);
        if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
        }
    }
</script>

<?php
 include('includes/footer.php');
?>