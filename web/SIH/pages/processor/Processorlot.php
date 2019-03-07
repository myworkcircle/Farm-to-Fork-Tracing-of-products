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

$_SESSION['processorid']=$processor_id;

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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Processor</title>
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
      <a  href="../../pages/samples/login.php">
            <br>
            <img src="../../images/logo.png" alt="logo" width="200" height="50" />
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
          <li class="nav-item">
            <a class="nav-link" href="processorprofile.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Processor Profile</span>
            </a>
          </li>                    
          
          </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product Details</h4>
                  <p class="card-description">
                    Enter Manufactured Product Details
                  </p>
                  <form class="forms-sample" action="processordatabase.php" method="POST">
                    <div class="form-group">
                      <label for="exampleInputName1">your ID</label>
                      <div class="col-sm-9">
                         <p class="form-control"><?php echo "$processor_id"; ?></p> 
                          </div>
                    </div>
                    
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Product Type</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Lot Type" name="product_type">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Manufacturing Date</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="dd-mm-yy" name="manufacturing_date">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter Expiry Date</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Expiry" name="expiry_date">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputEmail3">Enter distributor ID</label>
                      <input type="text" class="form-control" id="exampleInputEmail3" placeholder="distributor id" name="shipment_id">
                    </div> 
                    <div class="form-group">
                      <label for="exampleInputName1">Enter Shipment Date</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="dd-mm-yyyy" name="shipment_date">
                    </div>  
                    <div class="form-group">
                      <label for="exampleInputName1">Ingredients</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="dd-mm-yyyy" name="ingredients">
                    </div>  
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-5 d-flex align-items-stretch">
              <div class="row flex-grow">
                
                
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