<!DOCTYPE html>

<html lang="en">
<head>
<?php include '../head.php'; ?>
</head>
<?php include '../../common/login_checker.php'; ?>
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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">View Class Schedule</h4>
                  <p class="card-category">Choose class and section</p>
                </div>
                <div class="card-body">
                  <form  name="class_selector" id="class_selector" action="../../controller/teacher/view_schedule_controller.php" method="post">
					<div class="row">
                      <div class="col-md-6">
                          <label >Class</label> <br>
                          <select name="class" class="form-control" id="Class" required>
                                    <option value="None">Class </option>
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
                            </select>
                      </div></div>
					<div class="row">
                      <div class="col-md-6">
                          <label >Section</label> <br>
                          <select name="section" class="form-control" id="Section" required>
                                    <option value="None">Section </option>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">c</option>
                                    <option value="d">D</option>
                                    <option value="d">E</option>
                                    <option value="d">F</option>
                                    <option value="d">G</option>
                                    <option value="d">H</option>
                            </select>
                      </div></div>
                  
                 
                    <button type="submit" name="send" class="btn btn-primary pull-right">View schedule</button>
                    <div class="clearfix"></div>
                  </form>
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
    document.getElementById('class_selector').onsubmit=function() {
   var e=document.getElementById('Section');         
   var res;
   var res2;
   var f=document.getElementById('Class');
      if(f.options[f.selectedIndex].value=="None")
      {
        $.notify({
      icon: "add_alert",
      message: "Class is not selected"
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
   if(e.options[e.selectedIndex].value=="None")
   {
     $.notify({
   icon: "add_alert",
   message: "Section is not selected"
 }, {
   type: 'danger',
   timer: 1000,
   placement: {
     from: 'top',
     align: 'center'
   }
 });
    res2=false;
   }
   if(res==false||res2==false)
   {
     return false;
   }
   else
   {
    if (confirm('You selected class '+f.options[f.selectedIndex].value +' and section '+e.options[e.selectedIndex].value +' continue?')) {
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