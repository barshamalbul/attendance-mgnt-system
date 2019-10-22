<?php 
if(isset($_POST['send']))
{ $errcount=0;
if((isset($_POST['name'])) &&(!empty($_POST['name'])))
{
    
    $name=$_POST['name'];
}
else
{   
     $errcount++;
}
if((isset($_POST['startdate'])) &&(!empty($_POST['startdate'])))
{
    $startdate=$_POST['startdate'];

}
else
{echo 'errcou';
    $errcount++;
}
if((isset($_POST['enddate'])) &&(!empty($_POST['enddate'])))
{
    $enddate=$_POST['enddate'];

}
else
{
    echo 'err';
    $errcount++;
}
echo($errcount);
if($errcount == 0)
{
    $uid=$_POST['uid'];
    session_start();
    $_SESSION['startdate']= $startdate;
    $_SESSION['enddate']= $enddate;
    include '../common/connect.php';
    $sql="SELECT count(date) as total_days, tbl_users.Uname 
    FROM `tbl_staff_attendance` inner join tbl_users on tbl_staff_attendance.sid=tbl_users.Uid
     WHERE Uid='$uid' and date BETWEEN '$startdate' and '$enddate' 
    and tbl_staff_attendance.status='present' GROUP by tbl_users.Uid";
   $result= mysqli_query($con,$sql);
   session_start();
    $_SESSION['sql']=$sql;
   $_SESSION['sql'];
if($result)
{   
    header('location:../pages/admin/view_single_staff_attendance_final.php');
}
else{
    header('location:../pages/admin/view_single_staff_attendance.php?err=fail');
}
}else{
    header('location:../pages/admin/view_single_staff_attendance.php?err=failed');
}
}
else{
    header('location:../pages/admin/view_single_staff_attendance.php?err=empty');
}
?>
