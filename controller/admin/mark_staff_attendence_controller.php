<?php 
include '../../common/connect.php';
if((isset($_GET['uid']))&&(isset($_GET['status'])))
{
$status=$_GET['status'];
$Sid=$_GET['uid'];
$sql="INSERT INTO `tbl_staff_attendance` (`Sid`, `date`, `status`) 
 VALUES ('$Sid', CURDATE(),'$status')";
$rows=mysqli_query($con,$sql);
if($rows)
{ header('location:../../pages/admin/mark_staff_attendence.php');
 // header('location:../../pages/admin/mark_staff_attendance.php');
}
else{
  header('location:../../pages/admin/mark_staff_attendence.php');
}
}
?>