<?php
        session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
$yes =$_POST['id'];
$rid=$_SESSION['id2'];
$hid=$_SESSION['id6'];
$_SESSION['rid']=$rid;
$_SESSION['hid6']=$hid;

if($yes == 0)
{
   
   header('location:statastic.php');    
}
else
{
    
       header('location:home2.php');  
    
}
?>
