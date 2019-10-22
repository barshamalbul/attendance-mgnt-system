<?php 

if(isset($_POST['add_Student']))
{
$Sphn=$_POST['Sphn'];
$Sname=$_POST['Sname'];
$Sadd=$_POST['Saddress'];
$Sgender=$_POST['gender'];
$Sdob=$_POST['Sdob'];
$Sdoj=$_POST['Sdoj'];
$section=$_POST['section'];
$class=$_POST['grade'];
$status=$_POST['status'];
//2018-08-04

$date= explode('-',$Sdoj);
 $date[0];
if((trim($Sphn)=="")||(trim($Sname)=="")||(trim($Sgender)=="")||(trim($Sdob)=="")||(trim($Sdoj)=="")||
(trim($Sadd)=="")||(trim($section)=="")||(trim($status)=="")||(trim($class)==""))
{
    header('location:../pages/admin/add_students.php?err=empty');
}
else
{
    if($section=="None")
    {
        header('location:../pages/admin/add_students.php?err=section');
    }
    else
    {
        if($status=="None")
        {
            header('location:../pages/admin/add_students.php?err=status');
        }
        else
        {
            include '../common/connect.php';

$sql ="INSERT INTO tbl_students (Sname,Sdob,Sgender,Saddress,Scontact,status)
	values
    ('$Sname','$Sdob','$Sgender','$Sadd','$Sphn','$status')";

$result = mysqli_query($con,$sql);
$id=mysqli_insert_id($con);
 $sql3="INSERT INTO `tbl_students_class` (`scid`, `Sid`, `class`, `section`, `date`) VALUES (NULL, '$id', '$class', '$section', '$date[0]');";
    
if(mysqli_query($con,$sql3))
{
     header('location:../pages/admin/view_students.php?err=sucess');
     ?>
     <script>
     window.alert("added successfully");
     window.location='../pages/admin/view_students.php';
     </script>
    <?php
}
else
{
    header('location:../pages/admin/add_students.php?err=failed');
}

        }
        mysqli_close($con);
    }
    
}
}

?> 