<?php

include_once "../../configure.php";
session_start();

$name=$_SESSION['name2'];
$pass=$_SESSION['pass2'];
$query="select user_id  from user_profile where USERNAME = '$name' && PASSWORD = '$pass' ";
$result=mysqli_query($con,$query);

$row = $result->fetch_assoc();
 $processor_id=$row['user_id'];

$query2="select *  from processors where processor_id = '$processor_id' ";
$result2=mysqli_query($con,$query2);
$row2 = $result2->fetch_assoc();


 $company= $row2['company'];
$location= $row2['location'];
$area= $row2['area'];
$reg_num= $row2['reg_num'];
$fname= $row2['fname'];
$lname= $row2['lname'];
$gender =  $row2['gender'];
$dob =  $row2['dob'];
$address= $row2['address'];
$state =  $row2['state'];
$postcode= $row2['postcode'];
$phone =  $row2['phone'];

echo"$location";

?>

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
      <a class="navbar-brand brand-logo" href="../../index.html">
          <img src="../../images/logo.PNG" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        
          <ul class="navbar-nav navbar-nav-right">
            
            
            <li class="nav-item dropdown d-none d-xl-inline-block">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="profile-text">Hello,  <?php echo "$fname "; ?> </span>
                <img class="img-xs rounded-circle" src="../../images/faces/face1.jpg" alt="Profile image">
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                
                <a class="dropdown-item" href="../samples/login.php">
                  Sign Out
                </a>
              </div>
            </li>
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
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <br>
                  <br>
                  <img src="../../images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <br>
                  <br>
                  <p class="profile-name"><?php echo "$fname $lname";?> </p>
                  <div>
                    <small class="designation text-muted">Processor</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
             
            </div>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="processorprofile.html">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Processor Profile</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="Processorlot.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Submit New Product Details</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="https://thingspeak.com/channels/711040/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Humidity Data</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="https://thingspeak.com/channels/711040/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Temperature Data</span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/editlotdetail.html">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Edit Lot Details</span>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
               
                <div class="col-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Processor Details
                      
                      </p>
                      <form class="forms-sample">
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">company name</label>
                          <div class="col-sm-9">
                           <p class="col-sm-6  col-form-label"> <?php echo "$company";?> </p>
                          </div>

                          
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">location</label>
                          <div class="col-sm-9">
                           <p class="col-sm-6  col-form-label"> <?php echo "$location";?> </p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">area</label>
                          <div class="col-sm-9">
                           <p class="col-sm-6  col-form-label"> <?php echo "$area";?> </p>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">registration number</label>
                          <div class="col-sm-9">
                           <p class="col-sm-6  col-form-label"> <?php echo "$reg_num";?> </p>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Alloted ID</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$processor_id";?> </p>
                          </div>
                        </div>
                        <!-- <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button> -->
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Personal Info</h4>
                  <form class="form-sample">
                    <p class="card-description">
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$fname";?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$lname";?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$gender";?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$dob";?> </p>
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
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$address";?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$state";?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <!-- <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address 2</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Postcode</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$postcode";?> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone No.</label>
                          <div class="col-sm-9">
                                                       <p class="col-sm-6  col-form-label"> <?php echo "$phone";?> </p>
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
            
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Team IDK
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