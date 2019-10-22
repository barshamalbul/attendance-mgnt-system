<?php
//if(isset($_post['send']))
//{ 
    $class;
    $section;
    $err = array();
    if(isset($_POST['Section']))
    {
        $section=$_POST['Section'];
    }
    else
    {
        $err['Section']="Section is empty";
    }

    if(isset($_POST['Class']))
    {
        $class=$_POST['Class'];
    }
    else
    {
        $err['Class']="Class is empty";
    }
session_start();
$_SESSION['section']=$_POST['Section'];
$_SESSION['class']=$_POST['Class'];
    if(empty($err))
    {
        include '../../common/connect.php';
        $sql="SELECT tbl_students.Sid,tbl_students.Sname,tbl_students_class.class,tbl_students_class.section
        FROM `tbl_students_class` 
        INNER JOIN tbl_students on tbl_students_class.Sid= tbl_students.Sid
        WHERE class ='$class' AND section ='$section' and tbl_students_class.date=YEAR(CURDATE())";
        $result=mysqli_query($con,$sql);
        $count=mysqli_num_rows($result);
        if($count!=0)
        {
            session_start();
            $_SESSION['sql']=$sql;
            $_SESSION['student_total_count']=$count;
            $_SESSION['attendance_count']=0;
           header('location:../../pages/teacher/subject_select.php');
        }
        else
        {
            header('location:../../pages/teacher/mark_attendance.php?err=emptyclass');
        }
    }
    else
    {
        header('location:../../pages/teacher/mark_attendance.php');    
    }

//}
//else
//{
    //header('location:../../index.php');
//}
?>