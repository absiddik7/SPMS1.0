<?php
  include '../php/middleware.php';
  include '../php/program.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Program | Admin</title>

    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
    <link rel="stylesheet" href="../assets/vendors/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../assets/css/shared/style.css">
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">

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
        <h4>Create Program</h4>
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
            <h4 class="user-name"><?php echo "$admin_name" ?></h4>
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
          <li>
            <a style="font-size:medium;" href="departments-list.php">
              <span class="link-title">Departments</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li class="active">
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
                              <label>Department</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <select class="custom-select" name="department">
                                <?php
                                  foreach($departments as $department){
                                    echo "<option value='".$department['id']."' selected>".$department['name']."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="name">Program Name</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Program Name">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="total_credits">Total Credits</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="number" class="form-control" id="total_credits" name="total_credits" placeholder="Enter Total Credits">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="total_plo">Total PLO</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="number" class="form-control" id="total_plo" name="total_plo" placeholder="Enter Total PLO">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3" id="part-2" hidden>
                        <div class="col-md-8 mx-auto" id="plo-box">
                          
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 text-left">
                            <button type="button" class="btn btn-info" id="back-btn" hidden>Back</button>
                        </div>
                        <div class="col-6 text-right">
                          <button type="button" class="btn btn-primary" id="next-btn">Next</button>
                          <button type="submit" class="btn btn-success" id="sub-btn" hidden>Submit</button>
                        </div>
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
              <small class="text-muted d-block">Copyright ?? 2021 <a href="#">Coder Buddies</a>. All rights reserved</small>
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
    <script src="../assets/js/dashboard.js"></script>

    <script>
      $('#next-btn').click(function(){
        generatePLO();
        $('#part-1').attr('hidden', true);
        $('#next-btn').attr('hidden', true);
        $('#part-2').removeAttr('hidden');
        $('#back-btn').removeAttr('hidden');
        $('#sub-btn').removeAttr('hidden');
      });
      $('#back-btn').click(function(){
        $('#part-2').attr('hidden', true);
        $('#sub-btn').attr('hidden', true);
        $('#back-btn').attr('hidden', true);
        $('#part-1').removeAttr('hidden');
        $('#next-btn').removeAttr('hidden');
      });

      function generatePLO(){
        $("#plo-box").empty();
        $plo = $("#total_plo").val();
        for($i=1; $i<=$plo; $i++){
          $("#plo-box").append(`<div class="form-group row showcase_row_area">
                            <div class="col-2 showcase_text_area">
                              <label for="plo`+ $i +`">PLO `+ $i +`</label>
                            </div>
                            <div class="col-10 showcase_content_area">
                              <input type="text" class="form-control" id="plo`+ $i +`" name="plo`+ $i +`" placeholder="Enter PLO Title">
                            </div>
                          </div>`);
        }
      }


    </script>
  </body>
</html>