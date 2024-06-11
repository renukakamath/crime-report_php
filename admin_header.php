<?php include 'connection.php'  ;
extract($_GET);
?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="admin_manage_stations.php">manage police sations</a>
	<a href="admin_manage_crime_type.php">manage crime types</a>
	<a href="admin_view_user.php">view user</a>
	<a href="admin_view_complaints.php">view complaints</a>
	<a href="admin_view_feedback.php">view feedback</a> -->



 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>kerala police - Free Lawyer Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid">
        <div class="row">
            <div clacoss="l-lg-3 bg-secondary d-none d-lg-block">
                <a href="home.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h6 class="m-0 display-4 text-primary ">kerala police</h6>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row bg-white border-bottom d-none d-lg-flex">
                    <div class="col-lg-7 text-left">
                        <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                            <i class="fa fa-envelope text-primary mr-2"></i>
                            <small>info@example.com</small>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                            <i class="fa fa-phone-alt text-primary mr-2"></i>
                            <small>+012 345 6789</small>
                        </div>
                    </div>
                    <div class="col-lg-5 text-right">
                        <div class="d-inline-flex align-items-center p-2">
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                    <a href="index.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">kerala police</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            
                             <a href="admin_manage_stations.php" class="nav-item nav-link">manage stations</a>

                             <a href="admin_manage_crime_type.php" class="nav-item nav-link">manage crime_types</a>

                             <!-- <a href="user_send_feedback.php" class="nav-item nav-link">send feedback</a> -->

                             <a href="home.php" class="nav-item nav-link">logout </a>
                            
                           <!--  <a href="team.html" class="nav-item nav-link">Attorneys</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">view</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="admin_view_user.php" class="dropdown-item">view user</a>
                                    <a href="admin_view_complaints.php"  class="dropdown-item">view complaints</a>
                                    <a href="admin_view_feedback.php"class="dropdown-item">view feedback</a>
                                    
                                </div>
                            </div>
                           <!--  <a href="contact.html" class="nav-item nav-link">Contact</a> -->
                        </div>
                        <!-- <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Get A Quote</a> -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->