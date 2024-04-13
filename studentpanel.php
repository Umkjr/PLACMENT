<?php 
session_start();
$user=$_SESSION['user'];
include 'app.php' ;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Modal-->
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AIKTC</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="student panel assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="student panel assets/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <link rel="stylesheet" type="text/css" href="student panel assets/assets/css/changepassword.css" />
    <link rel="stylesheet" type="text/css" href="student panel assets/comp/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="student panel assets/comp/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="student panel assets/comp/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="student panel assets/comp/css/card-4.css" />
    <link rel="stylesheet" type="text/css" href="student panel assets/comp/css/pattern-4.css" />
    <!-- Plugin css for this page -->
    <script>
    if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
        var root = document.getElementsByTagName('html')[0];
        root.setAttribute('class', 'ff');
    };
    </script>

    <link rel="stylesheet" href="student panel assets/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="student panel assets/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="student panel assets/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="student panel assets/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="shortcut icon" href="logoicon.ico">
    <!-- Layout styles -->
    <link rel="stylesheet" href="student panel assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="student panel assets/assets/images/favicon.png" />
    <?php ;
    $app->changePassword();
    ?>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="student panel assets/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="student panel assets/assets/images/logo.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php $app->icon($user);?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $user;?></h5>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content" data-toggle="modal" data-target="#change">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>

            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="profile.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link"  href="mocktest.php">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Mock Test</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="tech.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Technical Skills</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="result.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Skills Results</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Prediction</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="pages/icons/mdi.html">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Apply for Comapnies</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <div class="preview-item-content" data-toggle="modal" data-target="#change">
              <span class="menu-title">Change Password</span>
              </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="#"><img src="student panel assets/assets/images/logo-mini.svg" alt="logo" /></a>
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
                    <img class="img-xs rounded-circle" src="<?php $app->icon($user);?>"  alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $user;?></p>
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
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
          <!-- Animation -->

          <div class="container">
        <div class="content">
            <!-- trianglify pattern container -->
            <div class="pattern pattern--hidden"></div>
            <!-- cards -->
                
            <!-- /cards -->
        </div>
        
    </div>
    <!-- /container -->
    <!-- JS -->
        </div>
        </div>
        <!-- main-panel ends -->
        
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="student panel assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="student panel assets/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="student panel assets/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="student panel assets/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="student panel assets/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="student panel assets/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="student panel assets/assets/js/off-canvas.js"></script>
    <script src="student panel assets/assets/js/hoverable-collapse.js"></script>
    <script src="student panel assets/assets/js/misc.js"></script>
    <script src="student panel assets/assets/js/settings.js"></script>
    <script src="student panel assets/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="student panel assets/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
          
          <!--modal-->
          <div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;"> Change Password </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" autocomplete="off" id="password_form" style="text-align:center;">
                <p>old password<br />
                <input type="password" name="old_password" /></p>
                <p>New password<br />
                <input type="password" name="password"  id="password" class="ser" />
                </p>
                <p>Confirm password<br />
                <input type="password" name="confirm_pwd" id="confirm_pwd" class="ser" />
                </p>
                <p align="center">
                <input name="change" type="submit" value="Save Password" class="submit" />
                </p>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>