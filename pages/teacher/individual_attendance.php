<html>
<head>
<?php include '../../common/login_checker.php'; ?> 
 <?php include '../head.php'; ?>
</head>
<body class="">
  <div class="wrapper ">
<?php include '../../view/teacher/sidebar.php'; ?>
<div class="main-panel">
<?php include '../../view/teacher/navbar.php'; ?>
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
            <?php
                include '../../common/connect.php';
                $sql=$_SESSION['sql'];
                $result=mysqli_query($con,$sql);
                $count=$_SESSION['attendance_count'];
                $ini=0;
                $student_name;
                $student_id;
                $class;
                $section;
                while($row=mysqli_fetch_assoc($result))
                {
                    if($count==$ini)
                    {
                        $student_id=$row['Sid'];
                        $student_name=$row['Sname'];
                        $class=$row['class'];
                        $section=$row['section'];
                        $ini++;
                    }
                    else
                    {
                        $ini++;
                    }

                }
            ?>
              <div class="card card-profile">
                <div class="card-avatar">
                    <img class="img" src="../../assets/student_images/<?php echo($student_id); ?>.jpg" />
                <br>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Student</h6>
                  <h4 class="card-title">Name : <?php echo($student_name); ?> </h4>
                  <h4 class="card-title">Class : <?php echo($class); ?> </h4>
                  <h4 class="card-title">Section : <?php echo($section); ?> </h4>
                 <a href='../../controller/teacher/attendance_student_controller.php?sid=<?php echo($student_id); ?>&status=present' class="btn btn-primary btn-round">Present</a>
                 <a href='../../controller/teacher/attendance_student_controller.php?sid=<?php echo($student_id); ?>&status=absent' class="btn btn-primary btn-round">Absent</a>
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