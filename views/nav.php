<?php
  require_once '../models/project.php';
  // echo session_id();
  // print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Bootstrap core CSS-->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      

      <!-- Navbar -->
      

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="login.html">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>
        <?php
        if(!isset($_SESSION['useremail'])):
        ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Login</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="register.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Register</span></a>
        </li>
        <?php  
        endif;
        ?>

        <?php
        if(isset($_SESSION['useremail'])):
        ?>
        <!-- //------------- 15/10/2018 -------------// -->
        <?php
        if($_SESSION['userstatus']==0):
        ?>
        <li class="nav-item">
          <a class="nav-link" href="city.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add City</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="area.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Area</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="theater.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Theater</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="screen.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Screen</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="seats.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Seats</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movie.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Movie</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="movie-assign.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Movie Assign</span></a>
        </li>
        <?php 
      endif;
         ?>
         <!-- //------------- 15/10/2018 -------------// -->
        <li class="nav-item">
          <a class="nav-link" href="password.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Change Password</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Logout (<?php echo $_SESSION['username']; ?>)</span></a>
        </li>
        <?php  
        endif;
        ?>
      </ul>