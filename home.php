<?php
 session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'robinhod');

 $id = $_SESSION['hid7'];
$_SESSION['hid8']=$id;
$q="SELECT * FROM `corder` WHERE h_id='$id'";
$result1 = mysqli_query($con,$q);
$rows2= $result1-> fetch_assoc();
?>
<html>
    <title>loged in</title>
      <link rel="stylesheet" type="text/css" href="stylesstart.css">
    <body style="background: url(hotels2.jpg)">
        <div class="headder">
       <br> 
<h1>Thank you for donating food <?php echo $_SESSION['username'];?></h1>
             </div>
        <form action="hotels.php" method="post">
        
           <?php $name = $_SESSION['username'];
            
            $_SESSION['username']=$name;
            
            
$query="select food from hoteler where hotel_name='$name'";

$result = mysqli_query($con,$query);


            $_SESSION['hname']=$name;
            ?>
            <h3 style="color:white">food availablity</h3>
            
            <input type="text" name="food"><br> <br>
             <br> <br>
            

            <button type="submit">update</button><br><br>
          <h3 style="color:white">Food available is</h3> <br><br>
            
            
            <table style="color:white" border="20px;">
               <tr>
                  
                   <th>foods</th>
                   </tr>
                   <?php
                     while($rows= $result-> fetch_assoc())
                    {
                    ?>  
                     <tr>
                        
                          <td><?php echo $rows['food'];?></td>
                   
                   
                   </tr>
                 <?php
                     }
                    ?>    
                
                  
               </table>
               
        
        </form>
        
        <?php
        
        
        $num = mysqli_num_rows($result1);


if($num == 1)
{
  ?>   
    <div class="headder">
    <h2 style="color:black"> Robin  <?php echo $rows2['robin_n']; ?>  is on the way to serve the needy </h2><br>
     <form action="altered.php" method="post">
    <button type="submit" >donated</button>
           </form>
          </div>
        <?php
}
else
{
    
    echo"     ";
    
}
?> 
        
      <br><br>  <a href="login.php">log out</a>
   
    </body>
</html>