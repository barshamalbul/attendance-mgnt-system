<?php 
include '../../common/connect.php';
if((isset($_GET['uid']))&&(isset($_GET['status'])))
{
$status=$_GET['status'];
$Sid=$_GET['uid'];
echo $sql="UPDATE tbl_staff_attendance SET status = '$status' WHERE sid= '$Sid' and  date=CURRENT_DATE";
$rows=mysqli_query($con,$sql);
if($rows)
{
  header('location:../../pages/admin/mark_staff_attendence.php');
}
else{ 
    header('location:../../pages/admin/mark_staff_attendence.php');
}
}
?>