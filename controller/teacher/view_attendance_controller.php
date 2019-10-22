<?php
if(isset($_POST['send']))
{ 
    $errcount=0;
    $err = array();
    if((isset($_POST['class'])) && (!empty($_POST['class'])))
    {
        $class=$_POST['class'];
    }
    else
    {
        $errclass="enter the class";
        $err['class']="class is empty";
        $errcount++;
    }
    if((isset($_POST['section'])) && (!empty($_POST['section'])))
    {
        $section=$_POST['section'];
    }
    else{
      
        $errsection="enter the section";
        $err['Section']="Section is empty";
        $errcount++;
    }
    if((isset($_POST['startdate'])) && (!empty($_POST['startdate'])))
    {
        $startdate=$_POST['startdate'];
    }
    else{
       
        $errstartdate="enter the start date";
        $err['startdate']="startdate is empty";
        $errcount++;
    }
    if((isset($_POST['enddate'])) && (!empty($_POST['enddate'])))
    {
        $enddate=$_POST['enddate'];
    }
    else{
      
        $errenddate="enter the  end date";
        $err['enddate']="enddate is empty";
        $errcount++;
    }
    
    session_start();
    $_SESSION['class']=$_POST['class'];
    $_SESSION['section']=$_POST['section'];
    $_SESSION['startdate']=$_POST['startdate'];
    $_SESSION['enddate']=$_POST['enddate'];
    var_dump($_SESSION);

   if(empty($err))
    { 
        include '../../common/connect.php';
        $sql="SELECT * from tbl_students_class 
        inner join tbl_students on tbl_students.Sid=tbl_students_class.Sid 
        WHERE tbl_students_class.class='$class'
         and tbl_students_class.section='$section' and date= YEAR(CURRENT_TIMESTAMP)";
        $result=mysqli_query($con,$sql);
         if($result)
         {
            $_SESSION['sql']=$sql;
            header('location:../../pages/teacher/teacher_view_attendance.php');
         }
         else{
            header('location:../../pages/teacher/teacher_view_attendance.php?err=fail'); 
         }
        
        mysqli_close($con);
    }     
    else
    {
       header('location:../../pages/teacher/teacher_view_attendance.php?err=empty'); 
    }
   
}




?>