<?php
        session_start();
//header('location:login.php');



$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
 $name =$_POST['user'];
$password =$_POST['password'];
$hid = $_POST['hotel_id'];
$add = $_POST['adress'];
$phon = $_POST['phone'];



$s = "select * from hoteler where hotel_id='$hid'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);


if($num == 1){
    echo"id is already exist";    
}else{
    $reg= "CALL addhoteler('$hid','$password', '$name','$add','$phon' ) ";
    mysqli_query($con, $reg);
    echo" Registration over go back for login page";
    
}
?>


