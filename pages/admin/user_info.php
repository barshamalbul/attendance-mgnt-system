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
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Update your profile</p>
                </div>
                <div class="card-body">
                  <form action="../../controller/update_profile.php" method="post" id="User_info" >
                  <?php 
        $uid=$_SESSION['user_id'];
        include '../../common/connect.php';
        $query="SELECT * FROM tbl_users WHERE Uid ='$uid'";
        $_SESSION['query']=$query;
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
?>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Full Name (disabled)</label>
                          <input type="text" class="form-control" value="<?php echo($row['Ufname']); ?>" disabled>
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
                          <input type="text" class="form-control" name="add" value="<?php echo($row['Uaddress']); ?>" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control" name="email" value="<?php echo($row['Uemail']); ?>" required >
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
                          <input type="date" class="form-control"  value="<?php echo($row['Udob']); ?>" disabled>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"> Date of Joining</label>
                          <input type="date" class="form-control"  value="<?php echo($row['Udoj']); ?>"disabled>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">contact</label>
                          <input type="number" class="form-control" name="phone"  min="1111111111" max="9999999999" value="<?php echo($row['Ucontact']); ?>" >
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
                          <input type="text" class="form-control" value="<?php echo($row['Ugender']); ?>" disabled>
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
                  <br>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">Admin</h6>
                  <h4 class="card-title"><?php echo($row['Ufname']); ?></h4>
                  <p class="card-description">
                  <?php echo($row['Uemail']); ?><br>
                 dob: <?php echo($row['Udob']); ?><br> 
                 address: <?php echo($row['Uaddress']); ?><br>
                 </p>
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
  </script>
</body>

</html>