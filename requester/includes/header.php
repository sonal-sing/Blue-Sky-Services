
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
        <a class ="navbar-brand col-sm-3 col-md-2 mr-0" href="reqprofile.php">Blue Sky Consulting</a>
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav  class="col-sm-2 bg-light sidebar py-5 d-print-none"><!-- Start Side Bar-->
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                  <li class="nav-item">
                      <a class = "nav-link <?php if(PAGE == 'reqprofile') {echo 'active';} ?>" href="reqprofile.php"><i class="fa fa-user mr-3" aria-hidden="true"></i>Profile <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'submitreq') {echo 'active';} ?>" href="submitreq.php"><i class="fa fa-universal-access mr-2" aria-hidden="true"></i>Submit Request</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'servicestatus') {echo 'active';} ?>" href="servicestatus.php"><i class="fa fa-spinner mr-2" aria-hidden="true"></i>Service Status</a></li>
                  <li class="nav-item"><a class = "nav-link <?php if(PAGE == 'changepass') {echo 'active';} ?>" href="changepass.php"><i class="fa fa-lock mr-2" aria-hidden="true"></i>Change Password</a></li>
                  <li class="nav-item"><a class = "nav-link"  style = "text-decoration:none;"  href="../logout.php"><i class="fa fa-sign-out mr-2" aria-hidden="true"></i>Logout</a></li>
              </ul>
            </div>
        </nav><!-- End Side Bar-->
    