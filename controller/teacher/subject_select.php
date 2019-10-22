<?php
if(isset($_POST['Class']))
{
    session_start();
    $_SESSION['csid']=$_POST['Class'];
    $csid=$_POST['Class'];
    include '../../common/connect.php';
    $sql="SELECT * FROM `tbl_students_attendance` where csid='$csid'  and date=CURDATE()";
    $result=mysqli_query($con,$sql);
    $rows= mysqli_num_rows($result);
    if($rows == 0)
    {
    header('location:../../pages/teacher/individual_attendance.php');
    }
    else
    {
        header('location:../../pages/teacher/subject_select.php?err=attendance_done');
    }
}

?>