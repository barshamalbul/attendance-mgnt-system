<?php 
$err=array();
if(isset($_POST['send']))
{   $add;
    $email;
    $phone;
    $errcount=0;
    if((isset($_POST['add'])) && (!empty($_POST['add'])))
    {
        $add=$_POST['add'];
    }
    else
    {
        $err['address']="Address is empty";
        $errUaddress="enter user address";
        $errcount++;
    }
    if((isset($_POST['email'])) && (!empty($_POST['email'])))
    {
        $email=$_POST['email'];

    }
    else
    {
        $err['email']="email is empty";
        $erremail="enter  email address";
        $errcount++;
    }
    if((isset($_POST['phone'])) && (!empty($_POST['phone'])))
    {
        $phone=$_POST['phone'];
    }
  else
    {
        $err['phone']="contact is empty";
        $errphone="enter phone number";
        $errcount++;
    }
    if($errcount == 0)
    { 
        include '../common/connect.php';
        session_start();
        $uid=$_SESSION['user_id'];
        $sql="UPDATE tbl_users 
        SET Uemail='$email', Uaddress ='$add', Ucontact ='$phone'
         WHERE tbl_users.Uid='$uid' ;";
        if(mysqli_query($con,$sql))
        {
           // header('location:../pages/admin/user_info.php');
           ?>
           <script>
           window.alert("updated successfully");
           window.location='../pages/admin/user_info.php';
           </script>
          <?php
        }
        else
        {  
            header('location:../pages/admin/user_info?err=failed');
        }
        mysqli_close($con);
    }
    else
    {
        header('location:../pages/admin/user_info?err=empty');
        //error aayo
    }
}
?>