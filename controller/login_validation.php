<?php
if(isset($_POST['send']))
{
	$errcount=0;
	if(isset($_POST['un'])&&!empty($_POST['un']))
	{
			$un=$_POST['un'];
	}
	else
	{
	$errun="please enter your username";
	$errcount++;
	}
	if(isset($_POST['pw'])&&!empty($_POST['pw']))
	{
		$pw=$_POST['pw'];		
	}
	else
	{
	$errpw="please enter your password";
	$errcount++;
	}
 if ($errcount== 0) 
	{
				include '../common/connect.php';
				$sql="SELECT * FROM tbl_users where Uname='$un' and Upassword = Md5('$pw')";
				$result=mysqli_query($con,$sql);
				$row= mysqli_fetch_array($result);		
				if($row==null)
				{
					header("location:index.php?err='username not found'");
				}
				else
				{ 
					if(md5($pw)==$row['Upassword'] )
						{
							session_start();
							$_SESSION['role']=$row['role'];
							$_SESSION['user_id']=$row['Uid'];
						if(($row['role']=="admin")&& ($row['status']!= "Inactive"))
						{
							header("location:../pages/admin/admin_dashboard.php");
						}
						else if(($row['role'] =="teacher") && ($row['status']!= "Inactive"))
						{
								header("location:../pages/teacher/teacher_dashboard.php");
						}
					else
						{
							header("location:../index.php?err='user not confirm'");
						}
					}
						else
					{
						header("location:../index.php?err='incorrect password'");
					}
	}
			mysqli_close($con);
	}
}
else
{
    header('location:../index.php');
}	
?>			