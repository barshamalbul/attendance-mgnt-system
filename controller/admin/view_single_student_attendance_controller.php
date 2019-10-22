<?php 
if(isset($_POST['send']))
{ $errcount=0;
if((isset($_POST['name'])) &&(!empty($_POST['name'])))
{   $name=$_POST['name'];  }
else
{   $errcount++;  }
if((isset($_POST['startdate'])) &&(!empty($_POST['startdate'])))
{  $startdate=$_POST['startdate'];  }
else
{   $errcount++;  }
if((isset($_POST['enddate'])) &&(!empty($_POST['enddate'])))
{   $enddate=$_POST['enddate'];   }
else
{   $errcount++;  }
echo($errcount);
if($errcount == 0)
{  include '../../common/connect.php';
    session_start();
    $sid=$_SESSION['sid'];
    $_SESSION['startdate']= $startdate;
    $_SESSION['enddate']= $enddate;
    $sql="SELECT count(date) as total_days,sa.Sid,st.Sname from tbl_students_attendance as sa 
    INNER JOIN tbl_students as st on sa.Sid=st.Sid 
    where sa.Sid='$sid' and sa.date BETWEEN '$startdate' and '$enddate'
    and sa.status='present' GROUP by st.Sid";
   $result= mysqli_query($con,$sql);
   session_start();
    $_SESSION['sql']=$sql;
   $_SESSION['sql'];
if($result)
{   
    header('location:../../pages/admin/view_single_student_attendance_final.php');
}
else{
    header('location:../../pages/admin/view_single_student_attendance.php?err=fail');
}
}else{
    header('location:../../pages/admin/view_single_student_attendance.php?err=failed');
}
}
else{
    header('location:../../pages/admin/view_single_student_attendance.php?err=empty');
}
?>
