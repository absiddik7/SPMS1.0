<?php
  include '../php/middleware.php';
  include '../php/department.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Department | Admin</title>

    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
    <link rel="stylesheet" href="../assets/vendors/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">

    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

  </head>
  <body class="header-fixed">
    <nav class="t-header">
      <div class="t-header-brand-wrapper">
        <a href="index.html">
          <img class="logo" src="../assets/images/logo.png" alt="">
          <img class="logo-mini" src="../assets/images/logo_mini.png" alt="">
        </a>
      </div>
      <div class="t-header-content-wrapper">
        <div class="t-header-content">
        <h4>Create Department</h4>
          <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
            <i class="mdi mdi-menu"></i>
          </button>
        </div>
      </div>
    </nav>
    <div class="page-body">
      <div class="sidebar">
        <div class="user-profile">
          <div class="display-avatar">
            <img class="profile-img img-lg rounded-circle" src="../assets/images/profile-pic.png" alt="profile image">
          </div>
          <div class="info-wrapper">
          <h4 class="user-name"><?php echo $_SESSION["name"]; ?></h4>
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
            <a style="font-size:medium;" href="users-list.php">
              <span class="link-title">Users</span>
              <i class="mdi mdi-account-multiple link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="schools-list.php">
              <span class="link-title">Schools</span>
              <i class="mdi mdi-animation link-icon"></i>
            </a>
          </li>
          <li class="active">
            <a style="font-size:medium;" href="departments-list.php">
              <span class="link-title">Departments</span>
              <i class="mdi mdi-archive link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="programs-list.php">
              <span class="link-title">Programs</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="courses-list.php">
              <span class="link-title">Courses</span>
              <i class="mdi mdi-library-books link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="sections-list.php">
              <span class="link-title">Sections</span>
              <i class="mdi mdi-code-equal link-icon"></i>
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
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="col-lg-12">
              <div class="grid">
                <div class="grid-body">
                  <div class="item-wrapper">
                    <form method="POST">
                      <div class="row mb-3" id="part-1">
                        <div class="col-md-8 mx-auto">
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label>School</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <select class="custom-select" name="school">
                                <?php
                                  foreach($schools as $school){
                                    echo "<option value=".$school['id'].">".$school['name']."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="id">Deaprtment Id</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="id" name="id" placeholder="Enter Department Id">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="name">Department Name</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Department">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="head">Head of Program</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="head" name="head" placeholder="Enter Head of Department">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="center">
                            <button type="submit" class="btn btn-primary" id="sub-btn">Submit</button>
                        </div>
                    </form>
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
              <small class="text-muted d-block">Copyright © 2021 <a href="#">Coder Buddies</a>. All rights reserved</small>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <script src="../assets/vendors/js/core.js"></script>
    <script src="../assets/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="../assets/vendors/chartjs/Chart.min.js"></script>
    <script src="../assets/js/charts/chartjs.addon.js"></script>
    <script src="../assets/vendors/js/vendor.addons.js"></script>
    <script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendors/datatables/jquery.dataTables.js"></script>
    <script src="../assets/js/template.js"></script>

  </body>
</html>