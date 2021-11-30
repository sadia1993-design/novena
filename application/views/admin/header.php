<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Project | Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/css/selectTable.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/css/dataTables.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>admin_assets/css/dashboard.css">
  <link rel="shortcut icon" href="<?php echo base_url() ?>admin_assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="fas fa-bars"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="<?php echo base_url('Admin/dashboard') ?>">
            <img src="<?php echo base_url() ?>admin_assets/images/AdminLTELogo.png" alt="logo" />
            <span class="text-white">Admin</span>
          </a>
        </div>
      </div>

      <!--  header top  -->
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Welcome, 
              <span class="text-white fw-bold">
                   <?php 
                      $user_name = $this->session->userdata('username');
                      if(isset($user_name)){
                        echo $user_name;
                      }                 
                   ?>            
              </span>          
            </h1>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">


          <li class="nav-item d-none d-lg-block">
            <a href="<?php echo base_url('Admin/logout') ?>" class="nav-link">
              <span class="profile-text">LogOut</span>
            </a>
          </li>

          <li class="nav-item d-none d-lg-block">
            <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
              <span class="input-group-addon input-group-prepend border-right">
                <span class="icon-calendar input-group-text calendar-icon"></span>
              </span>
              <input type="text" class="form-control">
            </div>
          </li>


          <li class="nav-item  d-none d-lg-block ">
            <img class="img-xs rounded-circle" src="<?php echo base_url() ?>admin_assets/images/face8.jpg" alt="Profile image">
            </a>
          </li>
        </ul>


      </div>
    </nav>