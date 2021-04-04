<?php
        session_start();
//header('location:login.php');



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

 $name = $_POST['user'];

$password = $_POST['password'];


$s = "select * from admin where admin_name='$name' && password='$password'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);


if($num == 1)
{
     $_SESSION['username']=$name;
      header('location:admin.php'); 
    // echo"wellcome";
}
else
{
    
    echo"entered wrong password";
    
}
?>
