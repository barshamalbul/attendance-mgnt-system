<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
<div class="container-fluid">
<div class="navbar-wrapper">
<?php 
$path=$_SERVER['REQUEST_URI'];
$file = basename($path);
switch($file)
{
  case 'admin_dashboard.php':
  echo(" Admin Dashboard");
  break;

  case 'user_info.php':
  echo("User info");
  break;

  case 'add_students.php':
  echo("Add Student");
  break;

  case 'add_staff.php':
  echo("Add Staff");
  break;

  case 'view_staff.php':
  echo("View Staff");
  break;

  case 'view_students.php':
  echo("View students");
  break;

  case 'view_teacher.php':
  echo("View Teacher");
  break;

  case 'manage_schedule.php':
  echo("Manage Class Schedule");
  break;

  case 'mark_attendence.php':
  echo("Mark Staff's attendence");
  break;
}
?>

</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                 <a href='../../pages/admin/user_info.php'
                   class="btn btn-white btn-round btn-just-icon"> <i class="material-icons">person</i></a>
                 
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
           <ul class="navbar-nav">
              <li class="nav-item">
              </li>
              </ul> 
          </div>
        </div>
</nav>
      