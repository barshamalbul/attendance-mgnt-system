<?php
$class;
$section;
if(isset($_POST['add']))
{
$errcount=0;
if((isset($_POST['class'])) && (isset($_POST['class'])))
{
$class=$_POST['class'];
}
else
{
$errcount++;
}
if((isset($_POST['section'])) && (isset($_POST['section'])))
{
$section=$_POST['section'];
}
else
{
$errcount++;
}
if((isset($_POST['teacher'])) && (isset($_POST['teacher'])))
{
$teacher=$_POST['teacher'];
}
else
{
$errcount++;
}
if((isset($_POST['day'])) && (isset($_POST['day'])))
{
$day=$_POST['day'];
}
else
{
$errcount++;
}
if((isset($_POST['subject'])) && (isset($_POST['subject'])))
{
$subject=$_POST['subject'];
}
else
{
$errcount++;
}
if($errcount == 0)
{ 
    include '../../common/connect.php';
    $sql="SELECT * FROM `tbl_students_attendance` where class='$class' and section='$section' and date=CURDATE()";
    $result=mysqli_query($con,$sql);
    $rows= mysqli_num_rows($result);
    if($rows == 0)
    {
        header('location:../pages/admin/manage_schedule.php?err=failed');
    }
    else
    {
       session_start();
       $_SESSION['class']=$class;
       $_SESSION['section']=$section;
       var_dump($_SESSION);
       //header('location:../pages/manage_schedule_second.php');
    }
}



}
else
{
    header('location:../pages/admin/manage_schedule.php?err=empty');
}

?>