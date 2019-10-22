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
<?php include '../../view/admin/sidebar.php';
include '../../common/connect.php'; ?>
<div class="main-panel">
      <!-- Navbar -->
<?php include '../../view/admin/navbar.php';?> <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Student attendance</h4>
                  <p class="card-category">View Attendance</p>
                </div>
                <div class="card-body">
                  <form method="post" action="../../controller/admin/view_single_student_attendance_controller.php">
                  <?php 
        $sid=$_GET['sid'];
        $_SESSION['sid']=$sid;
        include '../../common/connect.php';
        $query="SELECT * FROM tbl_students WHERE Sid ='$sid'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
?>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                          <label class="bmd-label-floating">Full Name (disabled)</label>
                            <input type="text" name="sid" value="<?php echo($_GET['sid']); ?>" hidden>
                          <input type="text" name="name" class="form-control" value="<?php echo($row['Sname']); ?>" readonly>
                        </div>
                      </div>
                        </div>
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