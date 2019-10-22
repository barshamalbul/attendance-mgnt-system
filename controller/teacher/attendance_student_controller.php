<?php 
session_start();
if((isset($_GET['sid']))&&(isset($_GET['status'])))
{
$status=$_GET['status'];
$sid=$_GET['sid'];
$csid=$_SESSION['csid'];
 $_SESSION['csid'];
$tmp=$_SESSION['attendance_count'];
$tmp++;
$_SESSION['attendance_count']=$tmp;
 $sql="INSERT INTO `tbl_students_attendance` (`said`, `Sid`, `date`, `status`, `csid`) 
 VALUES (NULL, '$sid', curdate(), '$status', '$csid');";
include '../../common/connect.php';
mysqli_query($con,$sql);

if($_SESSION['student_total_count']==$_SESSION['attendance_count'])
{
   header('location:../../pages/teacher/overall_attendance_view.php');
}
else
{
header('location:../../pages/teacher/individual_attendance.php');
}
}
else
{
    header('location:../../index.php');
}
?>