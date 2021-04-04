<?php
        session_start();
//header('location:login.php');
  //   header('location:hotels.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

$food  =$_POST['food'];

$name=$_SESSION['hname'];

 $upd= "UPDATE hoteler SET food='$food' WHERE hotel_name='$name'";
    mysqli_query($con, $upd);

     // header('location:hotels.php');

    echo"thank you for giving";
    
?>