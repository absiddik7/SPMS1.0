<?php
    include '../php/middleware.php';
    include '../php/h_enrollment.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Enrollment Comparison | Head</title>

  <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
  <link rel="stylesheet" href="../assets/css/shared/style.css">
  <link rel="stylesheet" href="../assets/css/demo_1/style.css">
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />

</head>

<body class="header-fixed">
  <!-- partial:../../partials/_header.html -->
  <nav class="t-header">
    <div class="t-header-brand-wrapper">
      <a href="index.html">
        <img class="logo" src="../assets/images/logo.png" alt="">
        <img class="logo-mini" src="../assets/images/logo_mini.png" alt="">
      </a>
    </div>
    <div class="t-header-content-wrapper">
      <div class="t-header-content">
      <h4>Enrollment Comparison</h4>
        <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
          <i class="mdi mdi-menu"></i>
        </button>
      </div>
    </div>
  </nav>
  <!-- partial -->
  <div class="page-body">
    <!-- partial:../../partials/_sidebar.html -->
    <div class="sidebar">
      <div class="user-profile">
        <div class="display-avatar">
          <img class="profile-img img-lg rounded-circle" src="../assets/images/profile-pic.png" alt="profile image">
        </div>
        <div class="info-wrapper">
            <h4 class="user-name"><?php echo "$faculty_name" ?></h4>
          </div>
      </div>
      <ul class="navigation-menu">
        <li>
          <a style="font-size:medium;"  href="dashboard.php">
            <span class="link-title">Dashboard</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>
        <li class="active">
          <a style="font-size:medium;"  href="enrollment-comparison.php">
            <span class="link-title">Enrollment Comparison</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>
        <li>
          <a style="font-size:medium;"  href="plo-comparison.php">
            <span class="link-title">PLO Comparison</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>
        <li>
          <a style="font-size:medium;"  href="student-peformance.php">
            <span class="link-title">Student Peformace</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>
        <li>
          <a style="font-size:medium;"  href="../php/login.php?logout=1">
            <span class="link-title">Logout</span>
            <i class="mdi mdi-logout link-icon"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- partial -->
    <div class="page-content-wrapper">
      <div class="page-content-wrapper-inner">
        <div class="row">
          <div class="col-6 d-flex justify-content-end">
            <form class="ml-4" style="width: 300px;" method="GET">
              <div class="input-group">
              </div>
            </form>
          </div>
        </div>
        <div class="content-viewport">
        <div class="col-9 py-1">                  
            <div class="col-6 py-5 text-right">
            <div <?php if(isset($_GET['semester'])){echo "hidden";} ?>>
              <div class="grid">
                <div class="grid-body">
                  <div class="item-wrapper">
                    <form method="GET">
                      <div class="form-group input-rounded">
                        <input type="text" class="form-control" placeholder="Semester" spellcheck="false" data-ms-editor="true" name="semester">
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
          <div class="row" <?php if(!isset($_GET['semester'])){echo "hidden";} ?>>
            <div class="col-md-6">
              <div class="grid">
                <div class="grid-body">
                  <h2 class="grid-title">Department Wise Comparison</h2>
                  <div class="item-wrapper">
                    <canvas id="department-enrollment" width="400" height="200"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="grid">
                <div class="grid-body">
                  <h2 class="grid-title">Program Wise Comparision</h2>
                  <div class="item-wrapper">
                    <canvas id="program-enrollment" width="400" height="200"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content viewport ends -->
      <!-- partial:../../partials/_footer.html -->
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
  <script src="../assets/vendors/js/vendor.addons.js"></script>
  <script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
  <!-- endinject -->
  <!-- Vendor Js For This Page Ends-->
  <script src="../assets/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/js/coolors.js"></script>
  <!-- Vendor Js For This Page Ends-->

  <script>
  var ctx = $('#department-enrollment');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            <?php
              foreach($deps as $dep){
                echo "'".strtoupper($dep['department'])."', ";
              }
            ?>
          ],
          datasets: [{
              label: '# of Enrolled Students',
              data: [
                <?php
                  foreach($deps as $dep){
                    echo "".$dep['total_student'].", ";
                  }
                ?>
              ],
              backgroundColor: ['#1b4f72','#82c065'],
              borderColor: ['#1b4f72','#82c065'],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });
  var ctx = $('#program-enrollment');
  var myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
          labels: [
            <?php
              foreach($progs as $prog){
                echo "'".$prog['program']." in ".strtoupper($prog['department'])."', ";
              }
            ?>
          ],
          datasets: [{
            label: 'My First Dataset',
            data: [
              <?php
                  foreach($progs as $prog){
                    echo "".$prog['total_student'].", ";
                  }
                ?>
            ],
            backgroundColor: ['#ff5000','#7665c0'],
            borderColor: ['#ff5000','#7665c0'],
            borderWidth: 1,
            hoverOffset: 4
          }]
      }
  });
</script>
</body>

</html>