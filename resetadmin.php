<?php
 session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
$password1 = $_POST['password1'];
$password =$_POST['password'];


$s = "select * from admin where  password='$password1'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);


if($num == 1){
    $reg= "UPDATE admin SET password='$password' WHERE password='$password1'";
    mysqli_query($con, $reg);
    echo"password reset";
}else{
    
    echo"entered wrong old password";
}
?>
