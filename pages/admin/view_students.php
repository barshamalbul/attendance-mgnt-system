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
                  <h4 class="card-title ">Students</h4>
                  <p class="card-category"> Recently added student</p>
                  <p class="card-category">  <form name="filter" action="#" method="post">
                        <select name="class" onchange="this.form.submit()" class="form-control">
                        <option value="Select Filter">Select class</option>
                        <option value="all">all</option>
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

                        </select></form></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Grade</th>
                        <th>Section</th>
                        <th>Roll No.</th>
                        <th>Parents Number</th>
                        <th>Dob</th>
                        <th>Doj</th>
                        <th>Gender</th>
                       <th>view attendance</th> 
                      </thead>
                      
                    <tbody>
                   <?php include '../../controller/view_student_controller.php'; ?>
<div name="loader" id="loader">
<!-- $sql ="SELECT * FROM tbl_students INNER JOIN tbl_students_class ON tbl_students.Sid= tbl_students_class.Sid ORDER by tbl_students.Sid DESC";
                      --><?php      
$result=mysqli_query($con,$sql);
                         while($row= mysqli_fetch_array($result))
                         {
                      ?>
                        <tr>
                          <td>
                            <?php echo($row['Sid']); ?>
                          </td>
                          <td>
                          <?php echo($row['Sname']); ?>
                          </td>
                          <td>
                          <?php echo($row['class']); ?>  
                          </td>
                          <td>
                          <?php echo($row['section']); ?>
                          </td>
                          <td>
                          <?php echo($row['Sid']); ?>
                          </td>
                          <td>
                          <?php echo($row['Scontact']); ?>
                          </td>
                          <td>
                          <?php echo($row['Sdob']); ?>
                          </td>
                          <td>
                          <?php echo($row['date']); ?>
                          </td>
                          <td>
                          <?php echo($row['Sgender']); ?>
                          </td>
                          <td>
                          <a href="view_student_attendance.php?sid=<?php echo($row['Sid']); ?>"
                           class="btn btn-primary btn-round">
                  view</a>
                          </td> 
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
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
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=2.1.0" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>