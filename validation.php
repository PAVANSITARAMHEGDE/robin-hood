<?php
        session_start();
//header('location:login.php');



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
$id =$_POST['user'];
$password =$_POST['password'];

$s = "SELECT * FROM `hoteler` WHERE hotel_id='$id' && password='$password'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

$rows= $result-> fetch_assoc();
$name=$rows['hotel_name'];


if($num == 1)
{
     $_SESSION['username']=$name;
    $_SESSION['hid7']=$id;
    
    header('location:home.php');    
}
else
{
    
    echo"entered wrong password";

}
?>


