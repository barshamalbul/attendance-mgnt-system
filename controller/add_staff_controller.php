<?php 
$err=array();
if(isset($_POST['add_staffs']))
{ 
     $errcount=0;
    if(isset($_POST['Uname']) && (!empty($_POST['Uname'])))
	{
$Uname=$_POST['Uname'];
    }
    else{
$err['un']="error in username";        
$errUname="enter user name";
$errcount++;
    }
if(isset($_POST['Ufname']) && (!empty($_POST['Ufname'])))
	{
$Ufname=$_POST['Ufname'];
    }
    else{
$err['ufname']="error in username";
$errUfname="enter user fullname name";
$errcount++;
    }
if(isset($_POST['Ucontact']) && (!empty($_POST['Ucontact'])))
	{
$Ucon=$_POST['Ucontact'];
    }
    else{
        $err['contact']="error in contact";
        $errcon="Enter user contact no.";
        $errcount++;
    }
if(isset($_POST['role']) && (!empty($_POST['role'])))
	{
        if($role=="None")
        {
        $err['role']="error in role";
        $errrole="Enter role";
        $errcount++;
        }else
        {
            $role=$_POST['role'];
        }
        
    }
    if(isset($_POST['Uemail']) && (!empty($_POST['Uemail'])))
	{
$Uemail=$_POST['Uemail'];
    }
    else{
        $err['Email']="email";
        $erremail="enter valid email adddress";
        $errcount++;
    }
    if(isset($_POST['Upassword']) && (!empty($_POST['Upassword'])))
	{
        $Upassword=$_POST['Upassword'];
    }
    else{
        $err['pw']="error in pw";
        $errUpw="enter password";
        $errcount++;
    }
    if(isset($_POST['Udob']) && (!empty($_POST['Udob'])))
	{
$Udob=$_POST['Udob'];
    }
    else{
        $err['dob']="error in dob";
        $errudob="enter correct date";
        $errcount++;
    }
    if(isset($_POST['Udoj']) && (!empty($_POST['Udoj'])))
	{
$Udoj=$_POST['Udoj'];
    }
    else
    {
        $err['ujdob']="error in ujdob";
        $errUdoj="enter date of joining";
        $errcount++;
    }
    if(isset($_POST['Ugender']) && (!empty($_POST['Ugender'])))
	{
$Ugender=$_POST['Ugender'];
    }
    else{
        $err['gender']="error in gender";
        $errUgender="select right gender";
        $errcount++;
    }
    if(isset($_POST['Uaddress']) && (!empty($_POST['Uaddress'])))
	{ 
$Uaddress=$_POST['Uaddress'];
    }
    else
    {
        $err['uaddress']="error in address";
        $errUaddress="enter user address";
        $errcount++;
    }
    if(isset($_POST['status']) && (!empty($_POST['status'])))
	{
        if($role=="None")
        {
            $err['errstat']="error in status";
            $errstatus="enter status";
            $errcount++;
        }else
        {
            $status=$_POST['status'];
        }
    }
   
if($errcount == 0)
{
include '../common/connect.php';
 $sql="INSERT INTO tbl_users (Ufname,Uname,Ucontact,Udoj,role,Uemail,Upassword,status,Udob,Ugender,Uaddress) 
VALUES ('$Ufname','$Uname', '$Ucon','$Udoj','$role','$Uemail', MD5('$Upassword'), '$status', '$Udob','$Ugender','$Uaddress');";
if(mysqli_query($con,$sql))
{
    if($role=="teacher")
    {
    //header('location:../pages/admin/view_teacher.php');
    ?>
    <script>
    window.alert("added successfully");
    window.location='../pages/admin/view_teacher.php';
    </script>
   <?php
    }
    else
    {
   // header('location:../pages/admin/view_staff.php');
   ?>
   <script>
   window.alert("added successfully");
   window.location='../pages/admin/view_staff.php';
   </script>
  <?php
    
}
} 
else
{
    header('location:../pages/admin/add_staff?err=failed');
}
}
mysqli_close($con);
}

else{
    header('location:../pages/admin/add_staff?err=empty');
}

?>