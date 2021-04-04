<?php
 session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

$query="select hotel_id, hotel_name, adress, phone,food from hoteler  WHERE food!='currently not have any food'";

$result = mysqli_query($con,$query);
$name=$_SESSION['username1'];
$id =$_SESSION['id']; 
$_SESSION['id1']=$id;
$_SESSION['usernam']=$name;

$q="SELECT * FROM `corder` WHERE robin_id='$id'";
$result1 = mysqli_query($con,$q);
$rows2= $result1-> fetch_assoc();


?>
<html>
    <title>loged in</title>
        <link rel="stylesheet" href="style.css">
       <body style="background: url(hotel.jpg)">
        <div class="headder">
        <?php
        
        
        $num = mysqli_num_rows($result1);


if($num == 1)
{
      ?> 
     <h2 style="color:gold;  text-align: center; "> you have to go to  <?php echo $rows2['hotelname'];?></h2><br>
    
        <?php
}
else
{
    ?> 
<h1 style="color:gold;  text-align: center;">Thank you for serving food <?php echo $_SESSION['username1'];?></h1><br>
           <div class="pavan">
        
        <h1 style="color:gold;  text-align: center;">Hotels</h1>
            
                   <?php
                     while($rows= $result-> fetch_assoc())
                    {
                    ?>  
                   <form action="order.php" method="post"> 
                   <button class="btn" type="submit" name="id" value="<?php echo $rows['hotel_id'] ;?>">  <tr>
                       
                        
                          <?php echo"Hotel " ;echo $rows['hotel_name'] ;?>&nbsp;&nbsp;&nbsp;&nbsp;
                       <?php echo $rows['adress'] ;?>&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php echo $rows['phone'] ;?>&nbsp;&nbsp;&nbsp;&nbsp;
                          <?php echo $rows['food'] ;?><br>
                   
                   
                   </tr></button>
                   </form>
                   
                   
                 <?php
                     }
                    ?>
        </div>
          <br> <br><br> 
    
       <a href="loginr.php">log out</a>
    </div>
    </body>
</html>  
        
 <?php    
}
?> 
        
       
        
       