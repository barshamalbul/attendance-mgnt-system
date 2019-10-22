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
          <div class="row">  <div class="col-md-12">
          <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Mark staffs attendance</h4>
                 </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Name
                        </th>
                        <th>
                        status
                        </th>  
                        <th>date</th>
                        <th> switch </th>
                        </thead>
                        </tr>
                        <tbody>
                        <?php
                include '../../common/connect.php';
               $sql="SELECT * FROM tbl_users 
                WHERE role='staff' ";
                //$sql="SELECT * FROM `tbl_users` WHERE status='active' and role= 'staff'";
                $result=mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                        <tr>
                          <td>
                            <?php echo($row['Uid']); ?>
                          </td>
                          <td>
                          <?php echo($row['Ufname']); ?>
                          </td>
                         
                          <td>
                          <?php 
                          $sid=$row['Uid'];
                          $asql="SELECT * from tbl_staff_attendance WHERE date=CURRENT_DATE and sid=$sid";
                          $resultee=mysqli_query($con,$asql);
                          $prow=mysqli_fetch_assoc($resultee);
                          if(mysqli_num_rows($resultee)==0)
                          {
                            echo("-");
                          }
                          else
                          {
                          echo($prow['status']);   
                          } ?>
                          </td>
                          <td><?php echo($prow['date']); ?></td>
                          <td>
                          <?php
                          if(mysqli_num_rows($resultee)==0)
                          { ?>
                            <a href="../../controller/admin/mark_staff_attendence_controller.php?uid=<?php echo($row['Uid']);?>&status=absent"> absent </a>
                            <br>
                            <a href="../../controller/admin/mark_staff_attendence_controller.php?uid=<?php echo($row['Uid']);?>&status=present"> present </a>
                     <?php     }
                          else
                          {
                          if($prow['status']=="present")
                          { ?>
                            <a href="../../controller/admin/staff_attendance_update.php?uid=<?php echo($row['Uid']);?>&status=absent"> absent </a>
                      <?php   }
                          else
                          { ?>
                            <a href="../../controller/admin/staff_attendance_update.php?uid=<?php echo($row['Uid']);?>&status=present"> present </a>
                         <?php  } 
                          }
                          ?>
                          </td>
                        <?php   }  ?>
                       </tbody>
                       <tfoot><tr><td>
                          <a href="admin_dashboard.php" class="btn btn-primary btn-round">done</a>
                         </td>
                         <td>
                          <a href="view_staff.php" class="btn btn-primary btn-round">
                view Attendance</a>
                         </td></tr></tfoot>
                    </table>
                    </div>
                </div></div></div></div></div>
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