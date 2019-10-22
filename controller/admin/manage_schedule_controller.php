<?php
if(isset($_POST['send']))
{ 
    $class;
    $section;
    $errcount=0;
    if((isset($_POST['class'])) && (!empty($_POST['class'])))
    {
        $class=$_POST['class'];
    }
    else
    {
      $errClass= "empty class selection";
      $errcount++;
    }
    if((isset($_POST['section'])) && (!empty($_POST['section'])))
    {
        $section=$_POST['section'];
    }
    else
    {
      $errSection= "empty Section  selection";
      $errcount++;
    } 
    if($errcount == 0)
    {
        include '../../common/connect.php';
        $_SESSION['class']=$class;
        $_SESSION['section']=$section;
        $sql="SELECT * FROM `tbl_students_class` where
         class='$class' and section='$section' and date=YEAR(CURDATE())";
        $result=mysqli_query($con,$sql);
        $rows= mysqli_num_rows($result);
        if($rows == 0)
        {   session_start();
            $_SESSION['class']=$class;
            $_SESSION['section']=$section;
            header('location:../../pages/admin/add_schedule.php');
        }
        else
        {
           session_start();
           $_SESSION['class']=$class;
           $_SESSION['section']=$section;
           header('location:../../pages/admin/manage_schedule_seccond.php');
        }
        
    }
    else
    {
       header('location:../../pages/admin/manage_schedule.php?err=failed');
    }
    mysqli_close($con);
}
else
{
header('location:../../pages/admin/manage_schedule.php?err=empty');
}
?>