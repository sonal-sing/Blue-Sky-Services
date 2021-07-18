<?php
define('TITLE', 'Add New Product');
define('PAGE', 'insertproduct');
 include('includes/header.php');
 include('../requester/dbcon.php');
 session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail = $_SESSION['aemail'];
}else{
    echo "<script>location.href='adminlogin.php'</script>";
}
?>

<!-- Start 2nd Column-->
<div class="col-sm-6 mt-5 mx-5 jumbotron">
  <h3 class="text-center">Add New Product</h3>
<?php
if(isset($_REQUEST['pinsert'])){
    if(($_REQUEST['productname'] == "") || ($_REQUEST['productdate'] == "") || ($_REQUEST['productavail'] == "") || ($_REQUEST['producttotal'] == "") || ($_REQUEST['productcp'] == "") || ($_REQUEST['productsp'] == "") ){
        $note = '<div class="alert alert-warning role="alert">Fill All Fields</div>';
    } else{
        $productname = $_REQUEST['productname'];
        $productdate = $_REQUEST['productdate'];
        $productavail = $_REQUEST['productavail'];
        $producttotal = $_REQUEST['producttotal'];
        $productcp = $_REQUEST['productcp'];
        $productsp = $_REQUEST['productsp'];

        $sql = "INSERT INTO products_tb (pname, pdop, pavail, ptotal, pcostprice ,psellingprice) VALUES ('$productname','$productdate','$productavail','$producttotal','$productcp','$productsp')";
        if($conn->query($sql) == TRUE){
            $note = '<div class="alert alert-success role="alert">Inserted Successfully</div>';
        }else{
            $note = '<div class="alert alert-info role="alert">Unable to Update</div>';
        }
    }
}
?>
  <form action="" method="POST">
      <div class="form-group">

          <label class="mt-5" for="inputname">Product Name</label>
          <input type="text" id="inputname" name="productname" class="form-control" placeholder="Enter Product Name">

          <label class="mt-2" for="inputdate">Date Of Purchase</label>
          <input type="date" id="inputdate" name="productdate" class="form-control" placeholder="Enter Date">

          <label class="mt-2" for="inputavail">Available Items</label>
          <input type="number" id="inputavail" name="productavail" class="form-control mb-3" placeholder="Items Available">

          <label class="mt-2" for="inputtotal">Total Items</label>
          <input type="number" id="inputtotal" name="producttotal" class="form-control mb-3" placeholder="Total Items Available">

          <label class="mt-2" for="inputcp">Cost Price</label>
          <input type="text" id="inputcp" name="productcp" class="form-control mb-3" placeholder="Cost Price">

          <label class="mt-2" for="inputsp">Selling Price</label>
          <input type="text" id="inputsp" name="productsp" class="form-control mb-3" placeholder="Selling Price">


 <?php if(isset($note)) {echo $note;} ?>
 <div class="text-center mt-2 mb-2">
     <button type="submit" class="btn btn-danger" id="pinsert" name="pinsert">Submit</button>
     <a href="assets.php" class="btn btn-secondary">Close</a>

</div>


</form>

 </div>
<!-- End 2nd Column-->

<?php
 include('includes/footer.php');
?>