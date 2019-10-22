<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once ('../../common/login_checker.php');?>
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
        <div class="row">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">View Student Attendance
                  <br>
                  <p class="card-category">
                  <?php
                      $sid=$_GET['sid'];
                 // $sql=$_SESSION['sql'];
                 $sql="SELECT * FROM tbl_students INNER JOIN tbl_students_class
                  on tbl_students.Sid=tbl_students_class.Sid 
                  WHERE tbl_students.Sid='$sid' group by tbl_students.Sid";
                   $result=mysqli_query($con,$sql);
                   while($row = $result->fetch_assoc()) {
                    echo("Name : ".$row['Sname']);
                  echo("</br> Class: ".$row['class']."</br> Section: ".$row['section']);
                   } ?></p></h4>  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          Subject
                        </th>
                        <th>total no of days</th>
                        <th> total no of present days</th>
                        </thead>
                      <tbody>
                      <?php
                      $startdate=$_SESSION['startdate'];
                      $enddate=$_SESSION['enddate'];
                      $sql="SELECT COUNT(status) as status,COUNT(date) as date,
                      tbl_class_schedule.subject FROM tbl_students_attendance
                       inner join tbl_class_schedule 
                       on tbl_students_attendance.csid= tbl_class_schedule.csid 
                       WHERE status='present' and date between '$startdate' and '$enddate' 
                       and Sid='$sid' group by tbl_class_schedule.subject";
                               $result=mysqli_query($con,$sql);
                               while($row = $result->fetch_assoc()) {
                               ?>
                      <tr>
                          <td>
                            <?php echo($row['subject']); ?>
                          </td>
                          <td>
                            <?php echo($row['status']); ?>
                          </td>
                          <td>
                            <?php echo($row['date']); ?>
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
      </div><footer class="footer">
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
    $(document).ready(function(){
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
</body>
</html>