<!DOCTYPE html>
<html lang="en">

<head>
  <title>Decor at Doorsteps Admin Panel</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="assets/js/css.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/js/w3.css">
  <link rel="stylesheet" href="assets/js/bootstrap.min.css">
  <link rel="stylesheet" href="assets/js/jquery.dataTables.min.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- <link rel="stylesheet"shref="https://jqueryvalidation.org/files/demo/site-demos.css"> -->

  <!-- Bootstrap core CSS -->

<!--
Ramayana CSS Template
https://templatemo.com/tm-529-ramayana
-->

<!-- Additional CSS Files -->

<link rel="stylesheet" href="assets/css/cust_css.css">
<link rel="stylesheet" href="assets/css/fontawesome.css">
<link rel="stylesheet" href="assets/css/templatemo-style.css">
<link rel="stylesheet" href="assets/css/owl.css">

<script src="vendor/jquery/jquery.min.js"></script>
<!-- <script type="text/javascript" src="https://www.technicalkeeda.com/js/javascripts/plugin/jquery.js"></script>
    <script type="text/javascript" src="https://www.technicalkeeda.com/js/javascripts/plugin/jquery.validate.js"></script> -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Print and copy datatable -->

<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.buttons.min.js"></script>
<script src="assets/js/buttons.print.min.js"></script>
<script src="assets/js/buttons.flash.min.js"></script>
<script src="assets/js/jszip.min.js"></script>
<script src="assets/js/pdfmake.min.js"></script>
<script src="assets/js/vfs_fonts.js"></script>
<script src="assets/js/buttons.html5.min.js"></script>

</head>
<?php include('connection.php'); ?>
<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Main -->
    <div id="main">
      <div class="inner">

        <!-- Header -->
        <header id="header">
          <div class="logo">
            <a href="index.php">Decor At Doorsteps</a>
          <!-- </div>
            <div class="logo"> -->
              <?php 
              if(isset($_SESSION['username']))
              {
                // echo "<script>alert('".$_SESSION['username']."');</script>";
                echo "<a class='login_reg' style='color: white;' href='#'><i class='fa fa-user' aria-hidden='true'></i>".$_SESSION['username']." 
                <span class='sr-only'>(current)</span>
                </a>
                <a class='login_reg' href='logout.php' style='color: white;'><i class='fa fa-sign-out fa-cog'  aria-hidden='true'></i>Logout</a>";
              }
              else{
                echo "<a class='login_reg' style='color: white;' href='signup.php'><i class='fa fa-user-plus' aria-hidden='true'></i>Sign Up
                <span class='sr-only'>(current)</span>
                </a>
                <a class='login_reg' href='login.php' style='color: white;'><i class='fa fa-sign-in fa-cog'  aria-hidden='true'></i> Login</a>";

                // echo "<script>location.href='login.php';</script>";
              }

              ?>
              <!-- <a class="login_reg" style="color: white;" href="signup"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up
                <span class="sr-only">(current)</span>
              </a>
              <a class="login_reg " href="login.php" style="color: white;"><i class="fa fa-sign-in fa-cog"  aria-hidden="true"></i> Login</a> -->
            </div>            
            <!-- </div> -->

          </header>
