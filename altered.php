<?php
 session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
 $id = $_SESSION['hid8'];
$q="DELETE FROM `corder` WHERE h_id='$id'";
$result1 = mysqli_query($con,$q);
header('location:home.php');

?> 