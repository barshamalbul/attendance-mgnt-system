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
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Staff Attendance
                  <br>
                  <p class="card-category">
                  </p></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          name
                        </th>
                       
                        <th> total no of present days</th>
                        <th>between startdate to enddate</th>
                        </thead>
                      <tbody>
                      <?php
                   $sql=$_SESSION['sql'];
                   $result=mysqli_query($con,$sql);
                   $s=$_SESSION['startdate'];
                   $e=$_SESSION['enddate'];
                   while($row = mysqli_fetch_assoc($result)) 
                   {
                   ?>  
                      <tr>
                          <td>
                            <?php echo($row['Uname']); ?>
                          </td>
                          <td>
                            <?php echo($row['total_days']); ?>
                          </td>
                          <td>
                            <?php echo $s." to " .$e; ?>
                          </td>
                               </tr><?php  } ?>
                          </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>     
          </div>
          </div>
      
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