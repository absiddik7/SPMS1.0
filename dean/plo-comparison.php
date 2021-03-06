<?php
    include '../php/middleware.php';
    include '../php/d_plo.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PLO Comparison | Dean</title>

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
        <h4>PLO Comparison</h4>
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
            <h4 class="user-name"><?php echo "$school_dean"?></h4>
            <?php
              echo "<small class='text-center mt-3'>$school_name</small>"
            ?>
            
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
    <!-- partial -->
    <div class="page-content-wrapper">
      <div class="page-content-wrapper-inner">
        <div class="content-viewport">
          <div class="row">
            <div class="col-md-12">
              <div class="grid">
                  <!--
                <div class="grid-body">
                  <h2 class="grid-title">PLO Percentage</h2>
                  <div class="item-wrapper">
                  <canvas id="plo-percentage" height="472" width="472" style="display: block; box-sizing: border-box; height: 425.714px; width: 425.714px;"></canvas>
                   
                  </div>
                </div>
                -->
              </div>
            </div>
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
                        <tbody>
                          <?php
                            foreach($co_attemptedE as $k => $v){
                              echo "<tr>
                                    <th>CO$k</th>
                                    <td>".$co_achievedE[$k]."</td>
                                    <td>".round($co_achievedE[$k] / $co_attemptedE[$k] * 100, 2) ."</td>
                                    <td>".$co_attemptedE[$k] - $co_achievedE[$k]."</td>
                                    <td>".round(($co_attemptedE[$k] - $co_achievedE[$k]) / $co_attemptedE[$k] * 100, 2) ."</td>
                                  </tr>";
                            }
                            foreach($plo_attemptedE as $k => $v){
                              echo "<tr>
                                    <th>PLO$k</th>
                                    <td>".$plo_achievedE[$k]."</td>
                                    <td>".round($plo_achievedE[$k] / $plo_attemptedE[$k] * 100, 2) ."</td>
                                    <td>".$plo_attemptedE[$k] - $plo_achievedE[$k]."</td>
                                    <td>".round(($plo_attemptedE[$k] - $plo_achievedE[$k]) / $plo_attemptedE[$k] * 100, 2) ."</td>
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
                    <div <?php if(isset($_GET['name']) == false || $error!=0){echo 'hidden';} ?>>
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
            <small class="text-muted d-block">Copyright ?? 2021 <a href="#">Coder Buddies</a>. All rights reserved</small>
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
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../assets/js/coolors.js"></script>
  <!-- Vendor Js For This Page Ends-->

  <script>
  var ctx = $('#plo-percentage');
  var myChart = new Chart(ctx, {
      type: 'pie',
      data: {
          labels: [
            <?php
              foreach($plo_attempted as $k => $v){
                echo "'PLO$k',";
              }
            ?>
          ],
          datasets: [
            {
              label: 'Achieved',
              data: [
                <?php
                  foreach($plo_attempted as $k => $v){
                    echo (round(($plo_achieved[$k] / $plo_attempted[$k] * 100), 2)).",";
                  }
                ?>
              ],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
              
          },
          {
              label: 'Failed',
              data: [
                <?php
                  foreach($plo_attempted as $k => $v){
                    echo round((($plo_attempted[$k]-$plo_achieved[$k]) / $plo_attempted[$k] * 100), 2) .",";
                  }
                ?>
              ],
              backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
          }
        ]
      },
      options: {
        
      } 
  });

  var ctx = $('#plo-comparison');
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

  var ctx = $('#co-comparison');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            <?php
              if(isset($_GET['name'])){
                foreach($co_attemptedE as $k => $v){
                  echo "'CO$k',";
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
                    foreach($co_attemptedE as $k => $v){
                      echo $co_achievedE[$k].",";
                    }
                  }  
                  
                ?>
              ],
              backgroundColor: ['#000080'],
              borderColor: ['#000080'],
              borderWidth: 1
              
          },
          {
              label: 'Failed',
              data: [
                <?php
                  if(isset($_GET['name'])){
                    foreach($co_attemptedE as $k => $v){
                      echo $co_attemptedE[$k]-$co_achievedE[$k] .",";
                    }
                  }                   
                ?>
              ],
              backgroundColor: ['#ffa500'],
              borderColor: ['#ffa500'],
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

  var ctx = $('#plo-total-percentage');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            <?php
              if(isset($_GET['type']) && $_GET['type']!='course'){
                foreach($ploData as $k=>$p){
                  foreach($p['plo'] as $i => $d){
                    echo "'PLO$i', ";
                  }
                }
              }
            ?>
          ],
          datasets: [{
              label: <?php
                      if(isset($_GET['type']) && $_GET['type']!='course'){
                        foreach($ploData as $k=>$p){
                          echo "'$k'";
                        }
                      }else{
                        echo 'none';
                      }
                    ?>,
              data: [
                <?php
                  if(isset($_GET['type']) && $_GET['type']!='course'){
                    foreach($ploData as $k=>$p){
                      foreach($p['plo'] as $i => $d){
                        $prctg = round(($d['obtained'] / $d['total'] * 100), 2);
                        echo "'$prctg', ";
                      }
                    }
                  }
                ?>
              ],
              backgroundColor: ['#056f66'],
              borderColor: ['#056f66'],
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

  var ctx = $('#dep-plo-percentage');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            <?php
              if(isset($_GET['type']) && $_GET['type']!='course'){
                foreach($depData as $k=>$p){
                  echo "'PLO$k', ";
                }
              }
            ?>
          ],
          datasets: [{
              label: <?php
                      if(isset($_GET['type']) && $_GET['type']!='course'){
                        echo "'".strtoupper($_SESSION['dep'])."'";
                      }else{
                        echo 'none';
                      }
                    ?>,
              data: [
                <?php
                  if(isset($_GET['type']) && $_GET['type']!='course'){
                    foreach($depData as $k=>$p){
                        $prctg = round(($p['obtained'] / $p['total'] * 100), 2);
                        echo "'$prctg', ";
                    }
                  }
                ?>
              ],
              backgroundColor: ['#65afc0'],
              borderColor: ['#65afc03'],
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

  var ctx = $('#plo-co-percentage');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: [
            <?php
              if(isset($_GET['type']) && $_GET['type']!='course'){
                foreach($ploData as $k=>$p){
                  foreach($p['plo'] as $i => $d){
                    echo "'PLO$i', ";
                  }
                }
              }
            ?>
          ],
          datasets: [
            <?php
           
              if(isset($_GET['type']) && $_GET['type']!='course'){
                foreach($ploData as $b){
                  $indx = 0;
                  foreach($b['co'] as $c => $z){
                      echo "{
                                label: 'CO$c',
                                data: [";
                                
                      foreach($ploData as $k=>$p){
                        foreach($p['plo'] as $i => $d){
                          if(array_key_exists($i, $z)){
                            echo "$z[$i],";
                          }else{
                            echo "0, ";
                          }
                        }
                      }
                    
                            
                      echo"],
                                backgroundColor: [
                                  '#1b4f72','#5D3FD3','#000080','#ffa500',
                                ]
                            },";
                      $indx++;
                  }
                }
              }
            ?>
        ],
        
      },
      options: {
        responsive: true,
        scales: {
          x: {
            stacked: true,
          },
          y: {
            stacked: true
          }
        }
      }
  });
  
</script>
</body>

</html>