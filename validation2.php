<?php
        session_start();



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
 $id =$_POST['user'];
$password = $_POST['password'];


$s ="SELECT * FROM `robins` WHERE r_id='$id' && password='$password'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

$rows= $result-> fetch_assoc();
$name=$rows['robin_name'];


                      

if($num == 1)
{
    $_SESSION['id']=$id;
     $_SESSION['username1']=$name;
    header('location:home2.php');    
}
else
{
    
    echo"entered wrong password";
    
}
?>
