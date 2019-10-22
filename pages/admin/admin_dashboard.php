<!DOCTYPE html>

<html lang="en">
<head>
<?php include '../head.php'; ?>
</head>
<?php include '../../common/login_checker.php'; ?>
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
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">total users</p>
                  <h3 class="card-title"><?php $sql="SELECT count(Uid) as total_users FROM `tbl_users`"; $result=mysqli_query($con,$sql); $row=mysqli_fetch_assoc($result); echo($row['total_users']);?>
                  </h3>
                </div>
                </div>
            </div><a href="view_students.php">
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
            </div><a href="view_teacher.php">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">teachers</p>
                  <h3 class="card-title"><?php $sql="SELECT count(Uid) as total_users FROM `tbl_users` WHERE role='teacher'"; $result=mysqli_query($con,$sql); $row=mysqli_fetch_assoc($result); echo($row['total_users']);?></h3>
                </div>
              </div></a>
            </div><a href="view_staff.php">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">staffs</p>
                  <h3 class="card-title"><?php $sql="SELECT count(Uid) as total_users FROM `tbl_users` WHERE role!='teacher' and role!='student'"; $result=mysqli_query($con,$sql); $row=mysqli_fetch_assoc($result); echo($row['total_users']);?></h3>
                </div>
              </div></a>
            </div>
          </div>
          <div class="row">
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Today's Absent List</h4>
                  <p class="card-category"> Absent list</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th> Student </th>
                        <th> Teacher</th>
                        <th>staff</th>
                      </tr></thead>
                      <tbody>
                      <?php $sql="SELECT * from tbl_students inner join 
                      tbl_students_attendance on tbl_students.Sid=tbl_students_attendance.Sid 
                      inner join tbl_class_schedule on tbl_class_schedule.csid=tbl_students_attendance.csid 
                      where tbl_students_attendance.status='absent' and tbl_students_attendance.date=CURDATE()";
                       $result=mysqli_query($con,$sql);
                       $row=mysqli_fetch_assoc($result);
                       ?>
                     <tr><th>
                     <?php echo $row['Sname'];
                     echo" ".$row['class'];
                     echo " ".$row['section'] ?></th>
                     <?php $sql="SELECT * FROM tbl_users INNER JOIN
                      teacher_attendence on tbl_users.Uid=teacher_attendence.tid
                       where tbl_users.role='teacher' and  teacher_attendence.status='absent' and teacher_attendence.date=CURDATE()";
                        $result=mysqli_query($con,$sql);
                        $row=mysqli_fetch_assoc($result);
                       
                     ?><th><?php   echo $row['Ufname']; ?></th>
  <?php  $sql="SELECT * FROM tbl_users INNER JOIN 
                     tbl_staff_attendance on tbl_users.Uid=tbl_staff_attendance.sid 
                     where tbl_users.role='staff' and tbl_staff_attendance.status='absent'and tbl_staff_attendance.date=CURDATE()";
                     $result=mysqli_query($con,$sql);
                     $row=mysqli_fetch_assoc($result);
                     ?><th><?php echo $row['Ufname'];?></th></tr>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
                </div>
      </div></div>
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