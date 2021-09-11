<?php
  include '../php/middleware.php';
  include '../php/f_assessment-create.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Assessments List | Faculty</title>

    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
    <link rel="stylesheet" href="../assets/vendors/datatables/jquery.dataTables.css">
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
          <h4>Assessments List</h4>
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
        </div>
        <ul class="navigation-menu">
          <li>
            <a style="font-size:medium;" href="dashboard.php">
              <span class="link-title">Dashboard</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="sections-list.php">
              <span class="link-title">Section</span>
              <i class="mdi mdi-book-open-variant link-icon"></i>
            </a>
          </li>
          <li class="active">
            <a style="font-size:medium;" href="assessments-list.php">
              <span class="link-title">Assessments</span>
              <i class="mdi mdi-clipboard link-icon"></i>
            </a>
          </li>
          <!-- <li>
            <a href="reports.html">
              <span class="link-title">Reports</span>
              <i class="mdi mdi-chart-areaspline link-icon"></i>
            </a>
          </li> -->
          <li>
            <a style="font-size:medium;" href="question-banks.php">
              <span class="link-title">Question Bank</span>
              <i class="mdi mdi-book-open-variant link-icon"></i>
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
              <div class="col-9 py-1">
              <div class="col-1 py-5 text-right">
                <!-- <a class="btn btn-warning has-icon mr-2" href="assessment-update.html">
                  <i class="mdi mdi-lead-pencil"></i>Update
                </a> -->
                <a class="btn btn-success has-icon" href="assessment-create.php">
                  <i class="mdi mdi-account-plus-outline"></i>Add
                </a>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="grid">
                <div class="item-wrapper">
                  <div class="table-responsive">
                    <table class="table display" id="user-table">
                      <thead>
                        <tr>
                          <th>Semester</th>
                          <th>Section</th>
                          <th>Course Id</th>
                          <th>Type</th>
                          <th>Total Questions</th>
                          <th>Total Students</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($asmnts as $asmnt){
                            echo "<tr>
                                    <td>".$asmnt['semester']."</td>
                                    <td>".$asmnt['section']."</td>
                                    <td>".strtoupper($asmnt['course_id'])."</td>
                                    <td>".$asmnt['type']."</td>
                                    <td>".$asmnt['total_q']."</td>
                                    <td>".$asmnt['total_students']."</td>
                                  </tr>";
                          }
                        ?>
                      </tbody>
                    </table>
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
    <script src="../assets/vendors/js/vendor.addons.js"></script>
    <script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendors/datatables/jquery.dataTables.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <!-- endbuild -->
    <script>
      $(document).ready(function() {
          $('#user-table').DataTable();
      } );
    </script>
  </body>
</html>