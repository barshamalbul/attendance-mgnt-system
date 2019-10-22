<!DOCTYPE html>
<?php 
  function get_day($day)
  {
    switch($day){
      case '1':
      return "sunday";
      break;
      
      case '2':
      return "monday";
      break;
      
      case '3':
      return "tuesday";
      break;
      
      case '4':
      return "wednesday";
      break;
      
      case '5':
      return "thursday";
      break;
      
      case '6':
      return "friday";
      break;
  
      default:
      return "none";
    }
  }
  $day="";
  $period="";
  $csid="";
  if((isset($_GET['day']))&&(isset($_GET['period'])&&(isset($_GET['csid']))))
    {
      $day=$_GET['day'];
      $period=$_GET['period'];
      $csid=$_GET['csid'];
    }
    else
    {
      header('location:error.php');
    }

?>
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
          <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit schedule</h4>
                  <p class="card-category">class: <?php 
                  $class=$_SESSION['class'];
                  $section=$_SESSION['section']; 
                  echo $class; echo(" "); echo $section;?></p>
                </div>
                <div class="card-body">
                  <form action="../../controller/admin/edit_schedule_controller.php"  method="post">  
                   
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group"> 
                          <label class="bmd-label-floating"> Name of subject teacher </label>
                          <select name="Stname" class="form-control">
                          <option value="0"> Select a teacher </option>
                          <?php 
                            $tsql="SELECT * FROM `tbl_users` where role='teacher'";
                            $tresult=mysqli_query($con,$tsql);
                            while($trow=mysqli_fetch_assoc($tresult))
                            { ?>
                              <option value="<?php echo($trow['Uid']); ?> "> 
                              <?php echo($trow['Ufname']); ?>
                              </option>
                    <?php   }
                          ?>
                          </select>
                         <!-- <input type="text" class="form-control" name="Stname"  required> -->
                        </div>
                      </div>
                      </div>
             <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Subject</label> 
                        <input type="text" name="subject"  class="form-control" required>
                          </div>
                      </div>
					  </div>
            <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Day</label> 
                        <input type="text" name="day" class="form-control" value="<?php echo(get_day($day)); ?>" readonly> 
                          </div>
                         </div></div>
                        <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Period</label> 
                         <input type="text" name="period" class="form-control"  value="<?php  echo($period); ?>" readonly>
                                               </div>
                     
                         </div></div>

                      <button type="submit" class="btn btn-primary pull-centre" name="edit">Edit</button>
                    <div class="clearfix"></div>
                  </form>
                </div></div></div></div></div></div>
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