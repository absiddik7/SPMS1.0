<?php
    include '../php/middleware.php';
    include '../php/h_dashboard.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | Dean</title>

    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">

  </head>
  <body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index.html">
          <img class="logo" src="../assets/images/logo.png" alt="">
          <img class="logo-mini" src="../assets/images/logo_mini.png" alt="">
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
          <h4>Dashboard</h4>
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
        </div>
      </div>
    </nav>
    <!-- partial -->
    <div class="page-body">
      <!-- partial:partials/_sidebar.html -->
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar">
            <img class="profile-img img-lg rounded-circle" src="../assets/images/profile-pic.png" alt="profile image">
          </div>
          <div class="info-wrapper">
            <h4 class="user-name"><?php echo "$faculty_name" ?></h4>
          </div>
          <div class="row showcase_row_area mt-4">
            <div class="col-md-4 text-right">
              <label for="inputType14">Faculty</label>
            </div>
            <div class="col-md-4 showcase_content_area mb-2">
              <div class="demo-wrapper">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="role-switch" checked> 
                  <label class="custom-control-label" for="role-switch"></label>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-left">
              <label for="inputType14">Head</label>
            </div>
          </div>
        </div>
        <ul class="navigation-menu">
          <li class="active">
            <a style="font-size:medium;" href="dashboard.php">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="enrollment-comparison.php">
              <span class="link-title">Enrollment Comparison</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="plo-comparison.php">
              <span class="link-title">PLO Comparison</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="student-peformance.php">
              <span class="link-title">Student Peformace</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="../php/login.php?logout=1">
              <span class="link-title">Logout</span>
              <i class="mdi mdi-logout link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="row">
              <div class="col-md-4 col-4 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex justify-content-between">
                        <p class="card-title"><?php echo $stds; ?></p>
                        </div>
                        <h5 class="text-black">Enrolled Student</h5>
                      </div>
                      <div class="col-3">
                        <h1><i class="mdi mdi-account-multiple"></i></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-4 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex justify-content-between">
                        <p class="card-title"><?php echo $progs; ?></p>
                        </div>
                        <h5 class="text-black">Total Program</h5>
                      </div>
                      <div class="col-3">
                        <h1><i class="mdi mdi-animation"></i></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-4 equel-grid">
                <div class="grid">
                  <div class="grid-body text-gray">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex justify-content-between">
                        <p class="card-title"><?php echo $crss; ?></p>
                        </div>
                        <h5 class="text-black">Total Courses</h5>
                      </div>
                      <div class="col-3">
                        <h1><i class="mdi mdi-clipboard-outline"></i></h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content viewport ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="row">
            <div class="col-sm-6 text-center text-sm-right order-sm-1">
              <ul class="text-gray">
                <li><a href="#">Terms of use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
              <small class="text-muted d-block">Copyright © 2021 <a href="#" >Coder Buddies</a>. All rights reserved</small>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/core.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/js/charts/chartjs.addon.js"></script>
    <script src="../assets/vendors/js/vendor.addons.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <!-- endbuild -->
    <script>
      $("#role-switch").change(function(){
        window.location.href = "../faculty/dashboard.php";
      });
    </script>
  </body>
</html>