
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
        <a href="#" class="simple-text logo-normal">
           Attendance System
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item <?php if($file=="admin_dashboard.php"){echo("active");} ?>">
            <a class="nav-link" href="../../index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="user_info.php"){echo("active");} ?> ">
            <a class="nav-link" href="../../pages/admin/user_info.php">
              <i class="material-icons">person</i>
              <p>User information</p>
            </a>
          </li>
          
          <li class="nav-item  <?php if($file=="add_students.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/add_students.php">
              <i class="material-icons">content_paste</i>
              <p>Add student</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="add_staff.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/add_staff.php">
              <i class="material-icons">content_paste</i>
              <p>Add staff</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="view_staff.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/view_staff.php">
              <i class="material-icons">view_list</i>
              <p>view staffs</p>
            </a>
          </li>
            <li class="nav-item <?php if($file=="view_students.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/view_students.php">
              <i class="material-icons">view_list</i>
              <p>view students</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="view_teacher.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/view_teacher.php">
              <i class="material-icons">view_list</i>
              <p>view Teacher</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="mark_staff_attendence.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/mark_staff_attendence.php">
              <i class="material-icons">check</i>
              <p>Mark staff's attendance</p>
            </a>
          </li>
          <li class="nav-item <?php if($file=="manage_schedule.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/manage_schedule.php">
              <i class="material-icons">content_paste</i>
              <p>Manage Class Schedule </p>
            </a>
          </li><!--
         <li class="nav-item <?php if($file=="view_student_attendance.php"){echo("active");} ?>">
            <a class="nav-link" href="../../pages/admin/view_student_attendance.php">
              <i class="material-icons">content_paste</i>
              <p>view _student attendance </p>
            </a>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="../../controller/logout.php">
              <i class="material-icons">bubble_chart</i>
              <p>Logout</p>
            </a>
          </li>
          </ul>
      </div>
    </div>
    