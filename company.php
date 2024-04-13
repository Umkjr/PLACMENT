<?php 
session_start();
if($_SESSION['tpoid'] == NULL)
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
    <title>TPC PANEL</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="tpo panel assets/assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="tpo panel assets/assets/css/modal.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Layout styles -->
    <link rel="stylesheet" href="tpo panel assets/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="logoicon.ico">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:tpo panel assets/partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="tpo panel assets/index.html"><img src="tpo panel assets/assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="tpo panel assets/index.html"><img src="tpo panel assets/assets/images/logo.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="tpo panel assets/assets/images/faces/tpo2.png" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">TPC</h5>
                </div>
              </div>
              </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="company.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Company</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="studentdata.php">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Student Data</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="approvStudent.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Approved Student</span>
            </a>
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
                    <img class="img-xs rounded-circle" src="tpo panel assets/assets/images/faces/tpo2.png" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">TPC</p>
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
              <h3 class="page-title"> Companies </h3>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                </div>
              </div>
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <label class="card-title">Comapny Details</label>
                    <button id="reload" style="margin-left:750px" type="button" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add"><i class="fa fa-plus"></i></button>

                    <div class="table-responsive">
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Unique ID </th>
                            <th> Company</th>
                            <th> Cutoff</th>
                            <th> Domain </th>
                            <th> Date </th>
                            <th> Required Candidates</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                       <?php
                        include 'app.php';
                        $app->companyData();
                       ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:tpo panel assets/partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 AIARKP. All rights reserved.</span>
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
    <script src="tpo panel assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->

    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <link rel="stylesheet" href="plugins/bootstrap/css/login.css">
    <!--Modal-->
    <!-- Edit model-->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Company Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update.php" method="POST" class="design">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <label>Unique - ID </label>
                            <input type="text" name="cid" id="cid" class="form-control"
                                placeholder="Enter C-ID">
                        </div>
                        <div class="form-group">
                            <label> Cutoff</label>
                            <input type="text" name="cutoff" id="cutoff" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Domain </label>
                            <input type="text" name="domain" id="domain" class="form-control"
                                placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label> year </label>
                            <input type="date" name="year" id="year" class="form-control">
                        </div>

                        <div class="form-group">
                            <label> Seats </label>
                            <input type="text" name="seats" id="seats" class="form-control"
                                placeholder="Enter Course">
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

    <!-- DELETE MODAL -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Company Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delete.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>



          <!--######################  Company add  -->
          <div class="modal fade" id="add" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<div class="modal-body">
          <form style="text-align:center">
          <h3><img src="https://img.icons8.com/dusk/64/000000/company.png"/></h3>
          <button type="button" class="btn btn-primary new" data-toggle="modal" data-target="#new">New Company</button><br><br>
          <button type="button" class="btn btn-primary new"  data-toggle="modal" data-target="#existing">Existing Comapny</button>
          </form>
					</div>
					</div>
					</div>
					</div>
					</div>
          
          <div class="modal fade" id="new" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<div class="modal-body">
          <form action="insertCompany.php" method="post" style="text-align:center">
          <h3>New Company</h3>
					<div class="input-container">
					<input class="input-field" type="text" name="cid" placeholder="COMPANY ID" required>
					</div>
          <div class="input-container">
					<input class="input-field" type="text" name="cname" placeholder="COMPANY NAME" required>
					</div>
					<button type="submit" class="btn new" value="submit" name="new">Submit</button>
          </form>
					</div>
					</div>
					</div>
					</div>
					</div>
          
          
          <div class="modal fade" id="existing" role="dialog">
					<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
					<div class="modal-body">
          <?php $app->addcompany();?>
          <form action="" method="post" style="text-align:center">
          <h3>Add Details</h3>
          <div class="input-container">
          <select class="input-field" name="compid" placeholder="C-ID">
          <?php
          include 'includes/options.php';       
          ?>
					</select>
          </div>
					<div class="input-container">
					<input class="input-field" type="date" name="year" placeholder="DATE" required>
					</div>
          <div class="input-container">
					<input class="input-field" type="text" name="seats" placeholder="SEATS" required>
					</div>
          <div class="input-container">
          <select class="input-field" name="domain" placeholder="DOMAIN">
          <option value='Web Development'>Web Development</option>
                <option value='Application Development'>Application Development</option>
                <option value='Game Development'>Game Development</option>
                <option value='Core Programming'>Core Programming</option>
                <option value='Database Administration'>Database Administration</option>
                <option value='Software Development'>Software Development</option>
                <option value='System Administration'>System Administration</option>
                <option value='Network Administration'>Network Administration</option>
                <option value='Tech Support'>Tech Support</option>
                <option value='Cloud Computing'>Cloud Computing</option>
                <option value='Software Testing'>Software Testing</option>
                <option value='Mobile Application Development'>Mobile Application Development</option>
                <option value='iOS Development'>iOS Development</option>
                <option value='AI and ML'>AI and ML</option>
                <option value='Testing and Automation'>Testing and Automation</option>
                <option value='IT architect'>IT architect</option>
                <option value='System Analyst'>System Analyst</option>
                <option value='Security Analyst'>Security Analyst</option>
                <option value='Data Scientist'>Data Scientist</option>
                <option value='Video game Developer'>Video game Developer</option>
                <option value='Computer Hardware Engineer'>Computer Hardware Engineer</option>
                <option value='UI designer'>UI designer</option>
                <option value='Computer VFX'>Computer VFX</option>
                <option value='Computer Hardware Engineer'>Computer Hardware Engineer</option>
                <option value='Motion graphics and Visual Effects'>Motion graphics and Visual Effects</option>
                <option value='Image processing'>Image processing</option>
                <option value='Computer Animation and 3D design'>Computer Animation and 3D design</option>
                <option value='Cyber Security'>Cyber Security</option>
                <option value='Ethical Hacking'>Ethical Hacking</option>
          </select>
					</div>
          <div class="input-container">
					<input class="input-field" type="text" name="cutoff" placeholder="CUTOFF" required>
					</div>
					<button type="submit" class="btn new" value="submit" name="add">Submit</button>
          </form>
					</div>
					</div>
					</div>
					</div>
          </div>   
          <!--#############  MODAL ENDS #####################-->
                     <!-- inject:js -->
    <script src="tpo panel assets/assets/js/off-canvas.js"></script>
    <script src="tpo panel assets/assets/js/hoverable-collapse.js"></script>
    <script src="tpo panel assets/assets/js/misc.js"></script>
    <script src="tpo panel assets/assets/js/settings.js"></script>
    <script src="tpo panel assets/assets/js/todolist.js"></script>
    <script src="tpo panel assets/assets/js/reload.js"></script>
    <script src="tpo panel assets/assets/js/editNdelete.js"></script>
    <script src="tpo panel assets/assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script> 
    <?php session_abort();?> 
  </body>
</html>