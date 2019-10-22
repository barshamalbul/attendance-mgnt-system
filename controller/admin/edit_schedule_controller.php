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
{  $tid= $_POST['Stname'];  }
else{  $errcount++;  }
if((isset($_POST['subject']))&& (!empty($_POST['subject'])))
{ $subject=$_POST['subject']; }
else{  $errcount++;  }
if((isset($_POST['day']))&& (!empty($_POST['day'])))
{     $day=get_day($_POST['day']);   }
else{ $errcount++;  }
if((isset($_POST['period']))&& (!empty($_POST['period'])))
{  $period=$_POST['period'];}
else{ $errcount++;  }
//print($errcount);
if($errcount==0)
{   session_start();
    $class=$_SESSION['class'];
    $section=$_SESSION['section'];
include '../../common/connect.php';
 $sql1="UPDATE tbl_class_schedule SET tbl_class_schedule.subject='$subject',
tbl_class_schedule.period='$period',tbl_class_schedule.tid='$tid'
 WHERE (tbl_class_schedule.day='$day' and tbl_class_schedule.period='$period') 
 and (tbl_class_schedule.class='$class' 
and tbl_class_schedule.section='$section')";
/*$sql1="UPDATE tbl_class_schedule
SET day ='$day',subject='$subject',period='$period',tid='$tid'
WHERE tbl_class_schedule.csid='$csid' and tbl_class_schedule.day='$day' and tbl_class_schedule.period='$period'";*/
$result=mysqli_query($con,$sql1);

if($result)
    { ?><script>
    window.alert("updated successfully");
    window.location='../../pages/admin/manage_schedule_seccond.php';
    </script><?php 
    }else{
    ?><script>
        window.alert("failed to update");
        window.location='../../pages/admin/edit_schedule.php';
        </script><?php
}
    }
}
 else
{
    ?>
    <script>
        window.alert("error occur ");
        window.location='../../pages/admin/edit_schedule.php';
        </script>
        <?php
}
?>