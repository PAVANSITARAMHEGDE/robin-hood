<?php
        session_start();
//header('location:start.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');
 $name =$_POST['from'];

$rid = $_POST['robins'];
$feed = $_POST['feedback'];


$reg = " INSERT INTO feedback(feedback_given_by, our_ppl, feed_back) VALUES ('$name','$rid', '$feed')";

    mysqli_query($con, $reg);
echo "thank you for giving feedback" ;
?>


