<?php

if((isset($_GET['lid']))&&(isset($_GET['status'])))
{
	include '../common/connect.php';
	$lid=$_GET['lid'];
	$status=$_GET['status'];
	$sql="UPDATE `tbl_userss`.`lights` SET `status` = '".$status ."' WHERE `lights`.`esp_port` ='".$lid."';";
	mysqli_query($con,$sql);
	echo($sql);
	header('location:../pages/admin/lights.php');
}
else
{
	header('location:../index.php');
}


?>