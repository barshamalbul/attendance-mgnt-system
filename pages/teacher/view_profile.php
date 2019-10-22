<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once ('../../common/login_checker.php'); ?>
<?php include '../head.php'; ?>
</head>
<body class="">
  <div class="wrapper ">
<?php include '../../view/teacher/sidebar.php';
?>
<div class="main-panel">
      <!-- Navbar -->
<?php include '../../view/teacher/navbar.php';?> <!-- End Navbar -->
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Update your profile</p>
                </div>
                <div class="card-body">
                  <form action="../../controller/teacher/update_profile.php" id="update_profile"  method="post">
                  <?php 


$uid=$_SESSION['user_id'];
include '../../common/connect.php';
$query="SELECT * FROM tbl_users WHERE Uid ='$uid'";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
?>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name (disabled)</label>
                          <input type="text" class="form-control"  value="<?php echo($row['Ufname']); ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="<?php echo($row['Uname']); ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Address</label>
                          <input type="text" class="form-control"  name="add" value="<?php echo($row['Uaddress']); ?>">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="<?php echo($row['Uemail']); ?>">
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">status</label>
                          <input type="text" class="form-control" value="<?php echo($row['status']); ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Date of Birth</label>
                          <input type="date" class="form-control" value="<?php echo($row['Udob']); ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Date of Joining</label>
                          <input type="date" class="form-control" value="<?php echo($row['Udoj']); ?>"disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">contact no.</label>
                          <input type="number" class="form-control"  name="phone" value="<?php echo($row['Ucontact']); ?>">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">role</label>
                          <input type="text" class="form-control" value="<?php echo($row['role']); ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">gender</label>
                          <input type="text" class="form-control" value="<?php echo($row['Ugender']); ?>"disabled>
                        </div>
                      </div>
                      </div>
                  
                    <div class="row">
                     <div class="col-md-4">
                    <button type="submit" class="btn btn-primary pull-right" name="send">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div></div>
              </div>
            </div></div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                 <!-- <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a> --><br>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Teacher</h6>
                  <h4 class="card-title"><?php echo($row['Ufname']); ?> </h4>
                  <p class="card-description">
                  <?php echo($row['Uemail']); ?><br>
                 dob: <?php echo($row['Udob']); ?><br>
                 address: <?php echo($row['Uaddress']); ?><br>
                  </p>
                 <!-- <a href="#pablo" class="btn btn-primary btn-round">Follow</a>-->
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
      message: "Class not selected"

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