<?php
  include '../php/middleware.php';
  include '../php/course.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Create Course | Admin</title>

    <link rel="stylesheet" href="../assets/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.addons.css">
    <link rel="stylesheet" href="../assets/vendors/datatables/jquery.dataTables.css">
    <link rel="stylesheet" href="../assets/vendors/tagify/tagify.css">
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
        <h4>Create Course</h4>
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
            <h4 class="user-name"><?php echo "$admin_name"?></h4>
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
              <i class="mdi mdi-archive link-icon"></i>
            </a>
          </li>
          <li>
            <a style="font-size:medium;" href="programs-list.php">
              <span class="link-title">Programs</span>
              <i class="mdi mdi-clipboard-outline link-icon"></i>
            </a>
          </li>
          <li class="active">
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
                              <label>Program Name</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <select class="custom-select" name="program">
                                <?php
                                  foreach($programs as $program){
                                    echo "<option value='".$program['id']."' selected>".$program['name']." in ".$program['department']."</option>";
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="id">Course Id</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="id" name="id" placeholder="Enter Course Id">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="name">Course Title</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Course Title">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="level">Course Level</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="number" class="form-control" id="level" name="level" placeholder="Enter Level of Course">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="credits">Credits</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="number" class="form-control" id="credits" name="credits" placeholder="Enter Credits">
                            </div>
                          </div>
                          <div class="form-group row showcase_row_area">
                            <div class="col-md-3 showcase_text_area">
                              <label for="total_co">Total CO</label>
                            </div>
                            <div class="col-md-9 showcase_content_area">
                              <input type="number" class="form-control" id="total_co" name="total_co" placeholder="Total CO">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row mb-3" id="part-2" hidden>
                        <div class="col-md-12 mx-auto" id="co-box">
                          
                        </div>
                      </div>
                      <div class="row mb-3" id="part-3" hidden>
                        <div class="col-md-12 mx-auto" id="co-box">
                          <div class="form-group row showcase_row_area">
                            <table class="table info-table table-bordered">
                              <thead>
                                <tr id="view-header">
                                  <th>PLO</th>
                                </tr>
                              </thead>
                              <tbody id="view-body">
                                
                              </tbody>
                            </table>
                          </div>
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
      $part = 1;
      $plo = 13;

      $('#next-btn').click(function(){
        $('#back-btn').removeAttr('hidden');
        $('#part-'+$part).attr('hidden', true);
        $part++;
        $('#part-'+$part).removeAttr('hidden');
        if($part==2){
          $("#co-box").empty();
          $total_co = $("#total_co").val();
          addCoInput();
        }
        if($part==3){
          $('#next-btn').attr('hidden', true);
          $('#sub-btn').removeAttr('hidden');
        }
        
      });
      $('#back-btn').click(function(){
        $('#sub-btn').attr('hidden', true);
        $('#next-btn').removeAttr('hidden');
        $('#part-'+$part).attr('hidden', true);
        $part--;
        $('#part-'+$part).removeAttr('hidden');
        if($part==1){
          $('#back-btn').attr('hidden', true);
        }
      });

      $lvlmap = new Array();
      for($i=0; $i<=4; $i++){
        $lvlmap[$i]= new Array();
        for($j=0; $j<=4; $j++){
          $lvlmap[$i][$j] = new Array();
        }
      }
      $lvlmap[0][0]= [1, 1];
      $lvlmap[0][1]= [1, 2];
      $lvlmap[0][2]= [2, 1];
      $lvlmap[0][3]= [3, 2];

      $lvlmap[1][0]= [1, 1];
      $lvlmap[1][1]= [1, 3];
      $lvlmap[1][2]= [2, 2];
      $lvlmap[1][3]= [1, 2];

      $lvlmap[2][0]= [3, 4];
      $lvlmap[2][1]= [1, 5];
      $lvlmap[2][2]= [3, 6];
      $lvlmap[2][3]= [2, 1];

      $lvlmap[3][0]= [1, 5];
      $lvlmap[3][1]= [1, 6];
      $lvlmap[3][2]= [1, 3];
      $lvlmap[3][3]= [2, 2];

      console.log($lvlmap[0][1][1]);


      function addCoInput(){
        $total_co = $("#total_co").val();
        for($co=1; $co<=$total_co; $co++){
          $("#co-box").append(`<div class="form-group row showcase_row_area">
                            <div class="col-2 showcase_text_area">
                              <label>CO`+ $co +`</label>
                            </div>
                            <div class="col-10">
                              <div class="row">
                                <div class="col-6 col-md-6">
                                  <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                      <label>Domain</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                      <select class="custom-select" id="domain`+ $co +`" name="domain`+ $co +`" onchange="changeListener(event);">
                                        <option value="1" selected>Cognitive</option>
                                        <option value="2">Affective</option>
                                        <option value="3">Psychomotor</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6">
                                  <div class="form-group row showcase_row_area">
                                    <div class="col-md-3 showcase_text_area">
                                      <label>Level</label>
                                    </div>
                                    <div class="col-md-9 showcase_content_area">
                                      <select class="custom-select" id="level`+ $co +`" name="level`+ $co +`" onchange="changeListener(event);">
                                        <option value="1" selected>1- Remember</option>
                                        <option value="2">2- Understand</option>
                                        <option value="3">3- Apply</option>
                                        <option value="4">4- Analyze</option>
                                        <option value="5">5- Evaluate</option>
                                        <option value="6">6- Create</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>  
                          </div>`);
        
          $("#view-header").append(`<th>CO`+$co+`</th>`);        
          for($i =1; $i<=$plo; $i++){
            $("#mapper-"+$i).append(`<td><input type="checkbox" class="form-check-input" name="plo-`+$i+`[]" id="co-`+$i+`-`+$co+`" value="`+$co+`"></td>`);
          } 
          $level = $("#level").val() / 100;
          if($co<=4){
            $("#domain"+$co).each(function(){
              $(this).find('option[value='+$lvlmap[$level-1][$co-1][0]+']').prop('selected', true);
            });
            $("#level"+$co).each(function(){
              $(this).find('option[value='+$lvlmap[$level-1][$co-1][1]+']').prop('selected', true);
            });
          }
          setCo($co);
        }
      };

      $( document ).ready(function() {
        for($i=1; $i<=$plo; $i++){
          $("#view-body").append(`<tr id="mapper-`+$i+`">
                                  <td>PLO`+$i+`</td>
                                </tr>`);
        }  
      });

      function changeListener(event){
        $sl = (event.target.name).slice(-1);
        clearCo($sl);
        setCo($sl);
      }

      function clearCo($id){
        for($i=1; $i<=$plo; $i++){
          $("#co-"+$i+"-"+$id).prop("checked", false);
        } 
      }

      $aumap = new Array();

      for($i=0; $i<3; $i++){
        $aumap[$i]= new Array();
        for($j=0; $j<5; $j++){
          $aumap[$i][$j] = new Array();
        }
      }

      $aumap[0][0] = [1,2];
      $aumap[0][1] = [1,2,3,7];
      $aumap[0][2] = [3,4,5,6,7,12];
      $aumap[0][3] = [2,3,5,7,8,13];
      $aumap[0][4] = [1,2,5,7,11,13];
      $aumap[0][5] = [1,3,4,5,6,7,13];
      
      $aumap[1][0] = [1,2];
      $aumap[1][1] = [1,2,3,7,11];
      $aumap[1][2] = [3,4,5,6,7,10,11,12,13];
      $aumap[1][3] = [2,3,5,7,8,10,11,12,13];
      $aumap[1][4] = [1,2,5,7,11,13];
      $aumap[1][5] = [3,4,5,6,7,8,9];
      
      $aumap[2][0] = [1,2];
      $aumap[2][1] = [1,2,3,7,10];
      $aumap[2][2] = [3,4,5,6,7,10,12];
      $aumap[2][3] = [2,3,5,7,8,11,13];
      $aumap[2][4] = [1,2,5,7,11,13];
      $aumap[2][5] = [1,3,4,5,6,7,8,9,10,13];

      
      function setCo($co){
        $dm = $('select[name="domain'+$co+'"] option:selected').val();
        $lv = $('select[name="level'+$co+'"] option:selected').val();
        for($i=0; $i<$aumap[$dm-1][$lv-1].length; $i++){
          $p = $aumap[$dm-1][$lv-1][$i];
          $("#co-"+$p+"-"+$co).prop("checked", true);
        }
        console.log($dm);
      }

    </script>
    
  </body>
</html>