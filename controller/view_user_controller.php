<?php 
 //  session_start();
if(isset($_POST['Uid'])){
            $_SESSION['UId']= $_POST['Uid'];
        
        $abc=  $_SESSION['UId'];
      //  if (!$_SESSION['UId']){
        //    echo "Please login";
          //  exit;
        //} 
      include '../connect/connect.php';
        $query="SELECT * FROM tbl_users WHERE Uid = '$abc'";
        $result=mysqli_query($con,$query);
        $row=mysqli_fetch_assoc($result);
      }
        ?>

       