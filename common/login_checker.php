<?php 
session_start();
if((isset($_SESSION['role']))||(isset($_SESSION['user_id'])))
{
}
else
{
  header('location:../../index.php');
}
?>
 