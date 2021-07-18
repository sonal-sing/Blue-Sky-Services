<?php  

 include('dbcon.php');
 if(isset($_REQUEST['rsignup'])){
   //Checking whether the fields are empty or not
     if(($_REQUEST['rname'] == "") || ($_REQUEST['remail'] == "") || ($_REQUEST['rpass'] == "")){
        $reg_msg = '<div class = "alert alert-warning mt-2" role = "alert">ALL Fields are REQUIRED</div>';
     } else {
       //Checking whether that user is already registered or not 
       $sql1 = "SELECT r_email FROM reg_login WHERE r_email='".$_REQUEST['remail']."' ";
       $result = $conn->query($sql1);
       if($result->num_rows==1){
       $reg_msg = '<div class = "alert alert-warning mt-2" role="alert">Email ID Already Registered</div>';
       } else {
      //Assigning values to the variables.
       $rName = $_REQUEST['rname'];
       $rEmail = $_REQUEST['remail'];
       $rPass = $_REQUEST['rpass'];
       $sql = "INSERT INTO `reg_login`(`r_name`, `r_email`, `r_password`) VALUES ('$rName' , '$rEmail' , '$rPass')";
       if($conn->query($sql) ==TRUE){
         $reg_msg = '<div class = "alert alert-success mt-2" role = "alert">Account Created Successfully.</div>'; 
       }else{
         $reg_msg = '<div class = "alert alert-success mt-2" role = "alert">Unable to Create Account.</div>'; 
       }
    }
  }
}

?>
<div class="container pt-5" id="registration">
      <h2 class="text-center">Create an Account</h2>
      <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
          <form action="" class="shadow-lg p-4"method="post">
             <div class="form-group">
             <i class="fa fa-user" aria-hidden="true"></i><label for="name" class="font-weight-bold pl-2">Name</label><input type="text" class="form-control" placeholder="Name" name="rname"> 
             </div>
             <div class="form-group">
             <i class="fa fa-envelope" aria-hidden="true"></i><label for="email" class="font-weight-bold pl-2">Email</label><input type="email" class="form-control" placeholder="Email" name="remail"> 
             <small class="font-text">We'll never share your private infomation with anyone.</small>
             </div>
             <div class="form-group">
             <i class="fa fa-lock" aria-hidden="true"></i><label for="password" class="font-weight-bold pl-2">Password</label><input type="password" class="form-control" placeholder="Password" name="rpass"> 
             </div>
             <button type="submit" class="btn btn-info mt-4 btn-block shadow-sm font-weight-bold" name="rsignup">Sign Up
             </button>
             <em style="font-size: 10px;">Note-By clicking Sign Up, you agree to our Terms,Data policy and Cookie policy</em>
             <?php if(isset($reg_msg)) {echo $reg_msg;}  ?>
          </form>
        </div>
      </div>
   </div>