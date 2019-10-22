<!DOCTYPE html>
<html lang="en">
<head>
<?php include '../head.php'; ?>
</head>
<?php include '../../common/login_checker.php'; ?>
<body class="">
  <div class="wrapper ">
<?php include '../../view/teacher/sidebar.php'; ?>
<div class="main-panel">
      <!-- Navbar -->
<?php include '../../view/teacher/navbar.php';?> <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Students</h4>
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
                    $csid=$_SESSION['csid'];
                     $sql="SELECT tbl_students.Sname,tbl_students.Sid,tbl_students_attendance.status 
                     FROM `tbl_students_attendance` inner join tbl_students on 
                     tbl_students.Sid=tbl_students_attendance.Sid WHERE date=CURDATE() and csid='$csid'";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                    <td><?php echo($row['Sname']);?></td>
                    <td><?php echo($row['status']);?></td>
                    <td><a href="../../controller/teacher/change_status.php?sid=<?php echo($row['Sid']);?>&csid=<?php echo($csid); ?>&status=<?php echo($row['status']);?>"> Change </a></td> 
                    </tr>
                    <?php }?>
                </tbody>
                    </table>
                  </div>
                 <a href="../../controller/teacher/confirm_final.php"> Confirm attendance </a>
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