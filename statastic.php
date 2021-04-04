<?php
        session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
$rid=$_SESSION['rid'];
$hid=$_SESSION['hid6'];

$query="SELECT `hotel_id`,`hotel_name` FROM `hoteler` WHERE hotel_id='$hid'";
$result = mysqli_query($con,$query);
$rows= mysqli_fetch_assoc($result);
 $hname=$rows['hotel_name'];
 $hoid=$rows['hotel_id'];
$query1="SELECT `robin_name`, `r_id` FROM `robins` WHERE r_id='$rid'";
$result2 = mysqli_query($con,$query1);
 $rows1= mysqli_fetch_assoc($result2);
 $robid=$rows1['r_id'];
 $rname=$rows1['robin_name'];
$dat= date('y-m-d');
 $s="INSERT INTO `statastics`(`h_id`, `hotelname`, `robin_id`, `robin_n`, `date`)  VALUES ('$hoid','$hname','$robid','$rname','$dat')";
 mysqli_query($con,$s);
header('location:home2.php');  
 $upd= "UPDATE hoteler SET food='currently not have any food' WHERE hotel_id='$hid'";
 mysqli_query($con,$upd);
?>