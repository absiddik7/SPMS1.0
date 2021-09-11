<?php
  include '../php/university.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add University</title>

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
        <h4>Add University</h4>
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
            <h4 class="user-name">Mr. Manager</h4>
          </div>
        </div>
        <ul class="navigation-menu">
          <li>
            <a style="font-size:medium;" href="universities-list.php">
              <span class="link-title">Univiersity List</span>
              <i class="mdi mdi-gauge link-icon"></i>
            </a>
          </li>
          <li class="active">
            <a style="font-size:medium;" href="add-university.php">
              <span class="link-title">Add University</span>
              <i class="mdi mdi-account-multiple link-icon"></i>
            </a>
          </li>
        </ul>
      </div>
      <!-- partial -->
      <div class="page-content-wrapper">
        <div class="page-content-wrapper-inner">
          <div class="content-viewport">
            <div class="col-lg-12">
              <div class="grid">
                <div class="grid-body">
                  <div class="item-wrapper">
                    <form  method="POST">
                      <div class="row mb-3" id="part-1">
                        <div class="col-md-8 mx-auto">
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="id">University ID</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="id" name="id" placeholder="University ID">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="name">University Name</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="name" name="name" placeholder="University Name">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="vc">VC Name</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="vc" name="vc" placeholder="Name of VC">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="email">University Email</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="email" class="form-control" id="email" name="email" placeholder="University Email">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="phone">University Phone</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="University Email">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="address">Address</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="admin-email">Admin Email</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="admin-email" name="admin-email" placeholder="Admin Email">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="admin-password">Admin Password</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="password" class="form-control" id="admin-password" name="admin-password" placeholder="Admin Password">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="center">
                            <button style=" padding-left: 52px; padding-right: 52px; margin-top: 15px;" type="submit" class="btn btn-success" id="sub-btn">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
              <small class="text-muted d-block">Copyright © 2021 <a href="#">Coder Buddies</a>. All rights reserved</small>
            </div>
          </div>
        </footer>
      </div>
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
    <script src="../assets/vendors/jquery/jquery-3.6.0.min.js"></script>
    <script src="../assets/vendors/datatables/jquery.dataTables.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="../assets/js/template.js"></script>
    <script src="../assets/js/dashboard.js"></script>
    <!-- endbuild -->
    <script>
      $plo = 1;
      $('#next-btn').click(function(){
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

      function addPloInput(){
        $plo++;
        $(".plo-btn").attr('hidden', true);
        $("#plo-box").append(`<div class="form-group row showcase_row_area">
                            <div class="col-2 showcase_text_area">
                              <label for="plo`+ $plo +`">PLO `+ $plo +`</label>
                            </div>
                            <div class="col-8 showcase_content_area">
                              <input type="text" class="form-control" id="plo`+ $plo +`" name="plo`+ $plo +`" placeholder="Enter PLO Title">
                            </div>
                            <div class="col-2 showcase_content_area text-center">
                              <button type="button" class="btn btn-outline-primary btn-rounded btn-sm plo-btn" onclick="addPloInput();">
                                <i class="text-success mdi mdi-plus"></i>
                              </button>
                            </div>
                          </div>`);
      };

    </script>
  </body>
</html>