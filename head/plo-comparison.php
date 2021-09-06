
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PLO Comparison | Head</title>

  <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
  <link rel="stylesheet" href="../assets/css/shared/style.css">
  <link rel="stylesheet" href="../assets/css/demo_1/style.css">
  <link rel="shortcut icon" href="../assets/images/favicon.ico" />
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
      <h4>PLO Comparision</h4>
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
          <a style="font-size:medium;" href="enrollment-comparison.php">
            <span class="link-title">Enrollment Comparison</span>
            <i class="mdi mdi-gauge link-icon"></i>
          </a>
        </li>
        <li class="active">
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
    <div class="page-content-wrapper">
      <div class="page-content-wrapper-inner">
        <div class="content-viewport">
          <div class="row">
            <div class="col-lg-12 mt-5">
              <div class="grid">
                <div class="grid-body">
                  <div class="row">
                    <div class="col-6">
                      <h2 class="grid-title">PLO-CO Achievement Stats</h2>
                    </div>
                    <div class="col-6">
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
                                  <option value="program">Program</option>
                                  <option value="department">Department</option>
                                  <option value="school">School</option>
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
                    </div>
                  </div>
                  <div class="item-wrapper">
                    <div class="d-flex justify-content-center mt-4 mb-4" <?php if(isset($_GET['name'])==true || $error != 0){echo 'hidden';} ?>>
                      <p>User must query properly to get accurate result.</p>
                    </div>
                    <div class="table-responsive" <?php if(isset($_GET['name']) == false || $error!=0){echo 'hidden';} ?>>
                      <table class="table display" id="user-table">
                        <thead>
                          <tr>
                            <th>CO/PLO</th>
                            <th>Successfully Achieved</th>
                            <th>%</th>
                            <th>Failed To achieve</th>
                            <th>%</th>
                          </tr>
                        </thead>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-6 mt-5">
              <div class="grid">
                <div class="grid-body">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="grid-title">PLO Achievement Comparision</h2>
                    </div>
                  </div>
                  <div class="item-wrapper">
                    <div class="d-flex justify-content-center mt-4 mb-4" <?php if(isset($_GET['name'])==true || $error != 0){echo 'hidden';} ?>>
                      <p>User must query properly to get accurate result.</p>
                    </div>
                    <div <?php if(isset($_GET['name']) == false || $error!=0){echo 'hidden';} ?>>
                      <canvas id="plo-comparison" height="250"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 mt-5">
              <div class="grid">
                <div class="grid-body">
                  <div class="row">
                    <div class="col-12">
                      <h2 class="grid-title">CO Achievement Comparision</h2>
                    </div>
                  </div>
                  <div class="item-wrapper">
                    <div class="d-flex justify-content-center mt-4 mb-4" <?php if(isset($_GET['name'])==true || $error != 0){echo 'hidden';} ?>>
                      <p>User must query properly to get accurate result.</p>
                    </div>
                    <div>
                      <canvas id="co-comparison" height="250"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-12 mt-5">
              <div class="grid">
                <div class="grid-body">
                  <div class="row">
                    <div class="col-6">
                      <h2 class="grid-title">PLO Percentage Comparison</h2>
                    </div>
                  </div>
                  <div class="item-wrapper">
                    <div class="d-flex justify-content-center mt-4 mb-4">
                      <p>User must query properly to get accurate result.</p>
                    </div>
                    <div class="row">
                      <div class="col-8" <?php if(isset($_GET['type'])!=true || (isset($_GET['type']) && $_GET['type']=='course')){echo 'hidden';} ?>>
                        <canvas id="plo-total-percentage" height="200"></canvas>
                        <h2 class="grid-title text-center">PLO Total Percentage From CO Score</h2>
                      </div>
                      <div class="col-4" <?php if(isset($_GET['type'])!=true || (isset($_GET['type']) && $_GET['type']=='course')){echo 'hidden';} ?>>
                        <canvas id="dep-plo-percentage" height="400"></canvas>
                        <h2 class="grid-title text-center">Departmental PLO Percentage For Comparision</h2>
                      </div>
                      <div class="col-12" <?php if(isset($_GET['type'])!=true || (isset($_GET['type']) && $_GET['type']=='course')){echo 'hidden';} ?>>
                        <canvas id="plo-co-percentage" height="200"></canvas>
                        <h2 class="grid-title text-center">Each PLO achieved FROM CO Scores</h2>
                      </div>
                    </div>                    
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
</body>

</html>