<?php
        session_start();
//header('location:login.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
 $name = $_POST['robin'];
$password =$_POST['password'];
$rid = $_POST['r_id'];
$add = $_POST['adress'];
$phon = $_POST['phone'];

$s = "select * from robins where r_id='$rid'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);


if($num == 1){
    echo"id is already exist";    
}else{
    $reg= " CALL addrobins('$name','$password','$rid','$add','$phon')";
    mysqli_query($con, $reg);
    echo" Registration over go back for login page";
    
}
?>


