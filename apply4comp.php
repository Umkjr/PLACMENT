<?php 
session_start();
$user=$_SESSION['user'];
include 'app.php' ;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>STUDENT PANEL</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="profile assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="profile assets/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="tpo panel assets/assets/css/modal.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="profile assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="logoicon.ico">
    <style>
    .profile2{
      background-color:white;
      width:250px;
      height:250px;
      border-radius:50%;
    }
    .uploadf{}
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:tpo panel assets/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="tpo panel assets/index.html"><img src="profile assets/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="tpo panel assets/index.html"><img src="profile assets/assets/images/logo.svg" alt="logo" /></a>
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
              </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="profile.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Profile</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="mocktest.php">
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
            <a class="nav-link" href="prediction.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Prediction</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="apply4comp.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Apply for Company</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="jobstatus.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Job Approvel Status</span>
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
        <!-- partial:tpo panel assets/partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="tpo panel assets/index.html"><img src="tpo panel assets/assets/images/logo.svg" alt="logo" /></a>
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
                    <img class="img-xs rounded-circle" src="<?php $app->icon($user);?>" alt="">
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
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Apply for Company with Your Interested Domain </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
<div class="card-body">   
                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Temp ID </th>
                            <th> Company </th>
                            <th> Cutoff</th>
                            <th> Domain </th>
                            <th> Apply Before</th>
                            <th> Wanna Apply ?</th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php 
                            $b=$app->BEagg($user);
                            $app->applycomp2($user,$b);
                            $app->tempapply($user);
                         ?>
                        </tbody>
                      </table>
                    </div>

<br>
<!---->
</div>
          
<!---->
<div>
</div> 
<!---->
                  
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:tpo panel assets/partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 AIKTC. All rights reserved.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="profile assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- endinject -->
    <!-- Custom js for this page -->
    <!--MODAL-->
    


          <!--Update Modal
          <div class="modal fade" id="updatem" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
            <form action="" method="POST" class="design">

            <div class="modal-body">

                <input type="hidden" name="update_id" id="update_id">

                <div class="form-group">
                    <label> SSC </label>
                    <input type="text" name="ssc" id="ssc" class="form-control">
                </div>
                <div class="form-group">
                    <label> HSC</label>
                    <input type="text" name="hsc" id="hsc" class="form-control">
                </div>
                <div class="form-group">
                    <label> Diploma </label>
                    <input type="text" name="diploma" id="diploma" class="form-control">
                </div>
                <div class="form-group">
                    <label> BE </label>
                    <input type="text" name="be" id="be" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
            </div>
            </form>
						</div>
					</div>
					</div>
					</div>-->
<!--modal-->
<div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" > Change Password </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" autocomplete="off" id="password_form">
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
    </div>

    <!-- Apply MODAL -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apply for Company </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="apply.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Apply to This Comapny ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- End custom js for this page -->
    <link rel="stylesheet" href="plugins/bootstrap/css/login.css">
                     <!-- inject:js -->
    <script src="profile assets/assets/js/off-canvas.js"></script>
    <script src="profile assets/assets/js/hoverable-collapse.js"></script>
    <script src="profile assets/assets/js/misc.js"></script>
    <script src="profile assets/assets/js/settings.js"></script>
    <script src="profile assets/assets/js/todolist.js"></script>
    <script src="tpo panel assets/assets/js/editNdelete.js"></script>
    <script src="profile assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> 
    <?php session_abort();?> 
  </body>
</html>