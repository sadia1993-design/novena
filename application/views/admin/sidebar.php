  <!-- partial -->
  <div class="container-fluid page-body-wrapper">

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('dashboard')?>">
            <i class="fas fa-tachometer-alt"></i>
            <span class="menu-title ">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">pages</li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="fas fa-pager"></i>
            <span class="menu-title">Home </span>
            <i class="far fa-angle-down  down-icon"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href=""> General </a></li>
              <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('banner')?>"> Banner </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Counter </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Service </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Appointment </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Review </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Partners </a></li>
            </ul>
          </div>
        </li>
      </ul>
    </nav>