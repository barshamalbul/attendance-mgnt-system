<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../head.php'; ?>
</head>
<?php include '../../common/login_checker.php'; ?>
<body class="">
  <div class="wrapper ">
<?php include '../../view/admin/sidebar.php'; ?>
<div class="main-panel">
      <!-- Navbar -->
<?php include '../../view/admin/navbar.php';?> <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Staff</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>Name</th>
                        <th>Status</th>
                        <th>Change</th>
                        </thead>
                      
                    <tbody>
                    <?php 
                    include '../../common/connect.php';
                    $Sid=$_SESSION['sid'];
      $sql="SELECT tbl_staff_attendance.date,tbl_staff_attendance.status,tbl_users.ufname FROM `tbl_staff_attendance`
       inner join tbl_users on tbl_users.Uid=tbl_staff_attendance.sid WHERE date=CURDATE() and sid=$Sid";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                    <td><?php echo($row['ufname']);?></td>
                    <td><?php echo($row['status']);?></td>
                    <td><a href="../../controller/admin/change_staff_status.php?sid=<?php echo($row['sid']);?>&ssid=<?php echo($ssid); ?>&status=<?php echo($row['status']);?>"> Change </a></td> 
                    </tr>
                    <?php }?>
                </tbody>
                    </table>
                  </div>
                 <a href="../../controller/admin/confirm_final.php"> Confirm attendance </a>
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
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
             
            </ul>
          </nav>
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