
<?php 
$path=$_SERVER['REQUEST_URI'];
$file = basename($path);
?>


<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
           Attendance System
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($file=="teacher_dashboard.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/teacher/teacher_dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="view_profile.php"){echo("active");} ?> ">
            <a class="nav-link" href="../../pages/teacher/view_profile.php">
              <i class="material-icons">person</i>
              <p>User information</p>
            </a>
          </li>
            <li class="nav-item <?php if($file=="view_students.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/teacher/view_students.php">
              <i class="material-icons">view_list</i>
              <p>view students info</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="mark_attendance.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/teacher/mark_attendance.php">
              <i class="material-icons">check</i>
              <p>Mark student attendance</p>
            </a>
          </li>
          </li>
            <li class="nav-item <?php if($file=="view_class_schedule_first.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/teacher/view_class_schedule_first.php">
              <i class="material-icons">view_list</i>
              <p>view Class Schedule</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../../controller/logout.php">
              <i class="material-icons">bubble_chart</i>
              <p>Logout</p>
            </a>
          </li>
          </ul>
      </div>
    </div>
    