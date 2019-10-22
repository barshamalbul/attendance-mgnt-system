<!DOCTYPE html>
<html lang="en">

<head>
<?php include '../head.php'; ?>
  <script>
						$(function() {
							$( "#datepicker" ).datepicker();
							$( "#datepicker1" ).datepicker();
						});
					</script>
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
          <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add student</h4>
                  <p class="card-category">Fill in all the information below</p>
                </div>
                <div class="card-body">
                  <form action="../../controller/add_student_controller.php" name="add_student" id="add_student" method="post">
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name</label>
                          <input type="text" class="form-control" name="Sname" required>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                        <label>Date of Birth</label> <br>
                        <input type="date" name="Sdob" required>
                          </div>
                      </div>
					 </div>
            <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control" name="Saddress" required>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">Grade</label>
                          <input type="number" class="form-control" name="grade" min="1" max="10" required>
                        </div>
                      </div>
           </div>
					  <div class="row">
                      <div class="col-md-4">
                          <label class="bmd-label-floating">Section</label>
                          <select name="section" class="form-control" id="section" required>
                                    <option value="None">Section </option>
                                    <option value="a">A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                    <option value="d">D</option>
                                    <option value="d">E</option>
                                    <option value="d">F</option>
                                    <option value="d">G</option>
                                    <option value="d">H</option>
                            </select>
                      </div>
                      <div class="col-md-4">
                          <label class="bmd-label-floating" >Status</label> 
                          <select name="status" class="form-control" id="status" required>
                                    <option value="None">Status</option>
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option> 
                            </select>
                      </div>
                      <div class="col-md-4">
            <div class="form-group bmd-form-group">
					  <label class="bmd-label-floating">gender</label>
					</br></br>
								<input type="radio" name="gender" value="Male" id="gender" required>Male
                 
                <input type="radio" name="gender" value="female" id="gender" required>Female

                    </div></div></div>
                      <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">parent's number</label>
                          <input type="number" class="form-control" name="Sphn" min="1111111111" max="9999999999" required>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                        <label>Date of joining</label> <br>
                        <input type="date" name="Sdoj" required>
                          </div>
                      </div>
					  </div>
                    <button type="submit" class="btn btn-primary pull-centre" name="add_Student">Add Student</button>
                    <div class="clearfix"></div>
                  </form>
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
      
      //demo.showNotification('top','center');
      
  

    });
    
    document.getElementById('add_student').onsubmit=function() {
   
      var e=document.getElementById('section');         
      if(e.options[e.selectedIndex].value=="None")
      {
        $.notify({
      icon: "add_alert",
      message: "Section is not selected"

    }, {
      type: 'danger',
      timer: 3000,
      placement: {
        from: 'top',
        align: 'center'
      }
    });
       return false;
      }
var f=document.getElementById('status');
      if(f.options[f.selectedIndex].value=="None")
      {
        $.notify({
      icon: "add_alert",
      message: "status not selected"

    }, {
      type: 'danger',
      timer: 3000,
      placement: {
        from: 'top',
        align: 'center'
      }
    });
       return false;
      }
      return true; //  cancel submit
    }    
    
  </script>
</body>

</html>