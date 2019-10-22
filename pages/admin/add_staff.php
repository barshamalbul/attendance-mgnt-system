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
          <div class="col-md-10">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Add staff</h4>
                  <p class="card-category">Fill in all the information below</p>
                </div>
                <div class="card-body">
                  <form action="../../controller/add_staff_controller.php" id="add_staff" method="post">
               
            <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name="Ufname" required>
                        </div>
                      </div>
					  
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" name="Uname" required>
                        </div>
                      </div>
					  </div>
            <div class="row">
                      <div class="col-md-5">
                      <label class="bmd-label-floating">Status</label>
                          <select name="status" class="form-control" id="status" required>
                                    <option value="None">Select Status</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                    <option value="disabled">Disabled</option>
                            </select>
                      </div>
          
                      <div class="col-md-5">
                      <label class="bmd-label-floating">Role</label>
                          <select name="role" class="form-control" id="role" required>
                                    <option value="None">Select Role</option>
                                    <option value="teacher">teacher</option>
                                    <option value="staff">staff</option>
                            </select>
                      </div>
                      
					  </div>  
					  <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">email</label>
                          <input type="email" class="form-control" name="Uemail" required>
                        </div>
                      </div>
                  
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">password</label>
                          <input type="password" class="form-control" name="Upassword"  required>
                        </div>
                      </div>
					  </div>
            <div class="row">
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label>Date of birth</label> <br>
                        <input type="date" name="Udob" required>
                         </div>
                      </div>
					
                      <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                        <label>Date of joining</label> <br>
                        <input type="date" name="Udoj" required>
                          </div>
                      </div> <div class="col-md-4">
                        <div class="form-group bmd-form-group">
                          <label>gender</label> <br>
                          <input type="radio" name="Ugender" value="male" required> Male &nbsp;
                            <input type="radio" name="Ugender" value="female" required> Female
                           </div>
                      </div>

					  </div>
            <div class="row">
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">contact no.</label>
                          <input type="number" class="form-control" name="Ucontact" min="1111111111" max="9999999999" required>
                        </div>
                      </div>
              
                      <div class="col-md-5">
                        <div class="form-group bmd-form-group">
                          <label class="bmd-label-floating">address</label>
                          <input type="text" class="form-control" name="Uaddress"  required>
                        </div>
                      </div>
					  </div><button type="submit" class="btn btn-primary pull-centre" name="add_staffs">Add Staff</button>
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

    });

    document.getElementById('add_staff').onsubmit=function() {
   
   var e=document.getElementById('role');         
   if(e.options[e.selectedIndex].value=="None")
   {
     $.notify({
   icon: "add_alert",
   message: "Role is not selected"

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