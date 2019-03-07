<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Smart Trace</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/icheck/skins/all.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <!-- <a class="navbar-brand brand-logo" href="../../pages/samples/login.html">
          <img src="../../images/logo.svg" alt="logo" />
        </a> -->
        <a  href="pages/samples/login.php">
            
            <img src="../../images/logo.png" alt="logo" width="200" height="50" />
          </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
        <ul class="navbar-nav navbar-nav-right">
          
          
          <!-- <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, Ram Lal!</span>
              <img class="img-xs rounded-circle" src="../../images/faces/face1.jpg" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              
              <a class="dropdown-item" href="../samples/login.html">
                Sign Out
              </a>
            </div>
          </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <!-- <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="../../images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Ram Lal</p>
                  <div>
                    <small class="designation text-muted">Farmer</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
             
            </div>
          </li> -->
          <li class="nav-item">
            <!-- <a class="nav-link" href="../../pages/forms/farmerprofile.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Farmer Profile</span>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/newlot.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Submit New Lot Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/editlotdetail.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Edit Lot Details</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="col-12 grid-margin">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
               
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                 
           
                      <form action="updatefarmer.php" method="POST" class="forms-sample">
                      <!-- <div class="row">
                              <div class="col-md-9">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Username</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="username">
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-9">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Password</label>
                                  <div class="col-sm-9">
                                    <input type="text" class="form-control" name="password">
                                  </div>
                                </div>
                              </div>
                            </div> -->
                            
                      <h4 class="card-title">Farm Details
                      
                      </p>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Farm Area</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter area" name="area">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Farm Location</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Enter Cordinates" name="location">
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Fertilizers Used</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="fertilizers" >
                          </div>
                        </div>
                        <!-- <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button> -->
                      
           
                    <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Personal Info</h4>
                        
                            <p class="card-description">
                            </p>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">First Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="fname">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Last Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="lname">
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="gender">
                                    <option>Male</option>
                                    <option>Female</option>
                                    </select>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Date of Birth</label>
                                <div class="col-sm-9">
                                    <input class="form-control" placeholder="dd/mm/yyyy" name="dob">
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                        </div>
                            <p class="card-description">
                            Address
                            </p>
                            <div class="row">
                            <div class="col-md-9">
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="address">
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="state">
                                </div>
                                </div>
                            </div>
                            </div>
                             <!-- <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Address 2</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" />
                                </div>
                                </div>
                            </div>  -->
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Postcode</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="postcode">
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Phone No.</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone">
                                </div>
                                    
                                </div>
                            </div>
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div> 
            <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Team IDK made this with
              <i class="mdi mdi-heart text-danger"></i>
            </span>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>