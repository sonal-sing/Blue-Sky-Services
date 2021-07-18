<?php
define('TITLE', 'Edit Product');
define('PAGE', 'editproduct');
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
<div class="col-sm-6 mt-5 mx-3 jumbotron">
  <h3 class="text-center">Update Product Details</h3>
  <?php
   if(isset($_REQUEST['edit'])){
   $sql = "SELECT * FROM products_tb WHERE p_id = {$_REQUEST['id']}";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   }
   if(isset($_REQUEST['productupdate'])){
       if(($_REQUEST['p_id'] == "") || ($_REQUEST['productname'] == "") || ($_REQUEST['productdate'] == "") || ($_REQUEST['productavail'] == "") || ($_REQUEST['producttotal'] == "") || ($_REQUEST['productcp'] == "") || ($_REQUEST['productsp'] == "")){
           $note = '<div class="alert alert-warning" role="alert">Fill All Fields</div>'; 
       }else{
           $p_id = $_REQUEST['p_id'];
           $productname = $_REQUEST['productname'];
           $productdate = $_REQUEST['productdate'];
           $productavail = $_REQUEST['productavail'];
           $producttotal = $_REQUEST['producttotal'];
           $productcp = $_REQUEST['productcp'];
           $productsp = $_REQUEST['productsp'];

           $sql = "UPDATE products_tb SET p_id = '$p_id', pname = '$productname', pdop = '$productdate', pavail = '$productavail', ptotal = '$producttotal', pcostprice = '$productcp' , psellingprice = '$productsp'  WHERE p_id = '$p_id'";
           if($conn->query($sql) == TRUE){
               $note = '<div class="alert alert-success" role="alert">Updated Successfully</div>';
           }else{
            $note = '<div class="alert alert-secondary" role="alert">Unable to Update</div>'; 
           }

       }
   }

  ?>
  <form action="" method="POST">
      <div class="form-group">
          <label class="mt-5" for="inputid">Product ID</label>
          <input type="text" id="inputid" name="p_id" class="form-control" value="<?php if(isset($row['p_id'])) {echo $row['p_id'];} ?>" readonly>
          
          <label class="mt-2" for="inputname">Product Name</label>
          <input type="text" id="inputname" name="productname" class="form-control" value="<?php if(isset($row['pname'])) {echo $row['pname'];} ?>">

          <label class="mt-2" for="inputdate">Date of Purchase</label>
          <input type="date" id="inputdate" name="productdate" class="form-control" value="<?php if(isset($row['pdop'])) {echo $row['pdop'];} ?>">

          <label class="mt-2" for="inputavail">Available Items</label>
          <input type="number" id="inputavail" name="productavail" class="form-control" value="<?php if(isset($row['pavail'])) {echo $row['pavail'];} ?>">

          <label class="mt-2" for="inputcp">Total Items</label>
          <input type="number" id="inputcp" name="producttotal" class="form-control" value="<?php if(isset($row['ptotal'])) {echo $row['ptotal'];} ?>">

          <label class="mt-2" for="inputprice">Cost Price</label>
          <input type="text" id="inputprice" name="productcp" class="form-control" value="<?php if(isset($row['pcostprice'])) {echo $row['pcostprice'];} ?>">

          <label class="mt-2" for="inputsp">Selling Price</label>
          <input type="text" id="inputsp" name="productsp" class="form-control" value="<?php if(isset($row['psellingprice'])) {echo $row['psellingprice'];} ?>">

 <?php if(isset($note)) {echo $note;} ?>
 <div class="text-center mt-2 mb-2">
     <button type="submit" class="btn btn-danger" id="productupdate" name="productupdate">Update</button>
     <a href="assets.php" class="btn btn-secondary">Close</a>

 </div>


</form>
 </div>

<!-- End 2nd Column -->


<?php
 include('includes/footer.php');
?>