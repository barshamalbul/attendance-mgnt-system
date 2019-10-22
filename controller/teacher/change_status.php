<?php 
    if((isset($_GET['sid']))&&(isset($_GET['csid']))&&(isset($_GET['status'])))
    {
        $status=$_GET['status'];
        $new_status;
        switch($status)
        {
            case 'present':
            $new_status="absent";
            break;

            case 'absent':
            $new_status='present';
            break;

            default:
            header('location:../../index.php');
            break;
        }
        $csid=$_GET['csid'];
        $sid=$_GET['sid'];
        $sql="UPDATE `tbl_students_attendance` SET `status` = '$new_status' WHERE `tbl_students_attendance`.`sid` = $sid and csid=$csid and date=curdate();";
        include '../../common/connect.php';
        mysqli_query($con,$sql);
        header('location:../../pages/teacher/overall_attendance_view.php');
    }
    else
    {
        header('location:../../index.php');
    }

?>