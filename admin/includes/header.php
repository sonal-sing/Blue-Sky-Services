<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/style.css">
     
    <title><?php echo TITLE  ?></title>

    <style>
        a{
            color: #17a2b8;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowwrap p-0 shadow text-light">
        <a class ="navbar-brand col-sm-3 col-md-2 mr-0" href="dashboard.php">Blue Sky Consulting</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav  class="col-sm-2 bg-light sidebar py-5 d-print-none"><!-- Start Side Bar-->
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class = "nav-link <?php if(PAGE == 'dashboard') {echo 'active';} ?>" href="dashboard.php"><i class="fa fa-tachometer mr-3" aria-hidden="true"></i>Dashboard <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'work') {echo 'active';} ?>" href="work.php"><i class="fa fa-wrench mr-3" aria-hidden="true"></i>Work Order</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'request') {echo 'active';} ?>" href="request.php"><i class="fa fa-align-center mr-3" aria-hidden="true"></i> Requests</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'assets') {echo 'active';} ?>" href="assets.php"><i class="fa fa-database mr-3" aria-hidden="true"></i>Assets</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'technician') {echo 'active';} ?>" href="technician.php"><i class="fa fa-users mr-3" aria-hidden="true"></i>Technician</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'requester') {echo 'active';} ?>" href="requester.php"><i class="fa fa-user-o mr-3" aria-hidden="true"></i>Requester</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'sellreport') {echo 'active';} ?>" href="sellreport.php"><i class="fa fa-table mr-3" aria-hidden="true"></i>Sale Report</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'workreport') {echo 'active';} ?>" href="workreport.php"><i class="fa fa-line-chart mr-3" aria-hidden="true"></i>Work Report</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'changepassword') {echo 'active';} ?>" href="changepassword.php"><i class="fa fa-lock mr-2" aria-hidden="true"></i>Change Password</a></li>
                  <li class="nav-item"><a class = "nav-link"  style = "text-decoration:none;"  href="../logout.php"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout</a></li>
              </ul>
            </div>
        </nav><!-- End Side Bar-->