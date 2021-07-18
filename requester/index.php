<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blue Sky Consulting</title>

     <!-- bootstrap link -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

     <!-- font awesome -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

     <!-- google fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
   
</head>
<body>
 <!-- Start navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php">
    <img src="../images/5.png" alt="Logo" style="width:300px; height:50px;"> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto mr-5">
      <li class="nav-item">
        <a class="nav-link " href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#registration">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="reqlogin.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactus">Contact</a>
      </li>
    
    </ul>
  </div>
</nav>
<!--  End navigation -->

<!-- Jumbotron -->
<header>
<div class="jumbotron jumbotron-fluid extra-jumbotorn mt-4">
    <div class="center-div">
    <h1 class="text-uppercase font-weight-bold">Blue Sky Consulting</h1>
    <h5 class="mt-4 font-italic">We are here to assist you </h5>
    <a href="reqlogin.php" class="btn btn-light mr-4 mt-4">Login</a>
    <a href="#" class="btn btn-light mr-4 mt-4">Sign Up</a> 
    </div>
</div>
</header>
  
</header>
<!-- Ends header section -->
<!-- Introduction section starts -->
<div class="container">
  <div class="jumbotron">
    <h3 class="text-center" id="heading1">Blue Sky Consulting</h3>
    <p class="mt-4" style="font-size: 15px; color: gray;">
      Blue Sky Consulting is India's leading chain of multi-brand Electronics and Electrical service workshops offering wide array of services. We focus on enhancing your uses experience by offering world-class Electronic Appliances maintainence services. Our sole mission is "To provide Electronic Appliances care services to keep the devices fit and healthy and customers happy and smiling".
      With well-eqiped Electronic Appliances service centers and fully trained mechanics , we provide quality services with excellent packages that are designed to offer you great savings. 
    </p>
  </div>
</div>
<!-- Introduction section ends -->
<!-- Start services section  starts-->
<div class=" services container text-center border-bottom" id="services">
  <h2>Our Services</h2>
  <div class="row mt-4">
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="icons fa fa-television text-success mt-3" aria-hidden="true"></i></a><h4 class="mt-4">Electronic Appliances</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="icons fa fa-sliders text-primary mt-3" aria-hidden="true"></i></a><h4 class="mt-4">Preventive Measures</h4>
    </div>
    <div class="col-sm-4 mb-4">
      <a href="#"><i class="icons fa fa-cogs text-info mt-3" aria-hidden="true"></i></a><h4 class="mt-4">Fault Repair</h4>
    </div>
  </div>
</div>
<!-- Start services section  ends-->

<!-- Registration form starts -->
   <?php include('userregistration.php') ?>
<!-- Registration form ends -->

<!-- starts happy customers -->
    <div class="jumbotron bg-info">
      <div class="container">
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <!-- FIRST CLIENT -->
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img src="../images/av1.jpg" class="img-fluid img-thumbnai"id="happy" alt="customer1">
                <h4 class="card-title mt-2">Rahul Kumar</h4>
                <p class="card-text text-secondary" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quis tempore delectus voluptatem </p>
              </div>
          </div>
        </div>
        <!-- SECOND CUSTOMER -->
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img src="../images/av2.jpg" class="img-fluid img-thumbnai"id="happy" alt="customer1">
                <h4 class="card-title mt-2">Shreya Shukla</h4>
                <p class="card-text text-secondary" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quis tempore delectus voluptatem </p>
              </div>
          </div>
        </div>
        <!-- THIRD CUSTOMER -->
        <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img src="../images/av3.jpg" class="img-fluid img-thumbnai"id="happy" alt="customer1">
                <h4 class="card-title mt-2">Kritika Sen</h4>
                <p class="card-text text-secondary" style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quis tempore delectus voluptatem </p>
              </div>
          </div>
        </div>
      <!-- FOURTH CUSTOMER -->
      <div class="col-lg-3 col-sm-6">
          <div class="card shadow-lg mb-2">
              <div class="card-body text-center">
                <img src="../images/av4.jpg" class="img-fluid img-thumbnai"id="happy" alt="customer1">
                <h4 class="card-title mt-2">Sreyansh </h4>
                <p class="card-text text-secondary"style="font-size: 14px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat quis tempore delectus voluptatem </p>
              </div>
          </div>
        </div>
      </div>
      </div>
    </div>
<!-- Ends happy customers -->
<!-- start contact us -->
  <?php include('contactform.php') ?>
<!-- end contact us -->

<!-- start footer -->
<footer class="container-fluid bg-dark mt-5">
  <div class="container"><br>
    <div class="row py-3">
      <div class="col-md-6">
        <span class="pr-2 text-light" style="font-size: 25px;">Follow Us:</span>
       <a href="#" target="_blank" class="pr-2 text-info"> <i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
       <a href="#" target="_blank" class="pr-2 text-info">  <i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
       <a href="#" target="_blank" class="pr-2 text-info">  <i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
       <a href="#" target="_blank" class="pr-2 text-info">  <i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i></a>
       <a href="#" target="_blank" class="pr-2 text-info">  <i class="fa fa-rss fa-2x" aria-hidden="true"></i></a>

      </div>
      <div class="col-md-6 text-right" style="font-size: 20px;">
        <small class="text-light">Made with  <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> &copy; 2020</small>
        <small class="ml-2"><a href="../admin/adminlogin.php" class="text-info">Admin Login</a></small>
      </div>
  </div>
  </div>
</footer>
<!-- ends footer -->

 <!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>