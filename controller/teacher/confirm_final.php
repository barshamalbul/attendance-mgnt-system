<?php 
            session_start();
            include '../../common/connect.php';
            $uid=$_SESSION['user_id'];
            $csid=$_SESSION['csid'];
            $sql="INSERT INTO `teacher_attendence` (`tid_aid`, `tid`, `cid`, `date`, `status`)
             VALUES (NULL, '$uid', '$csid', curdate(), 'present');";
            mysqli_query($con,$sql);
            unset($_SESSION['csid']);
            unset($_SESSION['sql']);
            unset($_SESSION['student_total_count']);
            unset($_SESSION['attendance_count']);
            header('location:../../index.php');
            var_dump($_SESSION);
?>