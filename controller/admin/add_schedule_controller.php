<?php
 function get_day($day)
 {
   switch($day){
     case 'sunday':
     return "1";
     break;
     
     case 'monday':
     return "2";
     break;
     
     case 'tuesday':
     return "3";
     break;
     
     case 'wednesday':
     return "4";
     break;
     
     case 'thursday':
     return "5";
     break;
     
     case 'friday':
     return "6";
     break;
     
     case 'saturday':
     return "7";
     break;
     
     default:
     return "none";
   }
 }

if(isset($_POST['edit']))
{
$errcount=0;
if((isset($_POST['Stname']))&& (!empty($_POST['Stname'])))
{
$tid= $_POST['Stname'];
}
else{
$errcount++;
}
if((isset($_POST['subject']))&& (!empty($_POST['subject'])))
{
$subject=$_POST['subject'];
}
else{
    $errcount++;
}
if((isset($_POST['day']))&& (!empty($_POST['day'])))
{
    $day=get_day($_POST['day']);
}
else{
    $errcount++;
}
if((isset($_POST['period']))&& (!empty($_POST['period'])))
{
$period=$_POST['period'];
}
else{
    $errcount++;
}
session_start();
if($errcount==0)
{   
$class=$_SESSION['class'];
$section=$_SESSION['section'];
include '../../common/connect.php';
/*$sql="SELECT Uid FROM tbl_users where Uname='$stname' and role='teacher'";
$result1=mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($result1);
echo $sql;
$tid=($rows['Uid']);
echo $tid;*/
$sql1="INSERT INTO tbl_class_schedule (class,section,day,period,tid,subject) 
    VALUES ('$class','$section', '$day','$period','$tid','$subject')";
/*$sql1="UPDATE tbl_class_schedule
SET day ='$day',subject='$subject',period='$period',tid='$tid'
WHERE tbl_class_schedule.csid='$csid' and tbl_class_schedule.day='$day' and tbl_class_schedule.period='$period'";*/
$result=mysqli_query($con,$sql1);
if($result)
    { ?>
<script>
    window.alert("added successfully");
    window.location='../../pages/admin/manage_schedule_seccond.php';
    </script>
    <?php
    }else
{ 
    ?>
    <script>
        window.alert("failed to add");
        window.location='../../pages/admin/add_schedule.php';
        </script>
        <?php
}
    }
}
else
{
    ?>
    <script>
        window.alert("error occur ");
        //window.location='../../pages/admin/edit_schedule.php';
        </script>
        <?php
}
?>