<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once ('../../common/login_checker.php');
?>
  <?php include '../head.php'; ?>
</head>

<body class="">
  <div class="wrapper ">
<?php include '../../view/teacher/sidebar.php';
include '../../common/connect.php'; ?>

<div class="main-panel">
      <!-- Navbar -->
<?php include '../../view/teacher/navbar.php';?> <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row"><a href="view_students.php">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">students</p>
                  <h3 class="card-title"><?php $sql="SELECT count(Sid) as total_users FROM `tbl_students`"; $result=mysqli_query($con,$sql); $row=mysqli_fetch_assoc($result); echo($row['total_users']);?></h3>
                </div>
              </div></a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">teachers</p>
                  <h3 class="card-title"><?php $sql="SELECT count(Uid) as total_users FROM `tbl_users` WHERE role='teacher'"; $result=mysqli_query($con,$sql); $row=mysqli_fetch_assoc($result); echo($row['total_users']);?></h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Student attendance</h4>
                  <p class="card-category">View Attendance</p>
                </div>
                <div class="card-body">
                  <form method="post" action="../../controller/teacher/view_attendance_controller.php" name="view_attendance">
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                        <select name="class"  class="form-control" >
                        <option value="Select Filter" >Select class</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        </select>
                        </div></div>
                  <div class="col-md-6" >
                    <div class="form-group" id="section" >
                        <select name="section"  class="form-control">
                        <option value="Select Filter">Select section</option>
                        <option value="a">A</option>
                        <option value="b">B</option>
                        <option value="c">C</option>
                        <option value="d">D</option>
                        <option value="e">E</option>
                        <option value="f">F</option>
                        <option value="g">G</option>
                        <option value="h">H</option>
                        </select>
                        </div></div></div>
                       
                  <div class="row">
                  <div class="col-md-6">
                  <div class="form-group"  class="form-control">
                        <label>From Date</label>
                        <input type="date" name="startdate" class="form-control">
                        </div></div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <label>To Date</label>
                        <input type="date" name="enddate" class="form-control">
                        </div></div> </div>
                  <div class="row">
                  <div class="col-md-4">
                  <div class="form-group">
                        <button type="submit" name="send" class="btn btn-primary pull-right" >View Attendance</button>
                  <div class="clearfix"></div>
                        </div></div></div>
                   </form>
                </div></div></div>
                </div></div></div></div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
              </li> 
            </ul>
          </nav>
          </div>
          </div>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> and modify by Barsha
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
 
</body>

</html>