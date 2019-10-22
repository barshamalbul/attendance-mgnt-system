<!DOCTYPE html>
<html lang="en">
<head><?php 
require_once ('../../common/login_checker.php');
if(isset($_GET['err']))
{?>
  <script>
  alert("attendance for that subject already done");
</script>
<?php
} 
?>
  <?php include '../head.php'; ?>
</head>
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
     <h4 class="card-title">Student attendance</h4>
        <p class="card-category">Mark Attendance<br>
        <?php
                      $section=$_SESSION['section'];
                      $class=$_SESSION['class'];  
                      echo "class: " .$class."<br>"; 
                      echo "section: " .$section;
                      ?></p>
          </div>
            <div class="card-body">
              <form name="class_selector" id="class_selector" method="POST" action="../../controller/teacher/subject_select.php">
                 <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <select class="form-control" name="Class" id="Class">
                      <option value="None">Select Subject</option>       
                      <?php
                      $sql=" SELECT csid,subject FROM `tbl_class_schedule` 
                      WHERE class='$class' and section='$section' group by subject";
                      /* $sql="SELECT csid,subject FROM `tbl_class_schedule` 
                      WHERE class='$class' and section='$section' and day =DAYOFWEEK(CURDATE())"; */
                      include '../../common/connect.php';
                      $result=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_assoc($result))
                      {
                      ?> 
                      <option value="<?php echo($row['csid']); ?>"><?php echo($row['subject']); ?></option>
                      <?php } ?> 
                      </select>
<button type="submit" class="btn btn-primary pull-centre" name="send">Mark Attendance</button>
                    <div class="clearfix"></div>
                        </div>
                      </div>
                     </div>
                  </form>
                </div>
              </div>
            </div>
</div></div></div>
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


     document.getElementById('class_selector').onsubmit=function() {
   
   var res;
   var f=document.getElementById('Class');
      if(f.options[f.selectedIndex].value=="None")
      {
        $.notify({
      icon: "add_alert",
      message: "Suject not selected"

    }, {
      type: 'danger',
      timer: 1000,
      placement: {
        from: 'top',
        align: 'center'
      }
    });
       res = false;
      }

 
   if(res==false)
   {
     return false;
   }
   else
   {
    if (confirm('You selected Subject '+f.options[f.selectedIndex].text +' continue?')) {
      return true; //  cancel submit
 
} else {
  return false;
    // Do nothing!
}
   }
    }    



  </script>
</body>

</html>