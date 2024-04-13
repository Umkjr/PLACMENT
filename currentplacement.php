<?php
session_start();
if($_SESSION['deptuser'] == NULL)
{
  echo '<script type="text/javascript">location.href = "login2.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AIKTC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="dept panel assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="dept panel assets/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="dept panel assets/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="dept panel assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="dept panel assets/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="dept panel assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="dept panel assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="dept panel assets/assets/images/favicon.png" />
        <!-- End layout styles -->
        <link rel="shortcut icon" href="logoicon.ico">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="dept panel assets/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="dept panel assets/assets/images/logo.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="dept panel assets/assets/images/faces/face.jpeg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Department</h5>
                </div>
              </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="deptstudent.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-card-details"></i>
              </span>
              <span class="menu-title">Student Data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="noEnroll.php">
              <span class="menu-icon">
                <i class="mdi mdi-border-color"></i>
              </span>
              <span class="menu-title">No. Enrollment</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="noofplaced.php">
              <span class="menu-icon">
                <i class="mdi mdi-checkbox-marked-circle-outline"></i>
              </span>
              <span class="menu-title">No. of placed</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="currentplacement.php">
              <span class="menu-icon">
                <i class="mdi mdi-rename-box"></i>
              </span>
              <span class="menu-title">Current placement</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="studpass.php">
              <span class="menu-icon">
                <i class="mdi mdi-fingerprint"></i>
              </span>
              <span class="menu-title">Student Password</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="dept panel assets/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search Company">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">

              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="dept panel assets/assets/images/faces/face.jpeg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Department</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
       
        <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Students </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Current Placement </h4>
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Company Id </th>
                            <th> Company</th>
                            <th> Cuttoff </th>
                            <th> Start Date</th>
                            <th> End Date</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                         include 'app.php';
                         $app->currentplacement();
                         ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="dept panel assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="dept panel assets/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="dept panel assets/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="dept panel assets/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="dept panel assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="dept panel assets/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="dept panel assets/assets/js/off-canvas.js"></script>
    <script src="dept panel assets/assets/js/hoverable-collapse.js"></script>
    <script src="dept panel assets/assets/js/misc.js"></script>
    <script src="dept panel assets/assets/js/settings.js"></script>
    <script src="dept panel assets/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="dept panel assets/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>