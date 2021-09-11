<?php
    include '../php/middleware.php';
    include '../php/s_dashboard.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard | Student</title>

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
            <h4 class="user-name mb-2"><?php echo $name; ?></h4>
            <h4 class="user-name mb-2"><?php echo "ID: $id"; ?></h4>
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
              <div class="col-md-12">
                <div class="grid">
                  <div class="grid-body">
                    <h2 class="grid-title">Course Wise PLO Achievement</h2>
                    <form method="GET">
                        <div class="row text-right">
                          <div class="col-5">
                            <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                <label>Type</label>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                                <select class="custom-select" name="type">
                                  <option value="course" selected>Course</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group row showcase_row_area">
                              <div class="col-md-3 showcase_text_area">
                                <label>Query</label>
                              </div>
                              <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Type Query" <?php if(isset($_GET['name'])){ echo "value='".$_GET['name']."'"; } ?>>
                              </div>
                            </div>
                          </div>
                          <div class="col-2">
                            <button class="btn btn-primary btn-rounded" type="submit"><i class="mdi mdi-arrow-right-thick"></i></button>
                          </div>
                        </div>
                      </form>
                    <div class="item-wrapper">
                      <canvas id="course-plo" height="100"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
      </div>
    </div>

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
    <script src="../assets/js/coolors.js"></script>
    <!-- endbuild -->
    <script>
      
      // var ctx = $('#course-plo');
      // var myChart = new Chart(ctx, {
      //     type: 'bar',
      //     data: {
      //         labels: [
      //           <?php
      //             foreach($crss as $crs => $d){
      //               echo "'".strtoupper($crs)."', ";
      //             }
      //           ?>
      //         ],
      //         datasets: [
      //         {
      //             label: 'Achieved',
      //             data: [
      //               <?php
      //                 foreach($crss as $crs => $d){
      //                   echo $d['ach'].", ";
      //                 }
      //               ?>
      //             ],
      //             backgroundColor: ['#65afc0'],
      //         borderColor: ['#65afc03'],
      //         borderWidth: 1
      //         },
      //         {
      //             label: 'Failed',
      //             data: [
      //               <?php
      //                 foreach($crss as $crs => $d){
      //                   echo $d['atm'].", ";
      //                 }
      //               ?>
      //             ],
      //             backgroundColor: ['#65afc0'],
      //             borderColor: ['#65afc03'],
      //             borderWidth: 1
      //         }
      //       ]
      //     },
      //     options: {
      //     scales: {
      //         y: {
      //             beginAtZero: true
      //         }
      //     }
      // }
      // });


      var ctx = $('#course-plo');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            <?php
              if(isset($_GET['name'])){
                foreach($plo_attemptedE as $k => $v){
                  echo "'PLO$k',";
                }
              }              
            ?>
          ],
          datasets: [
            {
              label: 'Achieved',
              data: [
                <?php
                  if(isset($_GET['name'])){
                    foreach($plo_attemptedE as $k => $v){
                      echo $plo_achievedE[$k].",";
                    }
                  }  
                  
                ?>
              ],
              backgroundColor: ['#5D3FD3'],
              borderColor: ['#5D3FD3'],
              borderWidth: 1
             
              
          },
          {
              label: 'Failed',
              data: [
                <?php
                  if(isset($_GET['name'])){
                    foreach($plo_attemptedE as $k => $v){
                      echo $plo_attemptedE[$k]-$plo_achievedE[$k] .",";
                    }
                  }                   
                ?>
              ],
              backgroundColor: ['#1b4f72'],
              borderColor: ['#1b4f72'],
              borderWidth: 1
          }
        ]
      },
      options: {
          scales: {
              y: {
                  beginAtZero: true
              }
          }
      }
  });


    </script>

  </body>
</html>