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
         <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Manage Class Schedule</h4>
                  <?php   $class=$_SESSION['class'];
                      $section=$_SESSION['section']; ?>
                  <p class="card-category">class:<?php echo $class; 
                                                       echo $section;?>
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <tr>
                        <th>Days/Period</th>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        <th>6</th>
                        <th>7</th>
                      </tr></thead>
                      <tbody>
                      <?php
                     // $sql=$_SESSION['sql'];
                      $class=$_SESSION['class'];
                      $section=$_SESSION['section'];
          for($i=1;$i<=6;$i++)
          { echo("<tr>");
            echo("<th>");
            switch($i)
            {
              case '1':
              echo "sunday";
              break;
              case '2':
              echo "monday";
              break;
              case '3':
              echo "tuesday";
              break;
              case '4':
              echo "wednesday";
              break;
              case '5':
              echo "thursday";
              break;
              case '6':
              echo "friday";
              break;
            }
            echo("</th>");
            for($j=1;$j<=7;$j++)
            { 
                echo("<td>");
                $sql="SELECT * FROM `tbl_class_schedule` INNER join tbl_users 
                on tbl_users.Uid=tbl_class_schedule.tid WHERE tbl_class_schedule.class='$class'
                and tbl_class_schedule.section ='$section' and day ='$i' and period='$j'";
                $result=mysqli_query($con,$sql);
                $_SESSION['sql']=$sql;
                $count=mysqli_num_rows($result);
                if($count==0)
                {   $_SESSION['day']=$i;
                  $_SESSION['period']=$j;
                  $rows=mysqli_fetch_assoc($result);
                  $_SESSION['csid']=$rows['csid']; 
                  ?>
                  <a href='add_schedule.php?day=<?php echo($i); ?>&period=<?php echo($j);?>'><?Php
                  echo("leisure");
                 
                  ?>
                  </a>
                  <?php
                }
                else
                {
                  $row=mysqli_fetch_assoc($result);
                  ?><a href='edit_schedule.php?day=<?php echo($i); ?>&period=<?php echo($j);?>&csid=<?php echo($row['csid']); ?>'>
                  <?php 
                  echo($row['Ufname']);
                  echo("</br>");
                 echo($row['subject']);
                  $_SESSION['day']=$i;
                  $_SESSION['period']=$j;
                  $row=mysqli_fetch_assoc($result);
                  $_SESSION['csid']=$row['csid'];
                  ?></a><?php
                }
                echo("</td>");
            }
            echo("</tr>");
          }           ?>
                      </tbody>
                    </table>
                  </div>
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