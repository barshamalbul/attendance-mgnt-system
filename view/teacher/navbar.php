<?php 
$path=$_SERVER['REQUEST_URI'];
$file = basename($path);
?>
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
        <div class="container-fluid">
          <div class="navbar-wrapper">
<?php 
switch($file)
{
  case 'teacher_dashboard.php':
  echo("Teacher Dashboard");
  break;

  case 'view_profile.php':
  echo("User info");
  break;

  case 'view_students.php':
  echo("View students");
  break;

  case 'mark_attendance.php':
  echo("Mark Attendance");
  break;
  
  case 'view_class_schedule_first.php':
  echo("Class Schedule");
  break;

  default:
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
              <a href='../../pages/teacher/view_profile.php'
                   class="btn btn-white btn-round btn-just-icon"><i class="material-icons">person</i></a>
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
